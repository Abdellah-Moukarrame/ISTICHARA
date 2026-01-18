<?php
abstract class Personne
{
    private string $full_name, $phone, $email, $specialites, $Consultation_enligne, $Type_acte;
    private int $id, $experience, $tarif;
    private PDO $db;
    public function __construct()
    {
        $this->db = Database::createInstance()->getConnexion();
    }


    // public function getId(){
    //     return $this->id;
    // }
    // public function getexperience(){
    //     return $this->experience;
    // }
    // public function gettarif(){
    //     return $this->tarif;
    // }

    // public function getfull_name()
    // {
    //     return $this->full_name;
    // }
    // public function getphone()
    // {
    //     return $this->phone;
    // }
    // public function getemail(){
    //     return $this->email;
    // }
    // public function getspecialites(){
    //     return $this->specialites;
    // }
    // public function getConsultation_enligne(){
    //     return $this->Consultation_enligne;
    // }
    // public function getType_acte(){
    //     return $this->Type_acte;
    // }

    public function create()
    {
        $stmt = $this->db->prepare("insert into personne (full_name,phone,email,experience,tarif,Specialites,Consultation_enligne,Type_acte) 
        values(:fullname,:phone,:email,:experience,:tarif,:specialites,:con_enligne,:Type_acte");
        $stmt->execute(
            [
                ":fullname" => $this->full_name,
                ":phone" => $this->phone,
                ":email" => $this->email,
                ":experience" => $this->experience,
                ":tarif" => $this->tarif,
                ":specialites" => $this->specialites,
                ":con_enligne" => $this->Consultation_enligne,
                ":Type_acte" => $this->Type_acte
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
        $stmt = $this->db->prepare("select * from personne");
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
