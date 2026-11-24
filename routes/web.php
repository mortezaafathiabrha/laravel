<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response(<<<'HTML'
<!DOCTYPE html>
<html>
<head>
    <title>Hello World - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: linear-gradient(135deg, #ff2d20 0%, #f9a8a2 100%); }
        .container { text-align: center; color: white; }
        h1 { font-size: 3em; margin: 0; }
        p { font-size: 1.2em; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello World!</h1>
        <p>Welcome to Laravel</p>
    </div>
</body>
</html>
HTML);
});
