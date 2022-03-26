<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Cadastros</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- css imports-->
        <?php include '../include/css.php' ?>
        <!-- Ícone pagina -->
        <link rel="shortcut icon" type="image/x-icon" href="https://sistemas.ufac.br/home/wp-content/themes/sistemas/staticIndex/imagens/logo_ufac.gif">
    </head>

    <body>
        <!-- menu -->
        <?php include '../include/menu.php' ?>
        <!-- main -->
        <main>
            <div class="container">
                <div class="row mt-4">
                    <div class="col">
                        <h2 class="text-primary">Doações</h2>
                    </div>

                    <?php 
                        if(true){ 
                    ?>

                    <!-- Modal cadastro - chamado -->
                    <div class="col" align="right">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#cad">Novo Cadastro</button>
                    </div>
                    <!-- Modal cadastro -->
                    <div class="modal fade" id="cad" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cadLabel">Registrar Doação</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="crud/create.php" method="post">
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

                    <?php 
                        }
                    ?>

                </div>
                <br>
                <!-- tabela responsiva -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm" id="dataListagens" width="100%" cellspacing="0">
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
                                include '../include/conexao.php';

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
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#d<?php echo $retorno_cadastros['id']; ?>">Apagar</button>
                                </td>
                            </tr>

                            <!-- Modal delete -->
                            <div class="modal fade" id="d<?php echo $retorno_cadastros['id']; ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cadLabel">Tem certeza que deseja excluir esse conteudo?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body" align="right">
                                            <form action="crud/delete.php" method="post">
                                                <input type="hidden" name="idCrud" value="<?php echo $retorno_cadastros['id']; ?>">
                                                <input type="submit" value="Continuar" class="btn btn-sm btn-success">

                                                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
        <?php include '../include/rodape.php' ?>
        <!-- js imports-->
        <?php include '../include/js.php' ?>
    </body>

</html>