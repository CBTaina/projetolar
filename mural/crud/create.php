<?php
include '../../include/conexao.php';

    $nome = $_POST['nome'];
    //$foto = $_POST['foto'];


    $query_cadastrar = "INSERT INTO mural VALUES(
        null,
        '$nome',
        null,/* foto */
        null,/* descricao */
        now()
    )";

    $cadastrar_formulario = mysqli_query($connex, $query_cadastrar) or die(mysqli_error($connex));

    header('location: ../index.php');
?>