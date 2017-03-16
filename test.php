<?php
    
    if(isset($_POST['submita'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $text  = $_POST['comments'];

        $message = 'From:' . ' ' . $fname . ' ' . $lname .'</br>'. 'Email: ' . $email . '</br>'. 'Phone :' . $phone . '</br>' .'Message: '.'</br>'. $text . '</br>'; 

        

    }

?>
