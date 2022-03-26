<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Cadastros</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
        <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <!-- CSS personalizado -->
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="./css/personalizado.css">
        <!-- Ícone pagina -->
        <link rel="shortcut icon" type="image/x-icon" href="https://sistemas.ufac.br/home/wp-content/themes/sistemas/staticIndex/imagens/logo_ufac.gif">
    </head>

    <body>
        <!-- menu -->
        <?php include '../menu.php' ?>
        <!-- main -->
        <main>
            <div class="container">
                <div class="row mt-4">
                    <div class="col">
                        <h3 class="text-primary">Formulário de Cadastro</h3>
                    </div>

                    <?php 
                        if(true){ 
                    ?>

                    <!-- Modal Call -->
                    <div class="col" align="right">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#cad">Novo Cadastro</button>
                    </div>

                    <?php 
                        }
                    ?>

                    <!-- Modal -->
                    <div class="modal fade" id="cad" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cadLabel">Doação</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="back-End/cadastros.php" method="post">
                                        <label for="">Origem</label>
                                        <select name="origem" id="origem" class="form-control" required="required">
                                            <option value="" disabled selected hidden>Selecione a origem da doação</option>

                                            <option value="Privada">Privada</option>
                                            <option value="Pública">Pública</option>
                                        </select><br>
                                        <label for="">Doador</label>
                                        <input type="text" name="doador" id="doador" class="form-control" placeholder="Digite a entidade responsavel pela doação" required><br>
                                        <label for="">Objeto</label>
                                        <input type="text" name="objeto" id="objeto" class="form-control" placeholder="Digite o(s) objeto(s) doado(s)" required><br>
                                        <label for="">Data</label>
                                        <input type="date" name="data" id="data" class="form-control" placeholder="Digite a data da doação" required><br>
                                        <label for="">Valor (R$)</label>
                                        <input type="text" name="valor" id="valor" class="form-control" placeholder="Digite o valor doado" required><br>
                                        <div class="text-right" align="right">
                                            <input type="submit" value="ENVIAR" class="btn btn-success btn-sm">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- tabela responsiva -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataListagens" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Origem</th>
                                <th>Doador</th>
                                <th>Objeto</th>
                                <th>Data</th>
                                <th>Valores</th>
                                <?php 
                                    if(true){ 
                                ?>
                                <th>Gerenciamento</th>
                                <?php 
                                    }
                                ?>
                            </tr>
                        </thead>

                        <tbody id="myTable">
                            <?php
                                include 'back-End/conexao.php';

                                $query_listar = " SELECT * FROM transparencia "; 
                                $buscar_cadastros = mysqli_query($connex, $query_listar);

                                while($retorno_cadastros = mysqli_fetch_array($buscar_cadastros))
                                {
                            ?>

                            <tr>
                                <td scope="row"> <?php echo $retorno_cadastros['origem']; ?> </td>
                                <td> <?php echo $retorno_cadastros['doador']; ?> </td>
                                <td align="justify"> <?php echo $retorno_cadastros['objeto']; ?> </td>
                                <td> <?php echo $retorno_cadastros['data']; ?> </td>
                                <td> <?php echo $retorno_cadastros['valor']; ?> </td>
                                <?php 
                                    if(true){ 
                                ?>
                                <td>
                                    <form action="back-End/delete.php" method="post">
                                        <input type="hidden" name="idCadastro" value="<?php echo $retorno_cadastros['id']; ?>">
                                        <input type="submit" value="EXCLUIR" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>

                            <?php 
                                    }
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- footer -->
        <?php include '../rodape.php' ?>
        <!-- Bootstrap js - Bundle with Popper -->
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    </body>

</html>