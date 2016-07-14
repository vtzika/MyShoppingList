<?php

namespace Varvara\Models;

class Product
{
	private $id; 
    private $description; 
    private $price; 
    
    public function getId() { 
       return $this->id;
    } 

    public function setId($id) { 
       $this->id = $id;
    } 

    public function getDescription() { 
       return $this->description;
    }  

	public function setDescription($description) { 
    	$this->description = $description;
    }  

    public function getPrice() { 
       return $price;
    }

    public function setPrice($price) { 
    	$this->price = $price;
    }  
}