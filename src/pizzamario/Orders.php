<?php
 namespace pizzamario;
     class orders 
     {
          /*
           * Une commande est représenté par un id, détails de la commande, et la date
           *            */
          protected $order_id;
          protected $order_details = [];
          protected $order_date;
          
          /**
           * Créer une instance de commande
           */
          function __construct($id, $order_details) 
          {
               $this->order_id = $id;
               $this->order_details = $order_details;
               $this->order_date = date("Y-m-d\TH:i:sP");
          }

          /**
           * Modifier les détails d'une commande et sauvegarder le timeStamp de la modification
           */
          public function update_order($updated_detail = [],$update_datetime){
               $this->order_details = $updated_detail;
               $this->order_date = $update_datetime;
          }
          /**
           * Fonction qui return true si la commande est prête, false sinon
           */
          public function alerte_order_ready(){
               if($this->order_status === 'ready'){
                    return true; 
               }else{
                    return false;
               }
          }
          public function confirm_order($order_id){
               
          }
          /**
           * Fonction qui permet de consutler l'état d'avancement de la commande en détail
           */
          public function check_status(){
               $tab_status = [];
               foreach ($this->order_details as $pizza) {
                    $tab_status = $pizza->status;
               }
               return $tab_status;
          }
     } 