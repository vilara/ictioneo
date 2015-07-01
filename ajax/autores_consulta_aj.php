<?php

    $pdo = new PDO("mysql:host=localhost; dbname=ictioneo; charset=utf8;", "root", "", $opcoes);
    $dados = $pdo->prepare("SELECT DISTINCT * FROM autor");
    $dados->execute();
    echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));

?>
