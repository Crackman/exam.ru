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

Route::view('/russian_lang', 'russian_lang.lexis_and_phras.index')->name('russian_lang.index');
Route::view('/russian_lang/lexis_and_phras/lexis', 'russian_lang.lexis_and_phras.lexis')->name('russian_lang.lexis');
Route::view('/russian_lang/lexis_and_phras/phraseological', 'russian_lang.lexis_and_phras.phraseological')->name('russian_lang.phraseological');
Route::view('/russian_lang/lexis_and_phras/homonyms', 'russian_lang.lexis_and_phras.homonyms')->name('russian_lang.homonyms');
Route::view('/russian_lang/lexis_and_phras/synonyms', 'russian_lang.lexis_and_phras.synonyms')->name('russian_lang.synonyms');
Route::view('/russian_lang/lexis_and_phras/antonyms', 'russian_lang.lexis_and_phras.antonyms')->name('russian_lang.antonyms');
Route::view('/russian_lang/lexis_and_phras/neologisms', 'russian_lang.lexis_and_phras.neologisms')->name('russian_lang.neologisms');
Route::view('/russian_lang/lexis_and_phras/dialect_words', 'russian_lang.lexis_and_phras.dialect_words')->name('russian_lang.dialect_words');

Route::view('/russian_lang/phonetics/phonetics', 'russian_lang.phonetics.phonetics')->name('russian_lang.phonetics');

Route::view('/russian_lang/spelling/spelling', 'russian_lang.spelling.spelling')->name('russian_lang.spelling');
Route::view('/russian_lang/spelling/what_spelling', 'russian_lang.spelling.what_spelling')->name('russian_lang.what_spelling');
Route::view('/russian_lang/spelling/bezudar_glas_v_coren', 'russian_lang.spelling.bezudar_glas_v_coren')->name('russian_lang.bezudar_glas_v_coren');
Route::view('/russian_lang/spelling/o_e_posle_shipyashih', 'russian_lang.spelling.o_e_posle_shipyashih')->name('russian_lang.o_e_posle_shipyashih');
Route::view('/russian_lang/spelling/o_e_posle_shipyashih_v_okonchan_i_sufficsax', 'russian_lang.spelling.o_e_posle_shipyashih_v_okonchan_i_sufficsax')->name('russian_lang.o_e_posle_shipyashih_v_okonchan_i_sufficsax');


