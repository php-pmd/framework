<?php

use PhpPmd\Framework\Route;

Route::addRoute('/index.php', function ($request) {
    var_dump($request->input('a'));
});
