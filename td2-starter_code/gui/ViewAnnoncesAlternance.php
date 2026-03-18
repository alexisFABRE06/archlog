<?php

include_once "gui/ViewLogged.php";

class ViewAnnoncesAlternance extends ViewLogged
{
    public function __construct($layout, $login, $presenter)
    {
        parent::__construct($layout, $login);

        $this->title = 'Exemple Annonces Basic PHP: Alternance';

        $this->content = $presenter->getAllAlternanceHTML();
    }
}
