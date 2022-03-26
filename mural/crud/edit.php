<?php
    include '../../include/conexao.php';

    $id = $_POST['idCrud'];
    $nome = $_POST['nome'];
   
    $recebendo_cadastro = "UPDATE mural SET nome = '$nome' WHERE id = '$id'";
   
    $query_cadastro = mysqli_query($connex, $recebendo_cadastro);

    header('location: ../index.php');
?>