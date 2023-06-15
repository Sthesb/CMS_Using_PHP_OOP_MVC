<?php 

    // this is to be replaced with a router
    $section = $_GET['section'] ?? 'home';
    
    if($section == 'about-us'){
        include 'Controller/AboutController.php';
    }else if($section == 'contact'){
        include 'Controller/ContactController.php';
    }else{
        include 'Controller/HomeController.php';
    }
    
