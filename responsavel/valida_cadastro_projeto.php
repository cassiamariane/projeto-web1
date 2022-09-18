<?php

    //connection
    require '../database/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = array();
    
        //clear inputs to avoid sql injection
        $nome = validForm($_POST["nome"]);
        $objetivo = validForm($_POST['objetivo']);

        //Verfifica se os campos existem
        if(!isset($_POST['nome']) || !isset($_POST['objetivo'])){
            $errors[] ='Erro: Não existem os campos necessários';
        }

        //Verifica se os campos estão preenchidos
        if(empty($_POST['nome']) || empty($_POST['objetivo'])){
            $errors[] ='Erro: Um dos campos não está preenchido';
        }

        $data = date('Y/m/d');
        str_replace("/","-",$data);

        $sql = "INSERT INTO Projeto (nome, descricao, data_inicio) VALUES ('$nome', '$objetivo', '$data')";
        $result = mysqli_query($connect, $sql);
            

        if ($result == false) {
            $errors[] = "<span>Erro ao cadastrar projeto</span>";
        } else {
                mysqli_close($connect);
                header("Location: index.php");
        }
    }

    function validForm($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>