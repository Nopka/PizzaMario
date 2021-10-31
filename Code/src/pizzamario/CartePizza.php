<?php 
     namespace pizzamario;
     //objet Menu/carte contenant des objets pizza
     class CartePizza{
          public $carte = array();                          //tableau de pizza
          public $carteName;                                //nom de la carte

          public function __construct($nom){
               $this->carteName = $nom;
          }

          public function addPizza($pizza){                 //ajouter une pizza au menu/carte
               $pizzaName = $pizza->name;
               $this->carte[$pizzaName] =  $pizza;
               return $this->carte;
               
          }

          public function selectPizza($pizzaName){          //selectionner une pizza depuis le menu/carte
               $tempCarte = $this->carte;
               foreach ($tempCarte as $key) {
                    if ($key->name == $pizzaName) {
                         return $key;
                    }
               }
          }
     
     }

