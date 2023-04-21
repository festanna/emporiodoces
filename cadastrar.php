<?php
include("config.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];


$sql = "INSERT INTO contatos (nome, email, telefone) VALUES('{$nome}','{$email}','{$celular}')";


$res = $conn->query($sql);
if ($res == true) {
   print "<script>alert('Cadastrado com sucesso');</script>";
   print "<script>location.href='index.php';</script>";
} else {
    print "<script>alert('Não foi possivel cadastrar');</script>";
    print "<script>location.href='index.php';</script>";
}
?>