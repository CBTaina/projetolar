<?php
    include 'conexao.php';

    $id = $_POST['idCadastro'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
   
    $recebendo_cadastro = "UPDATE cadastro_pessoas  
        SET nome = '$nome', telefone = '$telefone' 
            WHERE id = '$id'";
   
    $query_cadastro = mysqli_query($connex, $recebendo_cadastro);

    header('location: ../index.php');
?>