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

Route::view('/', 'main.index')->name('main.index');

Route::view('/russian_lang', 'russian_lang.index')->name('russian_lang.index');
Route::view('/russian_lang/lexis', 'russian_lang.lexis')->name('russian_lang.lexis');
Route::view('/russian_lang/phraseological', 'russian_lang.phraseological')->name('russian_lang.phraseological');
Route::view('/russian_lang/homonyms', 'russian_lang.homonyms')->name('russian_lang.homonyms');
Route::view('/russian_lang/synonyms', 'russian_lang.synonyms')->name('russian_lang.synonyms');
Route::view('/russian_lang/antonyms', 'russian_lang.antonyms')->name('russian_lang.antonyms');
Route::view('/russian_lang/neologisms', 'russian_lang.neologisms')->name('russian_lang.neologisms');
Route::view('/russian_lang/dialect_words', 'russian_lang.dialect_words')->name('russian_lang.dialect_words');
Route::view('/russian_lang/phonetics', 'russian_lang.phonetics')->name('russian_lang.phonetics');

Route::view('/russian_lang/spelling', 'russian_lang.spelling')->name('russian_lang.spelling');
Route::view('/russian_lang/spelling', 'russian_lang.spelling')->name('russian_lang.spelling');


