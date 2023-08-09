<?php 
    try{
        $connection = new PDO('mysql:host=localhost;dbname=apptodo;port=3307', 'root', '');

        $results = $connection->query('SELECT * FROM tasks');

        foreach ($results as $row) {
             echo($row['name']);
        }

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


?>