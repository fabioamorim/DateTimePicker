<?php
    include_once("cabecalho.php");
?>
        <a href="lista.php">Lista</a>
        <h2 class="text-center">Cadastrar Data</h2>
       <hr>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form class="form-horizontal" action="processa.php" method="post">
            <div class="form-group">
                <label for="estabelecimento'" class="col-sm-2 control-label">Estabelecimento</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="estabelecimento" name = "estabelecimento" placeholder="Estabelecimento">
                </div>
            </div>
            <div class="form-group">
                <label for="data" class="col-sm-2 control-label">Data e Hora</label>
                <div class="col-sm-10">
                    <div class="input-group date data data_formato"  data-date-format="dd/mm/yyyy HH:ii:ss">
                        <input class="form-control" size="16" type="text" name="data" placeholder ="Data da visita">
                        <span class="input-group-addon">
                             <span class="glyphicon glyphicon-th" ></span> 
                        </span>
                    </div>  

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
            </form>
<?php
    include_once("rodape.php");
?>