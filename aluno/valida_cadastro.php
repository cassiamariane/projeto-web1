<?php

//connection
require '../database/connection.php';

//session
session_start();

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    //clear inputs to avoid sql injection
    $nome = validForm($_POST["nome"]);
    $cpf = validForm($_POST["cpf"]);
    $email = validForm($_POST["email"]);
    $senha = validForm($_POST["senha"]);
    $senha2 = validForm($_POST["senha2"]);
    $perfil = validForm($_POST["perfil"]);
    $curso = validForm($_POST["curso"]);
    $matricula = validForm($_POST["matricula"]);

    //empty blanks error
    if ($senha != $senha2) {
        $errors[] = "<span>As senhas não coincidem</span>";
    } else {
        $options = [
            'cost' => 10,
        ];
        $senha = password_hash($senha, PASSWORD_DEFAULT, $options);
        $sql = "INSERT INTO Usuario (nome, cpf, email, senha, perfil) VALUES ('$nome', '$cpf', '$email', '$senha', '$perfil')";
        $result = mysqli_query($connect, $sql);
        

        //not found user error
        if ($result == false) {
            $errors[] = "<span>Erro ao cadastrar usuário</span>";
        } else {
            $sql = "INSERT INTO Aluno (matricula, email, curso) VALUES ('$matricula', '$email', '$curso')";
            $result = mysqli_query($connect, $sql);

            if ($result == false) {
                $errors[] = "<span>Erro ao cadastrar aluno</span>";
            } else {
                mysqli_close($connect);
                $_SESSION['signedin'] = true;
                $_SESSION['nome'] = $nome;
                $_SESSION['matricula'] = "$matricula";
                $_SESSION['email'] = $email;
                header("Location: ../index.php");
            }
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

?>