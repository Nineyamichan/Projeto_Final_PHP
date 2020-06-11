<?php

    include('conexao.php');
    include('verificar_login.php');

    $Email = $_SESSION['Email'];
    $query="select * from USUARIO where EMAIL='$Email'";
    $resultado=mysqli_query($conexao,$query); 
    $Nome = mysqli_fetch_assoc($resultado);
    $ID = $Nome['ID'];    
    
        
    $queryExcluir="DELETE FROM USUARIO where ID = '$ID'";
    $excluir= mysqli_query($conexao,$queryExcluir);
    
    session_destroy();
    
    header('Location: login.html');

?>

