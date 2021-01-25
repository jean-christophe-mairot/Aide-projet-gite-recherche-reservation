<?php
namespace App\Models; 

//pas besoin du use pour Model.php 
//parcequ'on n'est dans le même dossier 

class AnnoncesModel extends Model
{
    protected $id_annonce;
     protected $titre;
     protected $description;
     protected $photo;
     protected float $prix;
     protected $annonce_date;
     protected $user_mail;
     protected $annonce_pdf;
     protected $j2;
     protected $j15; 

 public function __construct()
 {
     
     //maintenant on peut recup les données de ma table annonce dans 
     //le site
     $this->table = 'annonce';
 }


// ******************************* GETTER SETTER *************************
 

    /**
     * Get the value of id_annonce
     */ 
    public function getId_annonce()
    {
        return $this->id_annonce;
    }

    /**
     * Set the value of id_annonce
     *
     * @return  self
     */ 
    public function setId_annonce($id_annonce)
    {
        $this->id_annonce = $id_annonce;

        return $this;
    }

     /**
      * Get the value of titre
      */ 
     public function getTitre()
     {
          return $this->titre;
     }

     /**
      * Set the value of titre
      *
      * @return  self
      */ 
     public function setTitre($titre)
     {
          $this->titre = $titre;

          return $this;
     }

     /**
      * Get the value of description
      */ 
     public function getDescription()
     {
          return $this->description;
     }

     /**
      * Set the value of description
      *
      * @return  self
      */ 
     public function setDescription($description)
     {
          $this->description = $description;

          return $this;
     }

     /**
      * Get the value of photo
      */ 
     public function getPhoto()
     {
          return $this->photo;
     }

     /**
      * Set the value of photo
      *
      * @return  self
      */ 
     public function setPhoto($photo)
     {
          $this->photo = $photo;

          return $this;
     }

     /**
      * Get the value of prix
      */ 
     public function getPrix()
     {
          return $this->prix;
     }

     /**
      * Set the value of prix
      *
      * @return  self
      */ 
     public function setPrix($prix)
     {
          $this->prix = $prix;

          return $this;
     }

     /**
      * Get the value of annonce_date
      */ 
     public function getAnnonce_date()
     {
          return $this->annonce_date;
     }

     /**
      * Set the value of annonce_date
      *
      * @return  self
      */ 
     public function setAnnonce_date($annonce_date)
     {
          $this->annonce_date = $annonce_date;

          return $this;
     }

     /**
      * Get the value of user_mail
      */ 
     public function getUser_mail()
     {
          return $this->user_mail;
     }

     /**
      * Set the value of user_mail
      *
      * @return  self
      */ 
     public function setUser_mail($user_mail)
     {
          $this->user_mail = $user_mail;

          return $this;
     }

     /**
      * Get the value of annonce_pdf
      */ 
     public function getAnnonce_pdf()
     {
          return $this->annonce_pdf;
     }

     /**
      * Set the value of annonce_pdf
      *
      * @return  self
      */ 
     public function setAnnonce_pdf($annonce_pdf)
     {
          $this->annonce_pdf = $annonce_pdf;

          return $this;
     }

     /**
      * Get the value of j2
      */ 
     public function getJ2()
     {
          return $this->j2;
     }

     /**
      * Set the value of j2
      *
      * @return  self
      */ 
     public function setJ2($j2)
     {
          $this->j2 = $j2;

          return $this;
     }

     /**
      * Get the value of j15
      */ 
     public function getJ15()
     {
          return $this->j15;
     }

     /**
      * Set the value of j15
      *
      * @return  self
      */ 
     public function setJ15($j15)
     {
          $this->j15 = $j15;

          return $this;
     }
}