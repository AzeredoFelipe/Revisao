<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 5</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dias_trabalhados = intval($_POST['dias_trabalhados']);
        
        // Calcular os dias de férias
        $dias_ferias = floor($dias_trabalhados / 30);
        
        // Limitar o máximo de dias de férias a 30
        if ($dias_ferias > 30) {
            $dias_ferias = 30;
        }

        echo "<p>O funcionário tem direito a <strong>$dias_ferias</strong> dias de férias.</p>";
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
