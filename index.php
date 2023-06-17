<?php 

    // this is to be replaced with a router
    $section = $_GET['section'] ??  $_POST['section'] ??  'home';
    $action = $_GET['action'] ??  $_POST['action'] ?? 'show';
    
    if($section == 'about-us'){
        include 'Controller/AboutController.php';
    }else if($section == 'contact'){
        include 'Controller/ContactController.php';
        $contactController = new ContactController();
        if($action == 'show'){
            $contactController->showFormAction();
        }else if($action == 'submit'){
            $contactController->submitFOrm();
        }
        

    }else{
        include 'Controller/HomeController.php';
    }
    
