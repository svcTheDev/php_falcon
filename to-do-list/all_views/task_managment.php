<?php

getData($conn);
include_once 'functions.php';



$error = "";
if (isset($_POST["save_submit"]) && isset($_POST['task']) && isset($_POST['date'])) {

    if (!empty($_POST['task']) and !empty($_POST['date'])) {
        $task = data_validation($_POST['task']);
        $date = data_validation($_POST['date']);
        if (!preg_match("/^[a-zA-Z' :\-\d]*$/", $task) or !preg_match("/^[a-zA-Z' :\-\d]*$/", $date)) {
            show_message("Campo inválido : Solo letras y espacios en blanco permitidos", 'danger', 'content');
        } else {
            // Add Task
            $statement = $conn->prepare("INSERT INTO table_task (task_name, due_date, task_status, user_id) VALUES (?, ?, ?, ?)");
            $task_status = 1;
            $statement->bind_param('ssii', $task, $date, $task_status, $_SESSION['user_id']);
            $statement->execute();  

            getData($conn);

            header("Location: content.php");
            die();
        }
    } else {
        show_message('los dos campos son obligatorios', 'danger', 'content');
    }
}

function data_validation($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    $data = filter_var($data, FILTER_SANITIZE_STRING);
    return $data;
}

// Shows tasks
function getData($conn)
{
    $statement2 = $conn->prepare('SELECT * FROM table_task');
    // $task_status = 1;
    // $statement2->bind_param('ssi', $task, $date, $task_status);
    $statement2->execute();
    $result = $statement2->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    // $_SESSION['console'] = print_r($result);

    $_SESSION['rows'] = $rows;
}

// Delete task
if (isset($_GET["taskId"])) {
    $statement = $conn->prepare("DELETE FROM table_task WHERE task_id=?");
    $statement->bind_param("s", $_GET['taskId']);
    $statement->execute();
    getData($conn);

}

// Update task
if (isset($_GET["taskStatus"]) and isset($_GET["keyStatus"])) {
    if (intval($_GET["taskStatus"]) === 1) {
        $task_status = 2;
    } else {
        $task_status = 1;
    }

    $statement = $conn->prepare("UPDATE table_task SET task_status=? WHERE task_id=?");
    $statement->bind_param("is", $task_status, $_GET['keyStatus']);
    $statement->execute();

    getData($conn);

}
