<?php 
     namespace pizzamario;
     
     class Pizza {
          public $size;                     // obligation
          public $name;                        // obligatoire
          protected $dough;                   // obligatoire
          protected $sauce;                   // obligatoire
          protected $cheese;                  // optionnel
          protected $vegetables = [];         // optionnel
          protected $meats = [];              //optionnel
          protected $status;                  //remplis par le constructeur. Différent etat de préparation : 'waiting', 'cooking', 'done'

          /**
          * Création d'objet pizza
          */      
          function __construct($taille,$nom,$dough,$sauce,$cheese,$vegetables,$meats){
               $this->size = $taille;
               $this->name = $nom;
               $this->dough = $dough;
               $this->sauce = $sauce;
               $this->cheese = $cheese;
               $this->vegetables = $vegetables;
               $this->meats = $meats;
               $this->status = 'waiting';
          }
          
          
     }
?>