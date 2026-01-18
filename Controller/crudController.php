<?php

use Model\Personne;

$add_personne = new Personne;
$add_ville = new Personne;

if (isset($_POST['add_personne'])) {
    $add_ville->setnom_ville($_POST['ville_personne']);
    $id_ville = $add_ville->create_ville();
    $add_personne->setfull_name($_POST['nom_personne']);
    $add_personne->setemail($_POST['email_personne']);
    $add_personne->setphone($_POST['tele_personne']);
    $add_personne->settarif($_POST['tarif_personne']);
    $add_personne->setexperience($_POST['tarif_personne']);
    $add_personne->setId_ville($id_ville); 

    if (empty($_POST['type_acte'])) {
        $add_personne->setspecialites($_POST['specialite']);
        $add_personne->setConsultation_enligne($_POST['consultaion']);
    } else {
        $add_personne->setType_acte($_POST['type_acte']);
    }

    $add_personne->create_personne();

    header("location:dashboard");
    exit;
}
require "./View/admin/formaddpersonne.php";