<?php require("cabecalho.php"); ?>

<h1>Exercício 5</h1>
<form action="ex5resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados" class="form-label">Informe o total de dias trabalhados:</label>
            <input type="number" name="dias_trabalhados" id="dias_trabalhados" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Dias de Férias</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
