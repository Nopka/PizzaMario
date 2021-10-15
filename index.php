<?php
     //require pour autoLoad

     use pizzamario\Pizza;
     use pizzamario\CartePizza;

     require_once 'src/mf/utils/AbstractClassLoader.php';
     require_once 'src/mf/utils/ClassLoader.php';
     //Autoloader
     $loader = new \mf\utils\ClassLoader('src');
     $loader->register();

     //Main coding Area
     $margarita = new Pizza('fine','tomate','mozarella');
     $cartePizzaMario = new CartePizza();
     $cartePizzaMario->addPizza($margarita);

     // echo"<h1> Regarder la console </h1>";

     var_dump($cartePizzaMario);

?>