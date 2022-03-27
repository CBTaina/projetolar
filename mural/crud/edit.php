<?php
    include '../../include/conexao.php';

    $id = $_POST['idCrud'];
    $nome = $_POST['nome'];
    $foto = $_POST['foto'];
   
    $recebendo_cadastro = "UPDATE mural SET nome = '$nome', foto = '$foto' WHERE id = '$id'";
    
    $query_cadastro = mysqli_query($connex, $recebendo_cadastro);

    header('location: ..');
?>