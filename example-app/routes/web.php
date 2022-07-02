<?php

use Illuminate\Support\Facades\Route;       //подключаем работу с маршрутами (как import в REACT)
use Illuminate\Support\Facades\DB;          //прописываем включение работы с базой данных (как import в REACT)
use App\Http\Controllers\FilmController;    //опдключаем наш контроллер (ОБЯЗАТЕЛЬНО)
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\TeatreController;
use App\Http\Controllers\FavoritesController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', [FilmController::class, 'table']);
// Route::get('/output', [FilmController::class, 'output']);          //подключаем маршрут для таблицы
Route::get('/Cinema',[FilmController::class, 'cinema']);              //cinema
Route::get('/Concert',[MusicaController::class, 'musica']);           //musica
Route::get('/Performance',[TeatreController::class, 'teatre']);       //teatre
Route::get('/Favorites',[FavoritesController::class, 'favorites']);   //favorites
Route::get('/del/{id}', [FavoritesController::class, 'destroy']);    //удаление продукта из БД
Route::get('/FavoritesFilm/{id}',[FilmController::class, 'addtofavorite']);   //favorites add film
Route::get('/FavoritesMusic/{id}',[MusicaController::class, 'addtofavorite']);   //favorites add music
Route::get('/FavoritesTeatre/{id}',[TeatreController::class, 'addtofavorite']);   //favorites add teatre