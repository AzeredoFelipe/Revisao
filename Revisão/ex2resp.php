<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 2</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $horas_trabalhadas = floatval($_POST['horas_trabalhadas']);
        $valor_hora = floatval($_POST['valor_hora']);
        $salario_semanal = ($horas_trabalhadas / 4) * $valor_hora;
        echo "<p>O salário semanal é: R$ " . number_format($salario_semanal, 2, ',', '.') . "</p>";
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
