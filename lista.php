<?php
    include_once("cabecalho.php");
?>
    <a href="index.php">Cadastro</a>
    <h2 class="text-center">Lista de Tarefas</h2>

    <div class="panel panel-primary">
        <div class="panel-body">
            Panel content
            <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda">
             <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
        </button>
        </div>
        
    </div>
<?php

    include_once("conexao.php");

    $query = "Select * from horarios";

    $result = $conn->query($query);

    while ($data  = mysqli_fetch_assoc($result)) {
        echo"<div class='text-center'>";
        echo $data['estabelecimento']."<br>";
        echo $data['data']."<br>";
        echo "<br>";
        echo"</div>";
    }