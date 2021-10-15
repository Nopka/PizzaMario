<?php 
     namespace pizzamario;
     class CartePizza{
          public $carte = ['Nom']['objet pizza'];

          // function __construct(){
               
          // }
          public function addPizza($pizza){
               $name = $pizza->nom;
               $carte[] = [$name][$pizza];
          }

          public function selectPizza($chaine){
               foreach ($this->carte as $key) {
                    if ($key == $chaine) {
                         return $key;
                    }
               }
          }

     }
?>