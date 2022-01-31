<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tutoria</title>
    <?php include('../includes/head.php') ?>
</head>
<body class="bg-light">
    <?php include('../includes/header.php') ?>
    <?php include('../includes/sidebar.php') ?>
    <!-- Main Container-->
    <div id="main-container" class="bg-body">
        <div class="d-flex justify-content-between">
            <h3>Alunos</h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#usuarioModal">Adicionar Aluno <i class='bx bx-plus'></i></button>
        </div>
        <div class="container mt-4 px-0">
            <table id="lista_de_alunos" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="modal fade" id="usuarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="adicionaraluno" action="#" method="POST">
                    <div class="modal-body">
                        <!-- FORMULÁRIO DE NOVO ALUNO -->
                        <div class="mb-3">
                            <label for="nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="telefone" class="col-form-label">Telefone:</label>
                                <input type="telefone" class="form-control" name="telefone" id="telefone">
                            </div>
                            <div class="col-6">
                                <label for="matricula" class="col-form-label">Matrícula:</label>
                                <input type="text" class="form-control" name="matricula" id="matricula">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6">
                                <label for="senha" class="col-form-label">Senha:</label>
                                <input type="password" class="form-control" name="senha" id="senha">
                            </div>
                            <div class="col-6">
                                <label for="confirma-senha" class="col-form-label">Confirmar Senha:</label>
                                <input type="password" class="form-control" name="confirma-senha" id="confirma-senha">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php include('../includes/scripts_footer.php') ?>
<script src="../assets/js/controle/controleAlunos.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('#usuarioModal').modal();
        $("#adicionaraluno").on('submit', controleAluno.post);
        controleAluno.get("#lista_de_alunos");
    });
</script>