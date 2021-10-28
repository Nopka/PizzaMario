<?php

use pizzamario\CartePizza;
use pizzamario\orders;
use pizzamario\pizzaCustom;
use pizzamario\PizzaMenu;
use pizzamario\listeIngredients;
use pizzamario\chefOrder;


/**
 * Autoloader
 */
require_once 'src/mf/utils/AbstractClassLoader.php';
require_once 'src/mf/utils/ClassLoader.php';
$loader = new \mf\utils\ClassLoader('src');
$loader->register();

/**
 * Instanciation d'un objet carte 
 */
$menu = new CartePizza('PizzaMario');

//Ajout des pizza dans le menu (fait par le responsable)
//pizza 1
$cheezePizza1 = array('Chèvre', 'Emmental français',  "Fourme d'Ambert AOP", 'mozarella');  
$meatPizza1 = array();
$vegetables1 = array();
$pizza1 = new PizzaMenu("M", "4frommage", "Fine", "tomate", $cheezePizza1, $meatPizza1, $vegetables1);

//pizza 2
$cheezePizza2 = array('Mozzarella');
$meatPizza2 = array('Merguez');
$vegetables2 = array('Oignons', 'Poivrons vert', 'Poivrons rouge');
$pizza2 = new PizzaMenu('L', 'Orientale', 'Epaisse', 'tomate', $cheezePizza2, $meatPizza2, $vegetables2);

//pizza 3
$cheezPizza3 = array('mozzarella');
$meatPizza3 = array();
$vegetables3 = array();
$pizza3 = new PizzaMenu('XL', 'Margherita', 'Classique', 'tomate', $cheezPizza3, $meatPizza3, $vegetables3);

//Ajout des pizza dans la carte
$menu->addPizza($pizza1);
$menu->addPizza($pizza2);
$menu->addPizza($pizza3);


/*__________________________________________Scénario 1____________________________________*/
echo ("\n\033[34mScénario de commande N1 : Client A commande une pizza depuis le menu des pizza\033[0m \r\n");
echo ("\n\t\t\033[33mBonjour et bienvenu dans Mario Pizza ! \033[0m \r\n");   
echo ("Veuillez faire un choix : 
     1)Ouvrir menu des pizza
     2)Customiser ma propre pizza\n");
echo ("\n\t\033[32m===> Choix saisie : 1 \033[0m \r\n");
echo ("\nOuverture du menu... :");

//Affichage du menu des pizza
$i = 1;
foreach ($menu->carte as $pizza) {
      echo "\n(" . $i . ")" . $pizza . "\n";
      $i++;
}

echo ("\nVeuillez saisir votre choix:_\n");
echo ("\n\t\033[32m===> Le client 'A' a choisi la pizza numéro 2 parmis la liste des pizza disponible.\033[0m\r\n");
echo ("\nTrès bon choix ! désirez-vous modifier votre pizza (enlever ingrédient)?[Y/N]\n");
echo ("\n\t\033[32m===> Le client 'A' souhaite enlever des ingrédients.\n\033[0m\r
Veuillez selectionner l'ingrédient à retirer de la recette :\n");

//afficher les détails de la pizza
$pizza1 = $menu->selectPizza('Orientale');
echo $pizza1;
echo ("\n\n\t\033[32m===> Le client 'A' souhaite enlever l'ingrédient Oignons.\n\033[0m\r");
$removeIngredient = "Oignons";
$pizza1->removeIngredient("Oignons");
echo ("\nL'ingrédient a été enlevé avec success.\n");
echo ("\nRecette de votre pizza:\n");
echo $pizza1;

echo ("\n\nSouhaitez-vous selectionner d'autre pizza ? [Y/N]\n");
echo ("\n\t\033[32m===> Le client 'A' ne souhait pas selectionner d'autre pizza.\n\033[0m\r");
echo ("\nVeuillez selectionner le moyen de paiement
             1)Carte bancaire.
             2)Espèce.\n");
echo ("\n\t\033[32m===> Le client 'A' a choisi de payer par carte bancaire.\n\033[0m\r");
echo ("\nImprimer reçue ?[Y/N]\n");
echo ("\n\t\033[32m===> Le client 'A' a choisi de ne pas imprimer le reçu de paiement.\n\033[0m\r");
echo ("\n\nMerci pour votre commande :) Vous pouvez à tout moment consulter l'avancement de votre commande en saissisant sa référence ci-dessous.");
echo ("\nVous receverez une alerte lorsque votre commande est prête :)\n");

//Création de la commande 
$pizzaDetails1 = array($pizza->name, $pizza->size, $pizza->status);
$order1 = new orders(5, $pizzaDetails1, 10);

//Affichage de la commande
echo $order1;

//notifier le chef qu'il droit commencer à preparer la pizza
$chefOrder1 = new chefOrder("145A",$pizza1);
$chefOrder1->notify();
$chefOrder1->notified();

//changement du status de la commande à cooking
echo ("\n\t\033[32m===> Changement du status de la commande à 'cooking'.\n\033[0m\r");
$pizza->status = "cooking";
$updated_order = array($pizza->name, $pizza->size, $pizza->status);
$order1->update_order($updated_order);

//Afficher l'état d'avancement de la commande
echo ("\t\033[32m===> Le client 'A' a choisi de voir l'avancement de sa pizza.\n\033[0m\r");
echo $order1;

//changer le status de la commande a ready et lancer l'alerte pour notifier le client
echo ("\n\t\033[32m===> Changement du status de la commande à 'ready'.\n\033[0m\r");
$pizza->status = "ready";
$updated_order = array($pizza->name, $pizza->size, $pizza->status);
echo ("\t\033[32m===> Le client 'A' est notifié que sa commande est prête.\n\033[0m\r");
$order1->update_order($updated_order);
echo ($order1->alerte_order_ready());


/*__________________________________________Scénario 2____________________________________*/

echo ("\n\n\033[34mScénario de commande N2 : Client B commande plusieurs pizza custom\033[0m \r\n");
echo ("\n\t\t\033[33mBonjour et bienvenu dans Mario Pizza ! \033[0m \r\n");   
echo ("Veuillez faire un choix : 
      1)Ouvrir menu des pizza
      2)Customiser ma propre pizza\n");
echo ("\n\t\033[32m===> Choix saisie : 2 \033[0m \r\n");
echo ("\nOuverture du menu des ingrédiens... :");

//Affichage de la liste des ingrédients
$listeIngredient = new listeIngredients();
//mettre les ingrédient 'gorgonzola' et 'Crevette' en repture de stock (fait par le gérant)
$listeIngredient->outOfStock('gorgonzola');
$listeIngredient->outOfStock('Crevette');
echo $listeIngredient->displayIngredient();


echo ("\n\nVeuillez saisir vos choix d'ingrédient:_\n");
echo ("\n\t\033[32m===> Le client B a saisie son choix d'ingrédient.\n\033[0m\r");
//création de l'objet pizzaCustom
$cheezeCustom1 = array('Mozzarella', 'Parmesan');
$meatsCustom1 = array('Poulet', 'Viande hachée');
$vegetablesCustom1 = array('champignon', 'Poivron vert');
$pizzacustom1 = new pizzaCustom('M', 'Chicago style', 'tomate', $cheezeCustom1, $vegetablesCustom1, $meatsCustom1, 14);
echo $pizzacustom1;

echo ("\n\nSouhaitez-vous selectionner d'autre pizza ? [Y/N]\n");
echo ("\n\t\033[32m===> Le client 'B' souhaite rajouter des pizza à son panier\n\033[0m\r");
echo ("Veuillez faire un choix : 
      1)Ouvrir menu des pizza
      2)Customiser ma propre pizza\n");
echo ("\n\t\033[32m===> Choix saisie : 2\033[0m\r");
echo ("\nOuverture du menu des ingrédiens... :");

//Réafficher la liste des ingrédients pour une deuxième commande 
echo $listeIngredient->displayIngredient();

//création de la deuxième pizza custom
echo ("\n\nVeuillez saisir vos choix d'ingrédient:_\n");
echo ("\n\t\033[32m===> Le client B a saisie son choix d'ingrédient.\n\033[0m\r");
$cheezeCustom2 = array('Mozzarella');
$meatsCustom2 = array('Viande hachée');
$vegetablesCustom2 = array('champignon');
$pizzacustom2 = new pizzaCustom('XL', 'Napolitaine', 'tomate', $cheezeCustom2, $meatPizza2, $vegetablesCustom2, 6);
echo $pizzacustom2;

echo ("\nSouhaitez-vous selectionner d'autre pizza ? [Y/N]\n");
echo ("\n\t\033[32m===> Le client 'B' ne souhait pas selectionner d'autre pizza.\033[0m\r");
echo ("\nVeuillez selectionner le moyen de paiement
             1)Carte bancaire.
             2)Espèce.\n");
echo ("\n\t\033[32m===> Le client 'B' a choisi de payer par espèce\033[0m\r\n");
echo ("\nImprimer reçue ?[Y/N]\n");
echo ("\n\t\033[32m===> Le client 'B' a choisi de ne pas imprimer le reçu de paiement\033[0m\r");
echo ("\n\nMerci pour votre commande :) Vous pouvez à tout moment consulter l'avancement de votre commande en saissisant sa référence ci-dessous.");
echo ("\nVous receverez une alerte lorsque votre commande est prête :)\n");

//Création de la commande pour les 2 pizzaCustom
$pizzaDetails1 = array(' 2 pizza custom', $pizzacustom1->size . "_" . $pizzacustom2->size, $pizzacustom1->status);
$order_price2 = $pizzacustom1->price + $pizzacustom2->price;   //aditionner le prix des 2 pizza
$order2 = new orders(20, $pizzaDetails1, $order_price2);      
echo $order2;


//notifier le chef qu'il droit commencer à preparer les pizza
$chefOrder2 = new chefOrder("146A",$pizzacustom1);
$chefOrder2 = new chefOrder("146A",$pizzacustom2);
$chefOrder2->notify();
$chefOrder2->notified();


//mise à jour du status de la commande
echo ("\n\t\033[32m===> Changement du status de la commande à 'ready'.\n\033[0m\r");
$pizzacustom1->status = "ready";
$pizzacustom2->status = "ready";
$updated_order2 = array('pizzaCustom', $pizzacustom1->size . "_" . $pizzacustom2->size, $pizzacustom1->status);
echo ("\t\033[32m===> Le client 'B' est notifié que sa commande est prête.\n\033[0m\r");
$order2->update_order($updated_order);
echo ($order1->alerte_order_ready());





