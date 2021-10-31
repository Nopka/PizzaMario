<?php
namespace pizzamario;
class chefOrder{
    //un chef est assigné à une commande
    public $idChef;         
    public $pizzaOrder;
    public function __construct($id,$pizzaOrder)
    {
        $this->idChef = $id;
        $this->pizzaOrder = $pizzaOrder;
    }

    public function notify(){       //notifier le chef qu'il doit commencer à préparer la commande
        $getCooking = true;
    }

    public function notified(){     //répose du chef
        echo ("\n\t\033[32m===> Le chef est notifié et vas procéder à la préparation de la commande\033[0m\r");
    }
}