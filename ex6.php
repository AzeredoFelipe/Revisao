<?php require("cabecalho.php"); ?>

<h1>Exercício 6</h1>
<form action="ex6resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_previstas" class="form-label">Horas previstas:</label>
            <input type="number" name="horas_previstas" id="horas_previstas" step="0.1" class="form-control" required />
        </div>
        <div class="col">
            <label for="taxa_hora" class="form-label">Taxa por hora (R$):</label>
            <input type="number" name="taxa_hora" id="taxa_hora" step="0.01" class="form-control" required />
        </div>
        <div class="col">
            <label for="custos_adicionais" class="form-label">Custos adicionais (R$):</label>
            <input type="number" name="custos_adicionais" id="custos_adicionais" step="0.01" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Custo do Projeto</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
