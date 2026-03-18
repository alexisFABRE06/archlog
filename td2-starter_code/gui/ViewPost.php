<?php
namespace td2-starter_code\gui;

use td2include_once;

"ViewLogged.php";

class ViewPost extends ViewLogged
{
    public function __construct($layout, $login, $presenter)
    {
        parent::__construct($layout, $login);

        $this->title= 'Exemple Annonces Basic PHP: domain\Post';

        $this->content = $presenter->getCurrentPostHTML();

        $this->content .= '<a href="/index.php/annonces">retour</a>';
    }
}