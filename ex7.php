<?php require("cabecalho.php"); ?>

<h1>Exercício 7</h1>
<form action="ex7resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo_projeto" class="form-label">Prazo para finalização do projeto (em dias):</label>
            <input type="number" name="prazo_projeto" id="prazo_projeto" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_total" class="form-label">Total de atividades do projeto:</label>
            <input type="number" name="atividades_total" id="atividades_total" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_concluidas" class="form-label">Atividades já desenvolvidas:</label>
            <input type="number" name="atividades_concluidas" id="atividades_concluidas" class="form-control" required />
        </div>
        <div class="col">
            <label for="produtividade_diaria" class="form-label">Atividades que a equipe desenvolve por dia:</label>
            <input type="number" name="produtividade_diaria" id="produtividade_diaria" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Avaliar Desempenho</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
