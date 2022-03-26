<?php
    include '../../include/conexao.php';

    $id = $_POST['idCrud'];
    $recebendo_cadastro = "DELETE FROM mural WHERE id = '$id'";
    $query_cadastro = mysqli_query($connex, $recebendo_cadastro);

    header('location: ../index.php');
?>