<?php
     use pizzamario\Pizza;
     use pizzamario\CartePizza;
     

     require_once 'src/mf/utils/AbstractClassLoader.php';
     require_once 'src/mf/utils/ClassLoader.php';
     $loader = new \mf\utils\ClassLoader('src');
     $loader->register();

     //Instanciation de la carte
     $menu = new CartePizza('PizzaMario');
     /**
      *("Création du menu de pizza")
      */
     $CheezePizza1 = array('Chèvre', 'Emmental français',  "Fourme d'Ambert AOP", 'mozarella');     
     $pizza1 = new Pizza("M","4frommage","fine","tomate",$CheezePizza1,NULL,NULL,'Ordered');

     $CheezePizza2 = array('Mozzarella');
     $MeatPizza2 = array('Merguez');
     $VegetablesPizza2 = array('Oignons', 'Poivrons vert', 'Poivrons rouge');
     $pizza2 = new Pizza('L','Orientale','Epaisse','tomate',$CheezePizza2,$MeatPizza2,$VegetablesPizza2);
     

     // Ajout des pizza dans la carte
     $menu->addPizza($pizza1);
     $menu->addPizza($pizza2);

     // $pizzarecup = $menu->selectPizza('4frommage');
     // $pizzarecup2 = $menu->selectPizza('Orientale');
     // var_dump($pizzarecup2);



     
     echo ("\n Bonjour et bienvenu dans MarioPizza !\n
     Veuillez faire un choix : 
     1)Ouvrir menu
     2)Customiser pizza \n");
     echo("\nchoix saisie : 1");
     echo ("\nOuverture du menu... :");
 

?>