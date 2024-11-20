<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallbackRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('callback_requests', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('source')->nullable(); // Источник создания заявки
            $table->string('phone_number'); // Номер телефона
            $table->timestamp('scheduled_time')->nullable(); // Запланированное время звонка
            $table->boolean('call_made')->default(false); // Был ли совершен вызов
            $table->timestamp('call_date')->nullable(); // Дата совершения вызова
            $table->string('call_result')->nullable(); // Результат звонка
            $table->text('comment')->nullable(); // Комментарий
            $table->timestamps(); // created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('callback_requests');
    }
}