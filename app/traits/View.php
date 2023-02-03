<?php

namespace app\traits;

trait View{

    protected $twig;

    protected function twig(){
        $loader = new \Twig\Loader\FilesystemLoader('../app/views');

        $this->twig = new \Twig\Environment($loader, [
            //'cache' => '',
            'debug' => true
        ]);
    }

    protected function functions(){

    }

    protected function load(){
        $this->twig();

        $this->functions();
    }

    protected function view($view, $data){ 

        $this->load();

        $nameView = replace($view);

        $template = $this->twig->load($nameView);

        return $template->display($data);
        
    }

}