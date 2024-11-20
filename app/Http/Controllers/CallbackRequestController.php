<?php

namespace App\Http\Controllers;

use App\Models\CallbackRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CallbackRequestController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных формы
        $validatedData = $request->validate([
            'phone_number' => ['required', 'regex:/^\d{10,11}$/'],
        ], [
            'phone_number.required' => 'Пожалуйста, введите ваш номер телефона.',
            'phone_number.regex' => 'Номер телефона должен содержать 10 цифр.',
            'consent.accepted' => 'Вы должны согласиться с правилами обработки персональных данных.',
        ]);

        // Проверяем, есть ли уже заявка с этим номером за последний час
        $lastRequest = CallbackRequest::where('phone_number', $validatedData['phone_number'])
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
                'message' => "Заявка уже создана. Вы можете подать новую заявку через $remainingTime.",
            ], 429); // HTTP статус 429 (Too Many Requests)
        }

        // Создание новой заявки
        CallbackRequest::create([
            'source' => $request->input('source', 'web_form'),
            'phone_number' => $validatedData['phone_number'],
        ]);

        // Возвращаем JSON-ответ с HTTP-статусом 200
        return response()->json([
            'success' => true,
            'message' => 'Спасибо! Мы свяжемся с вами в ближайшее время.',
        ], 200);
    }
}

