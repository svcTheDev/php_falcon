<?php

    // 1- The first thing we will do is to create empty variables
    // 2- Check if the form was submitted
    // 3- assinged a function to each variable with the data enter by the user
    // 4- Create the function that will pass through all the functions to clean and validate the data

    $name = $email = $message = "";
    $name_error = $email_error = $message_error = "";
    
    if (isset($_POST['submit'])) {
        
        if (!empty($_POST['name'])) {
            $name = test_validation($_POST['name']);
            if (!preg_match("/^[a-zA-Z' ]*$/", $name)) {
                $name_error = "Invalid name: Only letters and white space allowed";
            }
        } else {
            $name_error = "name mandatory";
        }

        if (!empty($_POST['email'])) {
            $email = test_validation($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $email_error = "Invalid email format";
            }
        } else {
            $email_error = "email mandatory";
            }
        if (!empty($_POST['message'])) {
            $message = test_validation($_POST['message']);
        } else {
            $message_error = "message mandatory";
        }
    }



    function test_validation($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
    } 


    // $errors = '';
    // $sent = '';
    // if (isset($_POST['submit'])) {
        
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $message = $_POST['message'];
    //         echo $name;
    //         echo $email;
    //         echo $message; 

    //     if (!empty($name)) {
    //         $name = trim($name);
    //         $name = filter_var($name, FILTER_SANITIZE_STRING);
    //         // $sent = 'Succesffully sent';
    //     } else {
    //         $errors .= 'Please add a name <br />'; 
    //     }
    // }

    require 'index.view.php';
    
?>