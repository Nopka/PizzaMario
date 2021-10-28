<?php
namespace pizzamario;
class chefOrder{
    public $idChef;
    public $pizzaOrder;
    public function __construct($id,$pizzaOrder)
    {
        $this->idChef = $id;
        $this->pizzaOrder = $pizzaOrder;
    }

    public function notify(){
        $getCooking = true;
    }

    public function notified(){
        echo ("\n\t\033[32m===> Le chef est notifié et vas procéder à la préparation de la commande\033[0m\r");
    }
}