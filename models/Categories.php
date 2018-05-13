<?php
/**
 * Description of Categories
 *
 * @author oumayma
 */
class Categories {
    
    private $id;
    private $libelle;
    private $bd ;
    /**
     * Categorie constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct($id, $libelle,$conx)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->bd=$conx;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
     public function ajouterCategorie(){
        $sql = "INSERT INTO `categorie`(`id_cat`, `lib_cat`) VALUES (:id,:lib)";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':id',$this->id);
        $q->bindValue(':lib', $this->libelle);;
        $q->execute();
        echo "well done";
    }
    public function getCategoryByLib($lib){
       
        $stmt = $this->bd->prepare("SELECT  id_cat  FROM categorie WHERE lib_cat= :lib ");
        $stmt->bindValue('lib' ,$lib);
        $res=$stmt->execute();
        return $res;
    }
}