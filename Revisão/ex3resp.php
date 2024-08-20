<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 3</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $lucros = floatval($_POST['lucros']);
        $nome_funcionario = htmlspecialchars($_POST['nome_funcionario']);
        $desempenho = intval($_POST['desempenho']);
        
        // Definir a porcentagem de bônus com base no desempenho
        $porcentagem_bonus = 0.0;
        switch ($desempenho) {
            case 1:
                $porcentagem_bonus = 0.001; // 0,1%
                break;
            case 2:
                $porcentagem_bonus = 0.002; // 0,2%
                break;
            case 3:
                $porcentagem_bonus = 0.003; // 0,3%
                break;
            case 4:
                $porcentagem_bonus = 0.005; // 0,4%
                break;
            case 5:
                $porcentagem_bonus = 0.007; // 0,5%
                break;
            default:
                echo "<p>Desempenho inválido. Insira um valor de 1 a 5.</p>";
                exit;
        }
        
        // Calcular o bônus
        $bonus = $lucros * $porcentagem_bonus;

        echo "<p>O funcionário <strong>$nome_funcionario</strong> receberá um bônus de: R$ " . number_format($bonus, 2, ',', '.') . "</p>";
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
