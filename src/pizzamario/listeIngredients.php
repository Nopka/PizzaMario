<?php
namespace pizzamario;
class listeIngredients{
     /**                         
     * La liste des pâtes disponible
     */
    public $status = true;
    public $doughtList = array('Napolitaine','New York Style','Taglio','Argentina','Chicago style','Sfincione');
    public $sauceList = array('Tomate','Crème');
    public $meatsList = array('Poulet','Saucisse','Viande hachée','Crevette','pepperoni');
    public $vegetablesList = array('Courgette','Tomate','Poivron rouge','Poivron vert','Poivron jaune','Ognon rouge','champignon');
    public $cheezeList = array('Mozzarella','Parmesan','emmental','gorgonzola');

    public function __construct()
    {  }
    public function doughtList($doughtList){
        $doughtListView = "\n\nLes pâtes : \n";
        for ($i=0;$i<count($doughtList);$i++) {
            $doughtListView .= $i.")".$doughtList[$i]."\n";
        }
        return $doughtListView;
    }
    /**
     * La liste des sauces disponible 
     */
    public function saucesList($sauceList){
        $sauceListView = "\nLes sauces : \n";
        for($i=0;$i<count($sauceList);$i++){
            $sauceListView .= $i.")".$sauceList[$i]."\n";
        }
        return $sauceListView;
    }
    /**
     * La liste des viande disponible pour customiser
     */
    function meatsList($meatsList){
        $meatListView = "\nLes viandes : \n";
        for($i=0;$i<count($meatsList);$i++){
            $meatListView .= $i.")".$meatsList[$i]."\n";
        }
        return $meatListView;
    }
    /**
     * La liste des frommages disponible pour customiser
     */
    function cheezeList($cheezeList){
        $cheezeListView = "\nLes frommages : \n";
        for($i=0;$i<count($cheezeList);$i++){
            $cheezeListView .= $i.")".$cheezeList[$i]."\n";
        }
        return $cheezeListView;
    }
    /**
     * La liste des légumes disponible pour customiser
     */
    function vegetableListe($vegetablesList){
        $vegetablesListView = "\nLes légumes\n";
        for($i=0;$i<count($vegetablesList);$i++){
            $vegetablesListView .= $i.")".$vegetablesList[$i]."\n";
        }
        return $vegetablesListView;
    }
    /**
     * display l'ensemble des ingrédients
     */
    function displayIngredient(){
        return $this->doughtList($this->doughtList).$this->saucesList($this->sauceList).$this->meatsList($this->meatsList).$this->cheezeList($this->cheezeList).$this->vegetableListe($this->vegetablesList);
    }
    /**
     * Afficher qu'un certain ingrédient passé en paramètre est en rupture de stock
     */
    function outOfStock($ingredient){
        for($i=0;$i<count($this->doughtList);$i++){
            if ($this->doughtList[$i] === $ingredient){
                $this->doughtList[$i].= " (rupture de stock)";
            }
        }
        for($i=0;$i<count($this->sauceList);$i++){
            if ($this->sauceList[$i] === $ingredient){
                $this->saucesList[$i].= " (rupture de stock)";
            }
        }
        for($i=0;$i<count($this->cheezeList);$i++){
            if ($this->cheezeList[$i] === $ingredient){
               $this->cheezeList[$i] .= " (rupture de stock)";
            }
        }
        for($i=0;$i<count($this->meatsList);$i++){
            if ($this->meatsList[$i] === $ingredient){
                $this->meatsList[$i] .= " (rupture de stock)";
            }
        }
        for($i=0;$i<count($this->vegetablesList);$i++){
            if ($this->vegetablesList[$i] === $ingredient){
                $this->vegetablesList[$i] .= " (rupture de stock)";
            }
        }

    }
}
