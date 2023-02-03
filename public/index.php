<?php

require "../bootstrap.php";

use Slim\Http\Request;
use Slim\Http\Response;

/* AGRUPAMENTO DE ROTAS
$app->group("/admin", function() use($app){
    $app->get("/login", function(){
    echo "Admin login";
    });
});*/

$app->get('/', 'app\controllers\HomeController:index');
$app->get('/show/{id}', 'app\controllers\UserController:show');

$app->run();