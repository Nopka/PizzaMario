<?php
namespace pizzamario;
abstract class abstractPizza{

    public $size;                     // obligation
    public $name;                        // obligatoire
    protected $dough;                   // obligatoire
    protected $sauce;                   // obligatoire
    protected $cheese = [];                  // optionnel
    protected $vegetables = [];         // optionnel
    protected $meats = [];              //optionnel
    public $status;                  //remplis par le constructeur. Différent etat de préparation : 'waiting', 'cooking', 'done'

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
    /**
     * Affiche la liste des frommages composant la pizza
     */
    abstract protected function viewCheeze();

    /**
     * Affiche la liste des légumes composant la pizza
     */
    abstract protected function viewVegetables();

    /**
     * Affiche la liste des viandes composants la pizza
     */
    abstract protected function viewMeats();

   /**
    * 
    */
    abstract protected function removeIngredient($removeIngredient);
    
}