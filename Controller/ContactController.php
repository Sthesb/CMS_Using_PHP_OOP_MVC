<?php

    class ContactController {
        
        function showFormAction() {
            include 'Views/contact-page.php';
        }

        function submitFOrm() {
            // validate
            // store data
            // send email

            include 'Views/contact-us-thank-you.php';
        }
    }
    

    