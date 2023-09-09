<?php 
        function show_message ($message, $type, $file) {
            $_SESSION['error'] = "<p class='bg-$type text-white'>$message</p>";
            header("Location: $file.php");
            die();
        }

        function data_validation($data)
        {
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);

            $data = filter_var($data, FILTER_SANITIZE_STRING);
            $data = filter_var($data, FILTER_SANITIZE_EMAIL);
            return $data;
        }
?>