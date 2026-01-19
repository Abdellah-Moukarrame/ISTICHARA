<?php
use Model\Stats;
$personnes = new Stats;
$top_huissiers=$personnes->top_huissiers();
$top_avocat=$personnes->top_avocat();
require "./View/admin/statistique.php";