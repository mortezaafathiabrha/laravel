<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

// The page needs no session or database, so the routes are loaded without the
// "web" middleware group.
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        then: function () {
            Route::group([], base_path('routes/web.php'));
        },
    )
    ->withMiddleware(function ($middleware) {
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function ($exceptions) {
        //
    })->create();
