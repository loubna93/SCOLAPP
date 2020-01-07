<?php 
class Etudiant
{
    public  $table = "etudiant" ;
    public $nom;
    public $prenom;
    public $dateNaissance;
    public $mail;
    public $password;
    public $anneeEtude;
    public $specialite;
    public $dateInscr;
    public $imgEtu;
 
    public function __construct($nom,$prenom,$dateNaissance
    ,$mail,$password,$anneeEtude ,$specialite,$dateInscr,$imgEtu)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;

        $this->mail=$mail;
        $this->password=$password;
        $this->anneeEtude=$anneeEtude;
        $this ->specialite=$specialite;
        $this ->dateInscr=$dateInscr;
        $this ->imgEtu=$imgEtu;

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

    public function getmail()
    {
        return $this->mail;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAnneeEtude()
    {
        return $this->anneeEtude;
    }
    public  function getSpecialite()
    {
        return $this->specialite;
    }
    public function getDateInscr()
    {
        return $this->dateInscr;
    }
}
?>