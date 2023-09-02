<?php

session_start();

require_once('db_connection.php');

require_once('all_views/task_managment.php'); 
  

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/to_do_classes.css">
</head>
<body>

    <?php
    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
    
if (isset($_SESSION['username'])) {
    ?>
            <h1 class="text-center pt-3"> Ahora tienes acceso a la página</h1>
            <h1 class="text-center mt-3">
            <?php
              echo $_SESSION['username'] . '👌';
    ?>
            </h1>

        <section class="container todolist">
            <h1 class="text-center m-3">To-do-list</h1>
                <?php 
                
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    
                  } 

                // if (isset($_SESSION['taskFromTable'])) {
                //   echo $_SESSION['taskFromTable'];
                //   unset($_SESSION['taskFromTable']);
                // }

                  
                ?>
                <!--  echo htmlspecialchars($_SERVER['PHP_SELF']); -->
                <form class='login-form' action="content.php" method="POST" class="text-center">
                    <input type="text" name="task" id="task" placeholder="Escribe tu tarea" class="p-2">
                    <input type="date" name="date" id="date" placeholder="Selecciona una fecha" class="p-2">
                    <input type="submit" name="save_submit" value="GUARDAR" class="tl--save p-2">
                    <!-- <input type="submit" name="view_submit" value="VER TAREAS" class="p-2"> -->
                </form>

        <div class="table-wrapper m-3">
            <table class="table table-hover table-bordered m-4">
              <thead>
                <tr>
                  <th>Tarea</th>
                  <th>Fecha</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody >

                <?php 
                  if(isset($_SESSION['rows'])) {
                    $theRows = $_SESSION['rows'];
                    // print_r($_SESSION['rows']);
                    foreach ($_SESSION['rows'] as $row) {
                ?>
                <tr >
                  <td class="bg-danger">
                      <?php 
                      echo $row['task_name'];
                      ?>
                  </td>
                  <td>
                    <?php 
                      echo $row['due_date'];
                    ?>
                </td>
                  <td>
                      <a class='delete btn btn-danger' href='?taskId=<?php echo $row['id'] ?>'>Borrar</a>
                       
                    <!-- echo "<button class='delete btn btn-danger' id='" . $row['id'] . "'>Delete</button>" -->
                    <a class='btn btn-success' href='?keyStatus=<?php echo $row['id'] ?>&taskStatus=<?php echo $row['task_status'] ?>'>Incompleta</a>
                  </td>
                  <td>
                  <?php 
                     if (isset($_SESSION['com'])) {
                      echo $_SESSION['com'];
                      unset($_SESSION['com']);
                    }
                     if (isset($_SESSION['com2'])) {
                      echo $_SESSION['com2'];
                      unset($_SESSION['com2']);
                    }
                
                    }
                    // unset($_SESSION['rows']);

                  } else {
                    echo 'no tasks ';

                  }
                  ?>
                  </td>
                </tr>
              </tbody>
            </table>
                  <?php 
                       if (isset($_SESSION['test'])) {
                        echo $_SESSION['test'];
                        unset($_SESSION['test']);
                      }
                  ?>
                  </div>
        </section>

        <p class="text-white text-center mt-3">
           ¿Ya te vas?
            <a href="all_views/destroy.php" class="lf--forgot">
            Salir de la página</a>
        </p>


    <?php
} else {
    echo "<script>
                    alert('No has iniciado sessión')
                    window.location.href = 'all_views/login.php';
                 </script>";
}
?>
        <script src="js/functions.js"></script>
</body>
</html>
