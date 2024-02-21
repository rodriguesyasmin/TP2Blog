<?php

use App\Controllers;
use App\Routes\Route;



Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');

Route::get('/commentaire', 'CommentaireController@index');


Route::get('/commentaire/show', 'CommentaireController@show');


Route::get('/commentaire/create', 'CommentaireController@create');



Route::post('/commentaire/create', 'CommentaireController@store'); //a voir

Route::get('/commentaire/edit', 'CommentaireController@edit');

Route::post('/commentaire/edit', 'CommentaireController@update'); // a voir

Route::post('/commentaire/delete', 'CommentaireController@delete'); // a voir





Route::dispatch();
