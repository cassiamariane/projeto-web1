<?php

    //connection
    require '../database/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = array();
    
        //clear inputs to avoid sql injection
        $solicita = validForm($_POST["solicitacao"]);

        //Verfifica se os campos existem
        if(!isset($_POST['solicitacao'])){
            $errors[] ='Erro: Não existem os campos necessários';
        }

        //Verifica se os campos estão preenchidos
        if(empty($_POST['solicitacao'])){
            $errors[] ='Erro: Um dos campos não está preenchido';
        }

        $data = date('Y/m/d');
        str_replace("/","-",$data);

        $sql = "INSERT INTO ";
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