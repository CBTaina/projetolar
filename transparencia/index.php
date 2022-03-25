<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Cadastros</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
        <!-- Bootstrap icons CSS -->
        <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="personalizado.css">
    </head>

    <body>
        <!-- menu -->
        <?php include 'menu.php' ?>
        <!-- main -->
        <main>
            <div class="container">
                <div class="row mt-4">
                    <div class="col">
                        <h3 class="text-primary">Formulário de Cadastro</h3>
                    </div>
                    <!-- Modal Call -->
                    <div class="col text-right" align="right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newcad">Novo Cadastro</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="newcad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newcadLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newcadLabel">Cadastrando usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="back-End/cadastros.php" method="post">
                                        <label for="">Nome</label>
                                        <input type="text" name="nome" class="form-control" placeholder="digite seu nome" required><br>
                                        <label for="">Telefone</label>
                                        <input type="text" name="telefone" class="form-control" placeholder="digite seu telefone" required><br>

                                        <div class=text-right>
                                            <input type="submit" value="ENVIAR" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- busca -->
                <br>
                <input class="form-control" id="myInput" type="text" placeholder="Busca">
                <br>
                <!-- tabela responsiva -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataListagens" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody id="myTable">
                            <?php
                                include 'back-End/conexao.php';

                                $query_listar = " SELECT * FROM cadastro_pessoas "; 
                                $buscar_cadastros = mysqli_query($connex, $query_listar);

                                while($retorno_cadastros = mysqli_fetch_array($buscar_cadastros))
                                {
                            ?>

                            <tr>
                                <td scope="row"> <?php echo $retorno_cadastros['id']; ?> </td>
                                <td> <?php echo $retorno_cadastros['nome']; ?> </td>
                                <td> <?php echo $retorno_cadastros['telefone']; ?> </td>
                                <td> <?php echo $retorno_cadastros['dataCadastro']; ?> </td>

                                <td>
                                    <form action="back-End/delete.php" method="post">
                                        <input type="hidden" name="idCadastro" value="<?php echo $retorno_cadastros['id']; ?>">
                                        <input type="submit" value="EXCLUIR" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>

                            <?php 
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- footer -->
        <?php include 'rodape.php' ?>
        <!-- Bootstrap js - Bundle with Popper -->
        <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <!-- busca -->
        <script>
        document.getElementById('myInput').addEventListener('keyup', debound(filter_table, 500))

        function filter_table(e) {
            const rows = document.querySelectorAll('tbody tr')
            rows.forEach(row => {
                row.style.display = (row.innerText.includes(e.target.value)) ? '' : 'none'
            })
        }

        function debound(func, timeout) {
            let timer
            return (...args) => {
                if (!timer) {
                    func.apply(this, args);
                }
                clearTimeout(timer)
                timer = setTimeout(() => {
                    func.apply(this, args)
                    timer = undefined
                }, timeout)
            }
        }
        </script>

        <!-- <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        </script> -->
    </body>

</html>