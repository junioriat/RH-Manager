<?php

use App\Models\User;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/email', function () {
    Mail::raw('E-mail para teste do Sistema de RH ', function (Message $message) {
        $message->to('test@example.com')
        ->subject('Bem Vindo ao RH MANAGER')
        ->from('rh@rhmanager.com');
    });

    echo 'E-mail enviado com sucesso!';
});

Route::get('/admin', function(){
    $admin = User::with('detail', 'department')->find(1);
    dd($admin->toArray());
});
