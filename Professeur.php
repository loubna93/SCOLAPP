<?php
class Professeur 
{
    public $nom;
    public $prenom;
    public $dateNaissance;
    public $adresse;
    public $cne;
    public $mail;
    public $password;
    public $anneeRecrutement;
    public $diplome;
    public $descri;
    public $imageProf;
    public function __construct ($nom,$prenom,$dateNaissance
    ,$adresse,$cne,$mail,$password,$anneeRecrutement,$diplome,$descri,$imageProf)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
        $this->adresse=$adresse;
        $this->cne=$cne;
        $this->mail=$mail;
        $this->password=$password;
        $this->anneeRecrutement=$anneeRecrutement;
        $this->diplome=$diplome;
        $this->descri=$descri;
        $this->imageProf=$imageProf;

    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getCne()
    {
        return $this->cne;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAnneeRecrutement()
    {
        return $this->anneeRecrutement;
    }
    public function getDiplome()
    {
        return $this->diplome;
    }
    public function getDescri()
    {
        return $this->descri;
    }
    public function getImageProf()
    {
        return $this->imageProf;
    }
}
?>