<?php

 include_once("../classes/ManipulateData.php");

$id = $_POST['id'];
$tabela = $_POST['tabela'];
$valor = "'".utf8_decode($_POST['valor'])."'";
$campo = utf8_decode($_POST['campo']) ;
$campo_ref =  utf8_decode($_POST['campo_ref']) ;

$cadastra = new ManipulateData();
$cadastra->setTable("$tabela");
$cadastra->setFields("$campo=$valor");
$cadastra->setFieldId("$campo_ref=$id");
$cadastra->update_();
echo $cadastra->getStatus();

?>