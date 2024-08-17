<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 6</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $horas_previstas = floatval($_POST['horas_previstas']);
        $taxa_hora = floatval($_POST['taxa_hora']);
        $custos_adicionais = floatval($_POST['custos_adicionais']);
        
        // Calcular o custo de mão de obra
        $custo_mao_obra = $horas_previstas * $taxa_hora;
        
        // Calcular o custo total do projeto
        $custo_total_projeto = $custo_mao_obra + $custos_adicionais;

        echo "<p>O custo de mão de obra é: R$ " . number_format($custo_mao_obra, 2, ',', '.') . "</p>";
        echo "<p>O custo total do projeto é: R$ " . number_format($custo_total_projeto, 2, ',', '.') . "</p>";
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
