<?php

namespace pizzamario;
//pizzaMenu sont les pizza apparenant à la carte de MarioPizza
class PizzaMenu extends abstractPizza
{

     function __construct($taille, $nom, $dough, $sauce, $cheese, $vegetables, $meats)
     {
          parent::__construct($taille, $nom, $dough, $sauce, $cheese, $vegetables, $meats);
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
          return "Pizza <<$this->name>>:
          sauce: $this->sauce
          Frommage :" . $this->viewCheeze() . "
          Légumes : " . $this->viewVegetables() . "
          Viandes : " . $this->viewMeats();
     }
     function removeIngredient($removeIngredient)
     {
          if ($removeIngredient === $this->sauce) {
               $this->sauce = null;
          }

          for ($i = 0; $i < count($this->cheese); $i++) {
               if ($removeIngredient === $this->cheese[$i]) {
                    $this->cheese[$i] = null;
               }
          }

          for ($i = 0; $i < count($this->meats); $i++) {
               if ($removeIngredient === $this->meats[$i]) {
                    $this->meats[$i] = null;
               }
          }
          for ($i = 0; $i < count($this->vegetables); $i++) {
               if ($removeIngredient === $this->vegetables[$i]) {
                    $this->vegetables[$i] = null;
               }
          }
     }
}
