<?php

    include('conexao.php');
    include('verificar_login.php');

    $Email = $_SESSION['Email'];
    $query="select * from USUARIO where EMAIL='$Email'";
    $resultado=mysqli_query($conexao,$query); 
    $Nome = mysqli_fetch_assoc($resultado);
   
?>
<html>
    <head>
        <title> Alterar </title>
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width, 
              initial-scale=1.0">
        <link rel="stylesheet" 
              type="text/css" 
              href="usuario.css"/> 
        <link rel="shortcut icon" 
              href="https://pngimage.net/wp-content/uploads/2018/05/espada-laser-star-wars-png.ico" 
              type="image/x-icon"/> <!-- Favicon -->
    </head>
    
    <body>
   
         <a href="principal.php">    <!-- Botão para voltar a pagina principal -->
         <input type="onclick" 
                value="Voltar">
        </a>
        
         <a href="logout.php">    <!-- Botão para sair -->
         <input  type="submit"  
                value="Sair">
        </a>

        <br>
         <h3>  Opções para alterar </h3>
    <center>
        
        <img src="https://66.media.tumblr.com/cbdd9152f22cba030a75bf6821a1fb3a/tumblr_mjz1q8ccGw1rfjowdo1_500.gif" 
            width=100 
            height=100> 
        <img src="https://66.media.tumblr.com/cbdd9152f22cba030a75bf6821a1fb3a/tumblr_mjz1q8ccGw1rfjowdo1_500.gif" 
            width=100 
            height=100> 
        <img src="https://66.media.tumblr.com/cbdd9152f22cba030a75bf6821a1fb3a/tumblr_mjz1q8ccGw1rfjowdo1_500.gif" 
            width=100 
            height=100> 
        <img src="https://66.media.tumblr.com/cbdd9152f22cba030a75bf6821a1fb3a/tumblr_mjz1q8ccGw1rfjowdo1_500.gif" 
            width=100 
            height=100>  
        <!-- Quatro gif de personagem do SW pulando -->
    </center> 
     
    <center>
        <table border="5" >
            <tr>
            <td>
        <div>
                <h1>Nome do Usuario: 
                    <?php echo $Nome["NOME"];  ?> 
                    <br> 
                </h1> 
            </td>
            </tr>
            
             <tr>
             <td>
                <h1> Data de nascimento: 
                    <?php echo $Nome["DT_NASCIMENTO"];  ?>
                    <br> 
                </h1>
            </td>
            </tr>
            
            <tr>
            <td>
                <h1> O seu tipo de força: 
                    <?php echo $Nome["LADO"]; ?> 
                    <br> 
                </h1>   
            </td>
            </tr>
        </div>
        
            <tr>
            <td>
                <a href="editar_usuario.php">
                    <input 
                    accept=""
                    type="button" 
                    value="Trocar de lado">
                </a>
              
                <a href="excluir_usuario.php">
                    <input 
                    accept="" 
                    type="button" 
                    value="Excluir cadastro">
                </a>
            
            </td>
            </tr>
        </table>
    </center>
  </body>
</html>