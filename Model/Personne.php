<?php

namespace Model;

use PDO;
use Service\Database;

class Personne
{
    private ?string $full_name, $phone, $email, $specialites = null, $Consultation_enligne = null, $Type_acte = null, $nom_ville;
    private int $id, $experience, $tarif, $id_ville;
    private PDO $db;
    public function __construct()
    {
        $this->db = Database::createInstance()->getConnexion();
    }


    public function getId()
    {
        return $this->id;
    }
    public function getexperience()
    {
        return $this->experience;
    }
    public function gettarif()
    {
        return $this->tarif;
    }

    public function getfull_name()
    {
        return $this->full_name;
    }
    public function getphone()
    {
        return $this->phone;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getspecialites()
    {
        return $this->specialites;
    }
    public function getConsultation_enligne()
    {
        return $this->Consultation_enligne;
    }
    public function getType_acte()
    {
        return $this->Type_acte;
    }
    public function setexperience($experience)
    {
        $this->experience = $experience;
    }

    public function settarif($tarif)
    {
        $this->tarif = $tarif;
    }

    public function setfull_name($full_name)
    {
        $this->full_name = $full_name;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

    public function setspecialites($specialites)
    {
        $this->specialites = $specialites;
    }

    public function setConsultation_enligne($Consultation_enligne)
    {
        $this->Consultation_enligne = $Consultation_enligne;
    }

    public function setType_acte($Type_acte)
    {
        $this->Type_acte = $Type_acte;
    }
    public function setnom_ville($nom_ville)
    {
        $this->nom_ville = $nom_ville;
    }
    public function setid_ville($id_ville)
    {
        $this->id_ville = $id_ville;
    }


    public function create_ville()
    {
        $stmt = $this->db->prepare("insert into Ville(nom_ville) values (:nom_ville) ");
        $stmt->execute([':nom_ville' => $this->nom_ville]);
        return $this->db->lastInsertId();
    }
    public function create_personne()
    {
        $stmt = $this->db->prepare("insert into personne (full_name,phone,email,experience,tarif,Specialites,Consultation_enligne,Type_acte,ville_id) 
        values(:fullname,:phone,:email,:experience,:tarif,:specialites,:con_enligne,:Type_acte,:id_ville)");
        $stmt->execute(
            [
                ":fullname" => $this->full_name,
                ":phone" => $this->phone,
                ":email" => $this->email,
                ":experience" => $this->experience,
                ":tarif" => $this->tarif,
                ":specialites" => $this->specialites,
                ":con_enligne" => $this->Consultation_enligne,
                ":Type_acte" => $this->Type_acte,
                ":id_ville" => $this->id_ville
            ]
        );
    }

    public function delete()
    {
        $stmt = $this->db->prepare("delete from personne where id = :id");
        $stmt->execute(
            [
                ":id" => $this->id
            ]
        );
    }
    public function getAll()
    {
        $stmt = $this->db->prepare("select personne.* ,ville.nom_ville from personne join ville on ville.id = personne.ville_id");
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
