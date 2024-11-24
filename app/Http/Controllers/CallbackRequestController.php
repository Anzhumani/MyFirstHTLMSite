<?php

namespace App\Http\Controllers;

use App\Models\CallbackRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CallbackRequestController extends Controller
{
    public function store(Request $request)
    {
        Carbon::setLocale('ru');

        // Валидация данных формы
        $validatedData = $request->validate([
            'phone_number' => ['required', 'string'],
        ], [
            'phone_number.required' => 'Пожалуйста, введите ваш номер телефона.',
        ]);

        // Нормализация номера телефона
        $normalizedPhoneNumber = $this->normalizePhoneNumber($validatedData['phone_number']);

        if (!$normalizedPhoneNumber) {
            return response()->json([
                'success' => false,
                'message' => 'Номер телефона указан в неверном формате. Пожалуйста, укажите его в одном из следующих форматов: 10 цифр, 11 цифр с 8, +7',
            ], 422); // HTTP статус 422 (Unprocessable Entity)
        }

        // Проверяем, есть ли уже заявка с этим номером за последний час
        $lastRequest = CallbackRequest::where('phone_number', $normalizedPhoneNumber)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($lastRequest && $lastRequest->created_at > Carbon::now()->subHour()) {
            // Вычисляем оставшееся время до подачи новой заявки
            $remainingTime = Carbon::parse($lastRequest->created_at)->addHour()->diffForHumans([
                'parts' => 2,
                'short' => true,
                'options' => Carbon::JUST_NOW | Carbon::ONE_DAY_WORDS,
            ]);

            return response()->json([
                'success' => false,
                'message' => "Заявка уже создана. Вы можете подать новую заявку через $remainingTime",
            ], 429); // HTTP статус 429 (Too Many Requests)
        }

        // Создание новой заявки
        CallbackRequest::create([
            'source' => $request->input('source', 'web_form'),
            'phone_number' => $normalizedPhoneNumber,
        ]);

        // Возвращаем JSON-ответ с HTTP-статусом 200
        return response()->json([
            'success' => true,
            'message' => 'Спасибо! Мы свяжемся с вами в ближайшее время.',
        ], 200);
    }

    /**
     * Нормализация номера телефона до 10-значного формата.
     * 
     * @param string $phoneNumber
     * @return string|null
     */
    private function normalizePhoneNumber(string $phoneNumber): ?string
    {
        // Убираем все нецифровые символы кроме '+'
        $phoneNumber = preg_replace('/[^\d+]/', '', $phoneNumber);

        if (preg_match('/^\+7(\d{10})$/', $phoneNumber, $matches)) {
            // Формат +7XXXXXXXXXX -> XXXXXXXXXX
            return $matches[1];
        }

        if (preg_match('/^8(\d{10})$/', $phoneNumber, $matches)) {
            // Формат 8XXXXXXXXXX -> XXXXXXXXXX
            return $matches[1];
        }

        if (preg_match('/^7(\d{10})$/', $phoneNumber, $matches)) {
            // Формат 7XXXXXXXXXX -> XXXXXXXXXX
            return $matches[1];
        }

        if (preg_match('/^(\d{10})$/', $phoneNumber, $matches)) {
            // Формат XXXXXXXXXX -> XXXXXXXXXX
            return $matches[1];
        }

        // Если формат не распознан, возвращаем null
        return null;
    }
}