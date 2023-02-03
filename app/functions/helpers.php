<?php

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    
    die();
}

function replace($data){
    return str_replace("/", ".", $data . ".html");
}