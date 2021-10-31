<?php

namespace pizzamario;

use pizzamario\abstractPizza;
     //pizza custom est une pizza personnalisé par le client et hérite de abstractPizza
class pizzaCustom extends abstractPizza
{
     public $price;
     function __construct($taille, $dough, $sauce, $cheese, $vegetables, $meats, $price)
     {
          $this->price = $price;
          parent::__construct($taille, Null, $dough, $sauce, $cheese, $vegetables, $meats);
     }
     function viewCheeze()
     {
          $viewCheeze = "";
          for ($i = 0; $i < count($this->cheese); $i++) {
               $viewCheeze .= $this->cheese[$i] . ",";
          }
          return $viewCheeze;
     }
     function viewVegetables()
     {
          $viewVegetables = "";
          for ($i = 0; $i < count($this->vegetables); $i++) {
               $viewVegetables .= $this->vegetables[$i] . ",";
          }
          return $viewVegetables;
     }
     function viewMeats()
     {
          $viewMeats = "";
          for ($i = 0; $i < count($this->meats); $i++) {
               $viewMeats .= $this->meats[$i] . ",";
          }
          return $viewMeats;
     }
     function __toString()
     {
          return "Résumé de votre pizza Custom:
         sauce: $this->sauce
         Frommage :" . $this->viewCheeze() . "
         Légumes : " . $this->viewVegetables() . "
         Viandes : " . $this->viewMeats();
     }
     function removeIngredient($removeIngredient)
     {}
}
