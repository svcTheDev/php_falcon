<?php 
        function show_message ($message, $type, $file) {
            $_SESSION['error'] = "<p class='bg-$type text-white'>$message</p>";
            header("Location: $file.php");
            die();
        }
?>