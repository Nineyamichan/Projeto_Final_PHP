<?php
session_start();
include("conexao.php");

if(empty($_POST['Email']) || empty($_POST['Senha'])){
    header('Location: login.html');
    exit();
}

$Email = mysqli_real_escape_string($conexao,$_POST['Email']);
$Senha = mysqli_real_escape_string($conexao,$_POST['Senha']);

$query = "select EMAIL from USUARIO where EMAIL = '{$Email}' and SENHA = '{$Senha}'";

$result = mysqli_query($conexao, $query);
$row= mysqli_num_rows($result);

if($row == 1) {
   $_SESSION['Email'] = $Email;
   header('Location: principal.html');
    exit();      
   
} else {
   
    $_SESSION['nao_autenticado']=TRUE;
    header('Location: login.html');
    exit();    
    }
?>