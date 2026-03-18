<?php
namespace td2-starter_code\gui;

use td2include_once;

"ViewLogged.php";

class ViewAnnonces extends ViewLogged
{
    public function __construct($layout, $login, $presenter)
    {
        parent::__construct($layout, $login);

        $this->title= 'Exemple Annonces Basic PHP: Annonces';

        $this->content = $presenter->getAllAnnoncesHTML();
    }
}