<?php

include ("conexao.php");
 
$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Data_Nascimento = $_POST['Data_Nascimento'];
$Senha = $_POST['Senha'];
$Lado = $_POST['Lado'];


$sql= "INSERT INTO USUARIO (NOME, EMAIL, SENHA, DT_NASCIMENTO, LADO) VALUES ('$Nome', '$Email','$Senha','$Data_Nascimento','$Lado');";
$salvar = mysqli_query($conexao,$sql);

header('Location: login.html');
?>