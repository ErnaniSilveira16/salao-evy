<?php
include 'conexao.php';
$Telefone = $_POST['Telefone'];
$Turno = $_POST['Turno'];
$Mensagem = $_POST['Mensagem'];
 
$Nome = $_POST['Nome'];


$sql = "INSERT INTO mensagem (nome,telefone,turno,Mensagem) VALUES ('$Nome','$Telefone','$Turno','$Mensagem')";

$resultado = mysqli_query($conn,$sql);




