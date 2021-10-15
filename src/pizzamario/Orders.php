<?php
     class order 
     {
          protected $order_id;
          protected $order_details = [];
          protected $order_date;
          
          function __construct($id, $order_details) //Creat instances of orders 
          {
               $this->order_id = $id;
               $this->order_details = $order_details;
               $this->order_date = date("Y-m-d\TH:i:sP");
          }
          
          public function update_order($updated_detail = [],$update_datetime){
               $this->order_details = $updated_detail;
               $this->order_date = $update_datetime;
          }
          public function alerte_order_ready(){
               if($this->order_status === 'ready'){
                    return true; //return true if order is ready
               }
          }
          public function confirm_order($order_id){
               
          }
          public function check_status(){
               $tab_status = [];
               foreach ($this->order_details as $pizza) {
                    $tab_status = $pizza->status;
               }
               return $tab_status;
          }
     } 