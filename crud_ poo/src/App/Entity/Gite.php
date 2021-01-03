<?php

namespace App\Entity;

class Gite{
    
    /**
     * name
     *
     * @var string $name = nom du gite
     */
    private $name;    
    /**
     * imgage_rect_1
     *
     * @var string $imgage_rect_1 = gestion de l'image rectangle 1 
     */
    private $imgage_rect_1;    
    /**
     * imgage_rect_2
     *
     * @var string $imgage_rect_2 = gestion de l'image rectangle 2 
     */
    private $imgage_rect_2;
        
    /**
     * imgage_rect_3
     *
     * @var @var string $imgage_rect_3 = gestion de l'image rectangle 3
     */
    private $imgage_rect_3;    
    /**
     * localisation
     *
     * @var string $localisation = adresse du gite 
     */
    private $localisation;
        
    /**
     * desciption
     *
     * @var string $desciption = description du gite
     */
    private $desciption;
        
    /**
     * spec
     *
     * @var string $spec = specificitées du gite piscine par exemple
     */
    private $spec;
        
    /**
     * nbr_couchage
     *
     * @var int $nbr_couchage = nombre de couchage
     */
    private $nbr_couchage;
        
    /**
     * prix
     *
     * @var float $prix = prix de location du gite à la semaine
     */
    private $prix;

        
    /**
     * image_carre
     *
     * @var string $image_carre = gestion de l'image carre
     */
    private $image_carre;
        
    /**
     * categorie
     *
     * @var string $categorie = type de logement hotel, chalet chambre
     */
    private $categorie;






}