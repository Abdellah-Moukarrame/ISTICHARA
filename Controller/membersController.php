<?php
use Model\Personne;
$personnes = new Personne;
$results=$personnes->getAll();
require "./View/admin/members.php";