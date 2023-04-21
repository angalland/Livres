<?php

class Livres {

    // Arguments

    private string $_titre;
    private int $_nbPages;
    private DateTime $_anneeParution;
    private int $_prix;
    private Auteur $_auteur;
    

    // Constructeur

    public function __construct(string $titre, int $nbPages, string $anneeParution, int $prix, Auteur $auteur){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = new Datetime($anneeParution);
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }

    // Getter et Setter

    public function getTitre() : string {
        return $this->_titre;
    }

    public function setTitre() : string {
        $this->_titre = $titre;
        return $this;
    }

    public function getNbPages() : int {
        return $this->_nbPages;
    }

    public function setNbPages() : int {
        $this->_nbPages = $nbPages;
        return $this;
    }

    public function getAnneeParution() : DateTime {
        return $this->_anneeParution;
    }

    public function setAnneeParution() : DateTime {
        $this->_anneeParution = $anneeParution;
        return $this;
    }

    public function getPrix() : string {
        return $this->_prix;
    }

    public function setPrix() : string {
        $this->_prix = $prix;
        return $this;
    }

    public function getAuteur() : Auteur {
        return $this->_auteur;
    }

    public function setAuteur() : Auteur {
        $this->_auteur = $auteur;
        return $this;
    }


    // ToString

    public function __toString(){
        return $this->_titre;
    }

    public function getInfos(){
        return $this." a été écris par ".$this->_auteur;
    }

    public function afficherBibliographie() {
        $result = "<h1>Livres de ".$this->_auteur."</h1></br></br>"
        .$this." (".$this->getAnneeParution()->format("Y").") : ".$this->getNbPages()." pages / ".$this->getPrix()." €";
      
        return $result;    
        
        }


}