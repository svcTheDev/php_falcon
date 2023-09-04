<?php

session_start();

require_once 'db_connection.php';

require_once 'all_views/task_managment.php';

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
// Tu console.log
if (isset($_SESSION['console'])) {
    echo $_SESSION['console'];
    unset($_SESSION['console']);
}

// Mensaje bienvenida
if (isset($_SESSION['username'])) {
    ?>
    <h1 class="text-center pt-3"> Ahora tienes acceso a la página</h1>
    <h1 class="text-center mt-3"><?php echo $_SESSION['username'] . '👌'; ?></h1>

    <section class="container todolist">
      <h1 class="text-center m-3">To-do-list</h1>
      <?php

    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
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
          <tbody>
            <?php

    if ($_SESSION['rows']) {
        foreach ($_SESSION['rows'] as $row) {
            ?>

            <?php
    if (intval($row['task_status'] === 1)) {
                $background_status = 'bg-danger';
            } else {
                $background_status = 'bg-success';
            }
            ?>
                <tr>
                  <td class="<?php echo $background_status ?> text-center">
                    <?php
    echo $row['task_name'];
            ?>
                  </td>
                  <td class="<?php echo $background_status ?>">
                    <?php
    echo $row['due_date'];
            ?>
                  </td>
                  <td class="transparent">
                    <a class='delete btn btn-dark' href='?taskId=<?php echo $row['id'] ?>'>Borrar</a>

                    <!-- echo "<button class='delete btn btn-danger' id='" . $row['id'] . "'>Delete</button>" -->
                    <a class='btn text-white <?php echo $background_status ?>' href='?keyStatus=<?php echo $row['id'] ?>&taskStatus=<?php echo $row['task_status'] ?>'>

                    <?php
                        if (intval($row['task_status'] === 1)) {
                    ?>
                          Incompleta
                    <?php
                        } else {
                    ?>
                          Completa
                    <?php
                        }
                    ?>

                    </a>
                  </td>
                <?php
    }
    } else {
            ?>
              <tr>
                <td>No hay tareas</td>
                <td>0</td>
                <td>0</td>
                
              </tr>
            <?php
    }

            ?>
          </tbody>
        </table>

            <p class="text-white text-center mt-3 pb-4 mb-0">
              ¿Ya te vas?
              <a href="all_views/destroy.php" class="lf--forgot">
                Salir de la página</a>
            </p>
    </section>
  <?php
} else {
    echo "<script>
                    alert('No has iniciado sessión')
                    window.location.href = 'all_views/login.php';
                 </script>";
}
?>
  <!-- <script src="js/functions.js"></script> -->
</body>

</html>