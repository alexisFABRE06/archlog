<?php

class AnnoncesChecking
{
    protected $annoncesTxt = null;

    public function getAllAnnonces($data)
    {
        $annonces = $data->getAllAnnonces();
        $this->annoncesTxt = array();
        foreach ($annonces as $annonce) {
            $this->annoncesTxt[] = [
                'id'    => $annonce->getId(),
                'title' => $annonce->getTitle(),
                'body'  => $annonce->getBody(),
                'date'  => $annonce->getDate()
            ];
        }
    }

    public function getPost($id, $data)
    {
        $annonce = $data->getPost($id);
        $this->annoncesTxt = array();
        if ($annonce != null) {
            $this->annoncesTxt[] = [
                'id'    => $annonce->getId(),
                'title' => $annonce->getTitle(),
                'body'  => $annonce->getBody(),
                'date'  => $annonce->getDate()
            ];
        }
    }

    public function getAnnoncesTxt()
    {
        return $this->annoncesTxt;
    }
}
