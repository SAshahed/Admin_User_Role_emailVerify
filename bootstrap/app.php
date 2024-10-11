<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AuthMiddleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([

            'admin' => \App\Http\Middleware\AuthMiddleware::class,
            'user' => \App\Http\Middleware\AuthMiddleware::class,
           // 'teacher' => \App\Http\Middleware\TeacherMiddleware::class,
            //'parent' => \App\Http\Middleware\ParentMiddleware::class,


      ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
