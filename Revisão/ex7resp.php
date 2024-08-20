<?php require("cabecalho.php"); ?>

<h1>Resultado do Exercício 7</h1>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prazo_projeto = intval($_POST['prazo_projeto']);
        $atividades_total = intval($_POST['atividades_total']);
        $atividades_concluidas = intval($_POST['atividades_concluidas']);
        $produtividade_diaria = intval($_POST['produtividade_diaria']);

        // Calcular atividades restantes
        $atividades_restantes = $atividades_total - $atividades_concluidas;

        // Estimar dias restantes para concluir o projeto
        $dias_restantes = ceil($atividades_restantes / $produtividade_diaria);

        if ($dias_restantes <= $prazo_projeto) {
            echo "<p>O projeto está dentro do prazo. Estimativa de conclusão em $dias_restantes dias.</p>";
        } else {
            echo "<p>O projeto está atrasado. Serão necessários $dias_restantes dias para concluir.</p>";
        }
    } else {
        echo "<p>Erro: Dados não foram enviados corretamente.</p>";
    }
?>

<?php require("rodape.php"); ?>
