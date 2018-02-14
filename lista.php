<?php

    include_once("conexao.php");

    $query = "Select * from horarios";

    $result = $conn->query($query);

    while ($data  = mysqli_fetch_assoc($result)) {
        echo $data['estabelecimento']."<br>";
        echo $data['data']."<br>";
        echo "<br>";
    }