<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/{nome}', function (int $id, string $nome) {
    return "Usuario Id: ". $id . "<br>" .
            "Usuario Nome: ". $nome;
});
Route::get('/divisao/{num1}/{num2}', function (int $num1, int $num2) {
    return $num1 / $num2;
});
Route::get('/multi/{num1}/{num2}', function (int $num1, int $num2) {
    return $num1 * $num2;
});
Route::get('test-ale/{cpf}', function (int $cpf) {
    if ($cpf == '11111111111')
        return "TRUE";
    else
        return "false";
});
Route::prefix('calc')->group(function () {
    Route::get('/soma/{num1}/{num2?}', function (int $num1, int $num2=0) {
    return $num1 + $num2;
});
    Route::get('/sub/{num1}/{num2?}', function (int $num1, int $num2=0) {
    return $num1 - $num2;
});
});
