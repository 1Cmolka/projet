<?PHP
class Plat{
    private $id;
    private $nom_plat;
    private $prix;
    private $id_specialite;
    function __construct($nom_plat,$prix,$id_specialite){
		$this->nom_plat=$nom_plat;
		$this->prix=$prix;
		$this->id_specialite=$id_specialite;
	
	}
    function getId(){
        return $this->id;
    }
    
    function getNom_plat(){
        return $this->nom_plat;
    }
    
    function getPrix(){
        return $this->prix;
    }
    
    function getId_specialite(){
        return $this->id_specialite;
    }


}

?>