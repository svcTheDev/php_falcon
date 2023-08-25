<?php


$error = "";
if (isset($_POST["save_submit"]) && isset($_POST['task']) && isset($_POST['date'])) {
    
    if (!empty($_POST['task']) and !empty($_POST['date'])) {
        $task = test_validation($_POST['task']);
        $date = test_validation($_POST['date']);
        if (!preg_match("/^[a-zA-Z' \-\d]*$/", $task) or !preg_match("/^[a-zA-Z' \-\d]*$/", $date)) {
            $error = "Campo inválido : Solo letras y espacios en blanco permitidos";
        } else {
            $statement = $conn->prepare("INSERT INTO table_task (task_name, due_date, completed) VALUES (?, ?, ?)");
            $completed = 1;
            $statement->bind_param('ssi', $task, $date, $completed);
            $statement->execute();
            
                    $_SESSION['message'] = "</br> esta es la tarea $task y esta la fecha $date";
                    // echo "</br> esta es la tarea $task y esta la fecha $date";
                    
                    // if($conn->affected_rows >= 1) {
                    //   echo '</br>filas agregadas correctamente: ' . $conn->affected_rows;
                    // } else {
                    //   echo 'no se agrego nada';
                    // } 
                    header("Location: content.php");          
                    die();
        }
    } else {
            
                $_SESSION['error'] = "<p class='bg-danger text-white'>los dos campos son obligatorios</p>";
                // $error = 'los dos campos son obligatorios';
                header("Location: content.php");  
                die();
    }
}      
          
          function test_validation($data)
          {
              $data = trim($data);
              $data = htmlspecialchars($data);
              $data = stripslashes($data);
          
              $data = filter_var($data, FILTER_SANITIZE_STRING);
              return $data;
          }
    



    

        

    // $results = $conn->query("SELECT * FROM table_task");
    // if($results->num_rows) {
    //     echo $results->FETCH_ASSOC()["task_name"] . "</br>";
    // } else {
    //     echo "No hay información";
    // }

?>