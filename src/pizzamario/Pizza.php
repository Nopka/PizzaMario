<?php 
     namespace pizzamario;

     class Pizza {
          public $nom; // obligatoire
          protected $dough; // obligatoire
          protected $sauce; // obligatoire
          protected $cheese; // optionnel
          protected $vegetables = []; // optionnel
          protected $meats = []; //optionnel
          protected $status; //remplis par le constructeur. Différent etat de préparation : 'waiting', 'cooking', 'done'

          function __construct(){ // permet d'instancier une pizza
               $CompteurArgs = func_num_args();
               $args = func_get_args();
               switch ($CompteurArgs) {
                    case 5:
                         $this->constructor1($args[0],$args[1],$args[2],$args[3],$args[4]);
                         break;
                    case 3:
                         $this->constructor2($args[0],$args[1],$args[2]);
                         break;
                    default:
                         break;
               }
          }
          function constructor1($d,$s,$c,$v = [],$m = []){
               //attribution des paramères instanciés
               $this->dough = $d;
               $this->sauce = $s;
               $this->cheese = $c;
               $this->vegetables = $v;
               $this->meats = $m;
               $this->status = 'waiting';
          }
          function constructor2($d,$s,$c){
               //attribution des paramères instanciés
               $this->dough = $d;
               $this->sauce = $s;
               $this->cheese = $c;
               //attribution des attribut automatiques
               $this->status = 'waiting';
               $this->vegetables = ['none'];
               $this->meats = ['none'];
          }
          
          
     }
?>