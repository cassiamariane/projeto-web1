<?php

//connection
require_once '../database/connection.php';

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    //clear inputs to avoid sql injection
    $matricula_aluno = $_POST["matricula_aluno"];
    $id_projeto = $_POST["id_projeto"];

    $sql = "UPDATE SOLICITA SET aceito = true WHERE matricula_aluno = '$matricula_aluno' AND id_projeto = '$id_projeto'";
    $result = mysqli_query($connect, $sql);
    $hoje = date('Y-m-d');
    $sql = "INSERT INTO PARTICIPA VALUES ('$matricula_aluno', '$id_projeto', '$hoje', null, 0)";
    $result = mysqli_query($connect, $sql);

    if($result){
      header("Location: index.php");
    } else {
      $errors[] = "<span>Senha inválida</span>";
      header("Location: index.php");
    }
}