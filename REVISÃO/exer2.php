<?php require("cabecalho.php"); ?>
<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas" class="form-label">
                Informe o total de horas trabalhadas no mês:
            </label>
            <input type="number" name="horas_trabalhadas" id="horas_trabalhadas" class="form-control"/>
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">
                Informe o valor da hora trabalhada:
            </label>
            <input type="number" name="valor_hora" id="valor_hora" step="0.01" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $horas_trabalhadas = floatval($_POST['horas_trabalhadas']);
        $valor_hora = floatval($_POST['valor_hora']);
        $salario_semanal = ($horas_trabalhadas / 4) * $valor_hora;
        echo "<p>O salário semanal é: R$ " . number_format($salario_semanal, 2, ',', '.') . "</p>";
    }

    require("rodape.php"); 
?>
