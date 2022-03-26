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
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Loren Ipsum</h1>
                        <p class="lead text-muted">"Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely."</p>
                    </div>
                </div>
            </section>

            <div class="album py-2 bg-light">
                <section class="bg-light pt-5 pb-5 shadow-sm">
                    <div class="container">
                        <div class="row mb-4">
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
                                            <form action="crud/cadastros.php" method="post">
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
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                            <?php
                                include '../include/conexao.php';

                                $query_listar = "SELECT * FROM mural"; 
                                $buscar_cadastros = mysqli_query($connex, $query_listar);

                                while($retorno_cadastros = mysqli_fetch_array($buscar_cadastros))
                                {
                            ?>

                            <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                                <div class="card shadow-sm">
                                    <img class="img-thumbnail mb-1" srcset="https://getbootstrap.com/docs/5.1/assets/img/examples/headers.png, https://getbootstrap.com/docs/5.1/assets/img/examples/headers@2x.png 2x" src="/docs/5.1/assets/img/examples/headers.png" alt="" width="100%" height="225" loading="lazy">

                                    <div class="card-body">

                                        <?php 
                                            if(true){ 
                                        ?>

                                        <div class="d-flex align-items-end flex-column mb-2">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                                <form action="crud/delete.php" method="post">
                                                    <input type="hidden" name="idCrud" value="<?php echo $retorno_cadastros['id']; ?>">
                                                    <input type="submit" value="Apagar" class="btn btn-sm btn-outline-secondary">
                                                </form>

                                            </div>
                                        </div>

                                        <?php 
                                            }
                                        ?>

                                        <h3 class="h5 mb-3"><?php echo $retorno_cadastros['nome']; ?></h3>
                                        <div class="card-text mb-2" align="justify"><?php echo $retorno_cadastros['descricao']; ?></div>
                                    </div>
                                </div>
                            </div>

                            <?php 
                                }
                            ?>

                            <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>

                                    <div class="card-body">
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- footer -->
        <?php include '../include/rodape.php' ?>
        <!-- js imports-->
        <?php include '../include/js.php' ?>
    </body>

</html>