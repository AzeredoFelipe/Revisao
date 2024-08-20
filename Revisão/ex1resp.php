<!DOCTYPE html>
<html lang="BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 1</title>
    <link rel="stylesheet" href="seu_estilo.css"> 
</head>
<body>
    <header>
        <h1>Resultado do Exercício 1</h1>
    </header>
    <main>
        <?php 
            if ($_POST){
                $hora_inicial = new DateTime($_POST['hora_inicial']);
                $hora_final = new DateTime($_POST['hora_final']);
                $diferenca = $hora_final->diff($hora_inicial);
                echo "<p>Diferença de horário: ".$diferenca->format("%h horas e %I minutos")."</p>";
            } else {
                echo "<p>Erro: Dados não foram enviados corretamente.</p>";
            }
        ?>
    </main>
</body>
</html>
