<?php

class Auteur
{
    private $_prenoms;
    private $_noms;
    private $_livres;

    public function __construct(string $prenoms, string $noms)
    {
        $this->_prenoms = $prenoms;
        $this->_noms = $noms;
        $this->_livres = [];
    }

    public function getPrenoms()
    {
        return $this->_prenoms;
    }

    public function getNoms()
    {
        return $this->_noms;
    }

    public function setPrenoms()
    {
        return $this->_prenoms;
    }

    public function setNoms()
    {
        return $this->_noms;
    }

    public function setLivres()
    {
        return $this->_livres;
    }

    public function ajouterLivre($nouvLivre)
    {
        array_push($this->_livres, $nouvLivre);
    }

    public function afficherBibliographie()
    {
        foreach ($this->_livres as $livre) {
            echo $livre.'<br>';
        }
    }

    public function __toString()
    {
        return "$this->_prenoms $this->_noms";
    }
}
