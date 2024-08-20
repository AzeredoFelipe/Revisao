<?php require("cabecalho.php"); ?>

<h1>Exercício 3</h1>
<form action="ex3resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros" class="form-label">Informe o valor dos lucros a serem distribuídos:</label>
            <input type="number" name="lucros" id="lucros" step="0.01" class="form-control" required />
        </div>
        <div class="col">
            <label for="nome_funcionario" class="form-label">Informe o nome do funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="desempenho" class="form-label">Informe o desempenho do funcionário (1 a 5):</label>
            <input type="number" name="desempenho" id="desempenho" min="1" max="5" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Bônus</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
