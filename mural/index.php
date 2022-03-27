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
                                <h3 class="text-primary">Mural de Fotos</h3>
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
                                            <h5 class="modal-title" id="cadLabel">Adicionar ao mural</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="crud/create.php" method="post">
                                                <label for="">Nome</label>
                                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome da pessoa" required><br>
                                                <!-- <label for="">Descrição</label>
                                                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição" required><br> -->
                                                <label for="">Foto</label>
                                                <input type="file" name="foto" id="foto" class="form-control" accept=".jpg, .jpeg, .png" required><br>
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
                                    <img class="img-thumbnail mb-1" src="https://getbootstrap.com/docs/5.1/assets/img/examples/headers.png" alt="" width="100%" height="225" loading="lazy">

                                    <div class="card-body">

                                        <?php 
                                            if(true){ 
                                        ?>

                                        <div class="d-flex align-items-end flex-column mb-2">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#e<?php echo $retorno_cadastros['id']; ?>">Editar</button>

                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#d<?php echo $retorno_cadastros['id']; ?>">Apagar</button>

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
                            <!-- Modal edit -->
                            <div class="modal fade" id="e<?php echo $retorno_cadastros['id']; ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="cadLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Modal header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cadLabel">Edição</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="crud/edit.php" method="post">
                                                <input type="hidden" name="idCrud" value="<?php echo $retorno_cadastros['id']; ?>">
                                                <label for="">Nome</label>
                                                <input type="text" name="nome" value="<?php echo $retorno_cadastros['nome']; ?>" class="form-control"><br>
                                                <label for="">Foto</label>
                                                <input type="file" name="foto" id="foto" class="form-control" accept=".jpg, .jpeg, .png" required><br>

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