<?php

class Auteur {

    // Arguments
    private string $_nom;
    private string $_prenom;
    
    // constructeur 

    public function __construct ($nom, $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    // Getter et Setter

    public function getNom() : string {
        return $this->_nom;
    }

    public function setNom() : string {
        $this->_nom = $nom;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function setPrenom() : string {
        $this->_prenom = $prenom;
    }

    public function __toString() : string {
        return $this->_prenom . $this->_nom;
    }
}