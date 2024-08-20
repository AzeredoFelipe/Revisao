<?php require("cabecalho.php"); ?>

<h1>Exercício 4</h1>
<form action="ex4resp.php" method="post">
    <div class="row">
        <div class="col">
            <h3>Dados da Tarefa</h3>
            <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control" required />
            
            <label for="horas_tarefa" class="form-label">Total de Horas da Tarefa:</label>
            <input type="number" name="horas_tarefa" id="horas_tarefa" class="form-control" required />
            
            <label for="complexidade" class="form-label">Complexidade da Tarefa:</label>
            <select name="complexidade" id="complexidade" class="form-control" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <div class="col">
            <h3>Dados do Funcionário</h3>
            <label for="nome_funcionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control" required />
            
            <label for="horas_disponiveis" class="form-label">Horas Disponíveis de Trabalho:</label>
            <input type="number" name="horas_disponiveis" id="horas_disponiveis" class="form-control" required />
            
            <label for="experiencia" class="form-label">Nível de Experiência:</label>
            <select name="experiencia" id="experiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Verificar Possibilidade</button>
        </div>
    </div>
</form>

<?php require("rodape.php"); ?>
