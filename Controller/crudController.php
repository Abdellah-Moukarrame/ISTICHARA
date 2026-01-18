<?php
use Model\Personne;
$add_personne = new Personne;

if (isset($_POST['add_personne'])) {
    $add_personne->setfull_name($_POST['nom_personne']); 
    $add_personne->setemail($_POST['email_personne']);
    // $personne=$_POST['personne'];
    $_POST['ville_personne'];
    $add_personne->setphone($_POST['tele_personne']);
    $add_personne->settarif($_POST['tarif_personne']);
    $add_personne->setspecialites($_POST['specialite']) ;
    $add_personne->setConsultation_enligne($_POST['consultaion']);
    $add_personne->setType_acte($_POST['type_acte']);

    $add_personne->create();

}
require "./View/admin/formaddpersonne.php";