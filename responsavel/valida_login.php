<?php

//connection
require_once '../database/connection.php';

//session
session_start();

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    //clear inputs to avoid sql injection
    $identifier = validForm($_POST["identifier"]);
    $senha = validForm($_POST["senha"]);

    $sql = "SELECT nome, email, senha FROM Usuario WHERE email = '$identifier' OR perfil = '$identifier'";
    $result = mysqli_query($connect, $sql);

        //not found user error
    if (mysqli_num_rows($result) <= 0) {
        $errors[] = "<span>Este usuário não existe</span>";
    } else {

        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $senhaHash = $row['senha'];

        //verifying senha
        $auth = password_verify($senha, $senhaHash);
        //invalid senha error
        if (!$auth) {
            $errors[] = "<span>Senha inválida</span>";
        } else {
            mysqli_close($connect);
            $_SESSION['signedin'] = true;
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            header("Location: index.php");
        }
    }
}

function validForm($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = mysqli_escape_string($connect, $data);
    return $data;
}