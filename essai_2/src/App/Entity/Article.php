<?php
namespace App\Entity;

class Article{


    
    /**
     * name
     *
     * @var string  $name => nom de l'article
     */
    private $name;


    

    /**
     * Set $name => nom de l'article
     *
     * @param  string  $name  $name => nom de l'article
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}