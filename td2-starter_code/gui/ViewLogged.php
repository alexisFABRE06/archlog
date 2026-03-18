<?php

namespace td2-starter_code\gui;

use td2include_once;

"View.php";

abstract class ViewLogged extends View
{
    protected $connexion = '';

    public function __construct($layout, $login)
    {
        parent::__construct($layout);

        $this->connexion = "<p> Hello $login </p>".'<a href="/index.php/logout">Déconnexion</a>';
    }

    public function display()
    {
        $this->layout->display( $this->title, $this->connexion, $this->content );
    }

}