<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>DatePicker</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
        <a href="lista.php">Lista</a>
        <h1 class="text-center">Cadastrar Data</h1>
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
    </div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locale/bootstrap-datetimepicker.pt-BR.js"></script>

    <script type="text/javascript">
        $('.data_formato').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR",
            startDate: '+0d'
        });
    </script>
  </body>
</html>