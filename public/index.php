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

$app->get("/", function(Request $req, Response $resp, array $args){
    dd($req);
});

$app->run();