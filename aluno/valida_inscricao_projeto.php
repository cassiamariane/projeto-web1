<?php

//connection
require '../database/connection.php';

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    //clear inputs to avoid sql injection
    $id_projeto = validForm($_POST["id_projeto"]);
    $matricula_aluno = validForm($_POST["matricula_aluno"]);

    $sql = "INSERT INTO Solicita (matricula_aluno, id_projeto) VALUES ('$matricula_aluno', '$id_projeto')";
    $result = mysqli_query($connect, $sql);
    

    //not found user error
    if ($result == false) {
        $errors[] = "<span>Erro ao enviar solicitação</span>";
    } else {
            mysqli_close($connect);
            header("Location: ../index.php");
    }
}



function validForm($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_escape_string($connect, $data);
    return $data;
}

?>