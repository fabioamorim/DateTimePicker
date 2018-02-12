<?php
    
    session_start();

    include_once("conexao.php");

    $data = $_REQUEST['data'];
    $estabelecimento = $_REQUEST['estabelecimento'];

    //Converter a data e hora do formato brasileiro para o formato do Banco de dados
    $data = explode(" ",$data);
    list($data,$hora) = $data;
    $data_sem_barra = array_reverse(explode("/",$data));
    $data_sem_barra = implode("-",$data_sem_barra);

    $data_sem_barra = $data_sem_barra . " ". $hora;

    //Salvar no BD

    $query = "INSERT INTO horarios (estabelecimento, data) VALUES ('$estabelecimento','$data_sem_barra')";

    $rst = mysqli_query($conn, $query);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<div class = 'alert alert-success'>Data cadastrada com sucesso</div>";
        header ("Location: index.php");
    }else{
        $_SESSION['msg'] = "<div class = 'alert alert-danger'>Não foi possivel cadastrar data</div>";
        header ("Location: index.php");
    }

    