<?php

class Livres {

    // Arguments

    private string $_titre;
    private int $_nbPages;
    private DateTime $_anneeParution;
    private int $_prix;
    private Auteur $_auteur;

    // Constructeur

    public function __construct(string $titre, int $nbPages, string $anneeParution, int $prix, $auteur){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = new Datetime($anneeParution);
        $this->_prix = $prix;
    }

    // Getter et Setter

    public function getTitre() : string {
        return $this->_titre;
    }

    public function setTitre() : string {
        $this->_titre = $titre;
    }

    public function getNbPages() : int {
        return $this->_nbPages;
    }

    public function setNbPages() : int {
        $this->_nbPages = $nbPages;
    }

    public function getAnneeParution() : DateTime {
        return $this->_anneeParution;
    }

    public function setAnneeParution() : DateTime {
        $this->_anneeParution = $anneeParution;
    }

    public function getVille() : string {
        return $this->_ville;
    }

    public function setVille() : string {
        $this->_ville = $ville;
    }

    // ToString

    public function __toString(){
        return $this->_titre;
    }
}