<?php require("cabecalho.php"); ?>

<h1>Exercício 2</h1>
<form action="ex2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas" class="form-label">Informe o total de horas trabalhadas no mês:</label>
            <input type="number" name="horas_trabalhadas" id="horas_trabalhadas" class="form-control" required />
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">Informe o valor da hora trabalhada:</label>
            <input type="number" name="valor_hora" id="valor_hora" step="0.01" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
