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
          protected $price;
          
          /**
           * Créer une instance de commande
           */
          function __construct($id, $order_details,$price) 
          {
               $this->order_id = $id;
               $this->order_details = $order_details;
               $this->order_date = date("Y-m-d\TH:i:sP");
               $this->price = $price;
          }

          /**
           * Modifier les détails d'une commande et sauvegarder le timeStamp de la modification
           */
          public function update_order($updated_detail = []){
               $this->order_details = $updated_detail;

          }
          /**
           * Fonction qui return true si la commande est prête, false sinon
           */
          public function alerte_order_ready(){
               if($this->order_details[2] === 'ready'){
                    return ("\nVotre commande est prête :) Veuillez vous rapprocher du comptoire afin de la récuperer\n");
               }
          }
          // /**
          //  * Fonction qui permet de consutler l'état d'avancement de la commande en détail
          //  */
          // public function check_status(){
          //      $tab_status = [];
          //      foreach ($this->order_details as $pizza) {
          //           $tab_status = $pizza->status;
          //      }
          //      return $tab_status;
          // }

          function __toString()
          {
               return "\nDétail de votre commande :\n"."pizza :" .$this->order_details[0]."\nTaille : " .$this->order_details[1]
          ."\nDate : $this->order_date\nprix: $this->price euro\nstatus : ". $this->order_details[2]."\n";
          }
     } 