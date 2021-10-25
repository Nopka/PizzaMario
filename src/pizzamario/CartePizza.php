<?php 
     namespace pizzamario;
     class CartePizza{
          protected $carte = array();
          protected $carteName;

          public function __construct($nom){
               $this->carteName = $nom;
          }

          public function addPizza($pizza){
               $pizzaName = $pizza->name;
               $this->carte[$pizzaName] =  $pizza;
               return $this->carte;
               
          }

          public function selectPizza($pizzaName){
               $tempCarte = $this->carte;
               foreach ($tempCarte as $key) {
                    if ($key->name == $pizzaName) {
                         return $key;
                    }
               }
          }
     
     }


    
?>