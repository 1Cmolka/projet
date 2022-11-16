<?PHP
class Specialite{
    private $id;
    private $nom_specialite;
    function __construct($nom_specialite){
		$this->nom_specialite=$nom_specialite;
	}
    function getId(){
        return $this->id;
    }
    
    function getNom_specialite(){
        return $this->nom_specialite;
    }
    
  

}
?>