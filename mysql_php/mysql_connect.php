<?php 

    $connection = mysql_connect('localhost', 'root', '') or die('No se pudo conectar');

     mysql_selet_db('apptodo', $connection);

     $results = mysql_query('SELECT * FROM tasks');

    $result = mysql_fetch_object($results);

    echo $result->name;

    // foreach ($results as $key => $result) {
    //     echo $result;
    // };
?>