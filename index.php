<?php
require_once "autoloder.php";
require "Router/Router.php";

Router::get('',"Controller/homeController.php");
Router::get('admin/add_personne',"Controller/crudController.php");
Router::get('login',"Controller/loginController.php");
Router::get('admin/stats',"Controller/statsController.php");
Router::get('admin/dashboard',"Controller/dashboardController.php");
Router::get('admin/members',"Controller/membersController.php");
Router::get('admin/profile',"Controller/profileController.php");



Router::dispatcher();