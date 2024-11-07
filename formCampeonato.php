<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Cadastro de Campeonato:</h2>

        <div class="d-flex justify-content-center mb-3">

            <div class="row">

                <div class="col-sm-12">

                    <form action="actionCampeonato.php" class="was-validated" method="POST" enctype="multipart/form-data">

                        <div class="form-floating mb-3 mt-3">
                            <input type="file" class="form-control" id="fotoCampeonato" name="fotoCampeonato" required>
                            <label for="fotoCampeonato" class="form-label">Foto:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="nomeCampeonato" placeholder="Informe o nome do Campeonato" name="nomeCampeonato" required>
                            <label for="nomeCampeonato" class="form-label">Nome do Campeonato:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea class="form-control" id="descricaoCampeonato" placeholder="Informe uma descrição do Campeonato" name="descricaoCampeonato" required></textarea>
                            <label for="descricaoCampeonato" class="form-label">Descrição do Campeonato:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="categoriaCampeonato" name="categoriaCampeonato" required>
                                <option value="Valorant">Valorant</option>
                                <option value="Fortnite">Fortnite</option>
                                <option value="Call of Duty Mobile">Call of Duty Mob</option>
                            </select>
                            <label for="categoriaCampeonato" class="form-label">Categoria:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>


                        <br>

                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
       
    </div>

<?php include("footer.php") ?>