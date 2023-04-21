<?php

class Auteur {

    // Arguments
    private string $_nom;
    private string $_prenom;
    private array $_livres;

   
    
    // constructeur 

    public function __construct (string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    // Getter et Setter

    public function getNom() : string {
        return $this->_nom;
    }

    public function setNom() : string {
        $this->_nom = $nom;
        return $this;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function setPrenom() : string {
        $this->_prenom = $prenom;
        return $this;
    }

    public function getLivres() : array {
        return $this->_Livres;
    }

    public function setLivres() : array {
        $this->_livres = $livres;
        return $this;
    }

    //  toString

    public function __toString() : string {
        return $this->_prenom." ".$this->_nom;
    }

    // ajouterLivre

    public function addLivre(Livre $livre) {
        $this->_livres[] = $livre; // array_push($this->_livres, $livre);
    }

    // afficherBibliographie

    public function afficherBibliographie(){
        $result = "<h1>Livres de ".$this."</h1>";
        foreach ($this->_livres as $livre){
        $result .= $livre." (".$livre->getAnneeParution()->format('Y').") : ".$livre->getNbpages()." pages / ".$livre->getPrix()." €</br>";
        }
        return $result;
    }   
}



