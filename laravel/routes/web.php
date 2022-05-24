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

Route::get('/comics', function () {
    include __DIR__ . '/../config/navbarMenu.php';

    $comics = config('comics');

    return view('comics', $menu, ['comicsList' => $comics]);
})->name('comics');


Route::get('comics/id={id}', function ($id) {
    include __DIR__ . '/../config/navbarMenu.php';

    $comics = config('comics');

    if (is_numeric($id) && $id < count($comics) && $id > 0) {
        $comic = $comics[$id];

        return view('comics', $menu, ['singleComic' => $comic]);
    }
})->name('comic');
