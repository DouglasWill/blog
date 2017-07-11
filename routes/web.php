<?php

Route::get('/', function () {
    return view('templates.index');
});

Route::get('contato', function () {
    return view('templates.contato');
});

Route::get('about', function () {
    return view('templates.sobre');
});

Route::get('conteudos', function () {
    return view('templates.conteudo');
});