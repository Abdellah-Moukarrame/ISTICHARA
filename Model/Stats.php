<?php
namespace Model;
use PDO;
class Stats extends  Personne{
    private PDO $db;
    public function __construct()
    {
        return parent::__construct();
    }
    public function total_avocat(){
        $stmt=$this->db->prepare("select count(*) as total_avocat from personne where Type_acte is null");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function total_huissier(){
        $stmt=$this->db->prepare("select count(*) as total_huissiers from personne where Type_acte is not null");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function members_by_city($city){
        $stmt = $this->db->prepare("select count(*) as avocats , Ville.nom_ville  from personne join Ville on Ville.id = personne.ville_id where Ville.nom_ville=$city and personne.Type_acte is null ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function top_avocat(){
        $stmt = $this->db->prepare("select personne.nom , personne.experience , Ville.nom_ville from personne join Ville on Ville.id = personne.ville_id where personne.Type_acte is null group by personne.experience limit 5");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function top_huissiers(){
        $stmt = $this->db->prepare("select personne.nom , personne.experience , Ville.nom_ville from personne join Ville on Ville.id = personne.ville_id where personne.Type_acte is not null group by personne.experience limit 5");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}