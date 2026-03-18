<?php
namespace gui;

include_once "ViewLogged.php";

class ViewCompanyAlternance extends ViewLogged
{
    public function __construct($layout, $login, $presenter)
    {
        parent::__construct($layout, $login);

        $this->title = 'Exemple Annonces Basic PHP: Entreprise';

        $this->content = $presenter->getCurrentPostHTML();

        $this->content .= '<a href="/index.php/annoncesAlternance">retour</a>';
    }
}
