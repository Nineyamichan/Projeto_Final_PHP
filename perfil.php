 
<?php
        $id = filter_input(INPUT_GET, "id");
        $nome= filter_input(INPUT_GET, "nome");
        $email = filter_input(INPUT_GET, "email");
        $senha = filter_input(INPUT_GET, "senha");
                
        ?>
<html>
    <head>
        <title>Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" 
              type="text/css" 
              href="perfil.css"/> 
        <link rel="shortcut icon" 
              href="https://www.iconninja.com/files/1005/127/662/star-wars-clone-helmet-storm-trooper-droid-icon.png" 
              type="image/x-icon"/> <!-- Favicon -->
    </head>
    <body>
    <center>
          <br><br>   
        <h3>  Bem vindo ao seu perfil </h3>
        <h3>  Se desejar alterar algo, pode alterar </h3>
        <br>
            <form method="post" 
                  action="perfil.php"> 
            </form>
      <table border="6" 
               style="border-color:#424242" > 
            <tr>
                <td>
                <h2> <label for="Nome"> Nome: </label> 
                <input id="Nome" 
                       name="Nome" 
                       required="required" 
                       type ="text" 
                       placeholder="Informe seu nome"
                       > </h2>
             <td>
                <a href="Alterar.php">
                <input  type="button" 
                        accept=""
                        value="Alterar">   
                </a>        
            </tr>
            <tr>
             <td><h2><label for="Senha"> Senha: </label>
                <input id="Senha" 
                       name="Senha" 
                       minlegth= "6" 
                       maxlength= "8" 
                       equired="required" 
                       type="password" 
                       placeholder="Informe sua senha"/> </h2>
              <td>
                <a href="Alterar.php">
                <input  type="button" 
                        accept=""
                        value="Alterar">   
                </a> 
            </tr>
            <tr>
                <td><h2><label for="Email"> E-mail: </label>
                 <input id="Email" 
                        name="Email" 
                        required="required" 
                        type ="email" 
                        placeholder="Informe seu e-mail"> </h2>
            <td>
                <a href="Alterar.php">
                <input  type="button" 
                        accept=""
                        value="Alterar">   
                </a> 
            </tr>
            <tr>
                <td><h2><label for="Data_Nascimento">  Data nascimento: </label>
                 <input id="Data_Nascimento" 
                        name="Data_Nascimento" 
                        required="required" 
                        type ="date" 
                        placeholder="Informe a data"> </h2>
            <td>     
                <a href="alterar.php">
                <input  type="button" 
                        accept=""
                        value="Alterar">   
                </a> 
            </tr>
            <tr>
                <td>
                    
                    <h2>
                        <label for="Lado"> Escolha o seu lado: </label><br>
                 <input type="radio" 
                        id="Negro" 
                        name="Lado" 
                        value="Negro"
                        >
                 
                 <label for="Negro"> Lado Negro</label><br>
                 
                 <input type="radio" 
                        id="Luz" 
                        name="Lado" 
                        value="Luz">
                 
                 <label for="Luz">Lado Luz</label> <br>
              </h2>
                    <td>
                <a href="excluir.php">
                <input  type="button" 
                        accept=""
                        value="Excluir">   
                </a> 
                        <br><br>
                <a href="alterar.php">
                <input  type="button" 
                        accept=""
                        value="Alterar"> 
                </a> 
                    </td>
                    
            <tr>    
            <td>
                <h1>  Deseja excluir a conta? </h1> <br> 
            <td>
                <a href="excluir.php">
                <input  type="button" 
                        accept=""
                        value="Excluir">   
        </a>
            </td> 
            </tr>
                </table> 
            </form>
    </body>
</html>
