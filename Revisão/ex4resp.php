<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 4</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome_tarefa = htmlspecialchars($_POST['nome_tarefa']);
        $horas_tarefa = floatval($_POST['horas_tarefa']);
        $complexidade = $_POST['complexidade'];

        $nome_funcionario = htmlspecialchars($_POST['nome_funcionario']);
        $horas_disponiveis = floatval($_POST['horas_disponiveis']);
        $experiencia = $_POST['experiencia'];

        $tempo_suficiente = $horas_disponiveis >= $horas_tarefa * 1.1;

        $pode_realizar = false;
        if ($experiencia == 'junior' && $complexidade == 'baixa') {
            $pode_realizar = true;
        } elseif ($experiencia == 'pleno' && ($complexidade == 'baixa' || $complexidade == 'media')) {
            $pode_realizar = true;
        } elseif ($experiencia == 'senior' && ($complexidade == 'media' || $complexidade == 'alta')) {
            $pode_realizar = true;
        }
       
        if ($tempo_suficiente && $pode_realizar) {
            echo "<p>O funcionário <strong>$nome_funcionario</strong> pode realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
        } else {
            echo "<p>O funcionário <strong>$nome_funcionario</strong> <strong>não pode</strong> realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
        }
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
