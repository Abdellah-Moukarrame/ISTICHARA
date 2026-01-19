<?php
use Model\Stats;

$personnes = new Stats;
$total_avocats =$personnes->total_avocat();
$total_huissier =$personnes->total_huissier();

require ("./View/admin/dashboard.php");
