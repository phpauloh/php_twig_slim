<?php

namespace app\controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class UserController{

    public function show(Request $req, Response $resp, array $data){
        dd($data['id']);
    }

}