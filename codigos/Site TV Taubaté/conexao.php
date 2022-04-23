<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "faculdade";

//Criar a conexão



$conn = mysqli_connect($servidor, $usuario, $senha);
$banco = mysqli_select_db($conn, $dbname);
mysqli_set_charset($conn,'utf8');

var_dump($conn); die;
?>