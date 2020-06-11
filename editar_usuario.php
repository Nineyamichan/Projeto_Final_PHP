<?php

    include('conexao.php');
    include('verificar_login.php');

    $Email = $_SESSION['Email'];
    $query="select * from USUARIO where EMAIL='$Email'";
    $resultado=mysqli_query($conexao,$query); 
    $Nome = mysqli_fetch_assoc($resultado);
    $ID = $Nome['ID'];    
    $LADO = $Nome['LADO'];
 
        
        if ($LADO == "Luz"){
            $newLado = "Negro";
            
        }
        if ($LADO == "Negro"){
            $newLado = "Luz";
        }
        
    $queryMudar="UPDATE USUARIO SET LADO = '$newLado' WHERE ID = $ID";
    $editar = mysqli_query($conexao,$queryMudar);
    
    header('Location: principal.php');

?>