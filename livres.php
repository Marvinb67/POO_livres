<?php

class Livres
{
    private $_titre;
    private $_nbPages;
    private $_parution;
    private $_prix;
    private $_auteur;

    public function __construct(string $titre, string $parution, float $nbPages, int $prix, Auteur $auteur)
    {
        $this->titre = $titre;

        $this->parution = $parution;

        $this->nbPages = $nbPages;

        $this->prix = $prix;

        $this->auteur = $auteur;

        $auteur->ajouterLivre($this);
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getParution()
    {
        return $this->parution;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getAuteur()
    {
        $this->auteur;
    }

    public function setTitre()
    {
        return $this->titre;
    }

    public function setParution()
    {
        return $this->Parution;
    }

    public function setNbPages()
    {
        return $this->nbPages;
    }

    public function setPrix()
    {
        return $this->prix;
    }

    public function setAuteur()
    {
        $this->auteur;
    }

    public function __toString()
    {
        return "$this->titre ($this->parution) : $this->nbPages pages / $this->prix €";
    }
}
