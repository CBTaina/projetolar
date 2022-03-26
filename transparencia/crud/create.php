<?php
include '../../include/conexao.php';

    $origem = $_POST['origem'];
    $doador = $_POST['doador'];
    $objeto = $_POST['objeto'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];

    $query_cadastrar = "INSERT INTO transparencia VALUES(
        null,
        '$origem',
        '$doador',
        '$objeto',
        '$data',
        '$valor',
        null, /* comprovante */
        now()
    )";

    $cadastrar_formulario = mysqli_query($connex, $query_cadastrar) or die(mysqli_error($connex));

    header('location: ../index.php');
?>