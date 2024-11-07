<?php include("header.php") ?>

<div class="container-fluid text-center">
    <h2>Cadastro de Usuário:</h2>
    <div class="d-flex justify-content-center mb-3">
        <div class="row">
            <div class="col-sm-12">
                <form action="actionUsuario.php" class="was-validated text-dark" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="matriculaUsuario" placeholder="Informe o seu número de matricula" name="matriculaUsuario" minlength="11" maxlength="11" required>
                        <label for="matriculaUsuario" class="form-label">Número de Matricula IFPR:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="file" class="form-control" id="fotoUsuario" name="fotoUsuario" required>
                        <label for="fotoUsuario" class="form-label">Foto:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="nomeUsuario" placeholder="Informe o seu nome" name="nomeUsuario" required>
                        <label for="nomeUsuario" class="form-label">Nome:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="cursoUsuario" name="cursoUsuario" required>
                            <option value="JOG">Jogos</option>
                            <option value="INF">Informática</option>
                            <option value="AUT">Automação</option>
                            <option value="MEC">Mecânica</option>
                        </select>
                        <label for="cursoUsuario" class="form-label">Curso:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="emailUsuario" placeholder="Informe o seu email" name="emailUsuario" required>
                        <label for="emailUsuario" class="form-label">Email:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="password" class="form-control" id="senhaUsuario" placeholder="Informe uma senha" name="senhaUsuario" required>
                        <label for="senhaUsuario" class="form-label">Senha:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="password" class="form-control" id="confirmarSenhaUsuario" placeholder="Confirme a senha" name="confirmarSenhaUsuario" required>
                        <label for="confirmarSenhaUsuario" class="form-label">Confirme a Senha:</label>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>