<?php
        include('conexao.php'); //conexao do banco
        include('verificar_login.php'); //verificar se o usuario está logado

        $Email = $_SESSION['Email'];   //vefificar quem está logado na sessao
        $query = "select * from USUARIO where EMAIL='$Email'";
        $resultado = mysqli_query($conexao,$query); 
        $Nome = mysqli_fetch_assoc($resultado);
    
        $queryLNegro = "select count(ID) as totalN from USUARIO where LADO ='Negro'"; //quantidade de
        $resultadoLNegro = mysqli_query($conexao, $queryLNegro);                // pessoas que escolheu  
        $valor1 = mysqli_fetch_assoc($resultadoLNegro);                       // o lado bom da força
        $num_linhasN = $valor1['totalN'];
        
        $queryLLuz ="select count(ID) as totalL from USUARIO where LADO ='Luz'"; //quantidade de pessoas                                                                             
        $resultadoLLuz = mysqli_query($conexao, $queryLLuz);                    // que escolheu o lado
        $valor2 = mysqli_fetch_assoc($resultadoLLuz);                           // ruim da força
        $num_linhasL = $valor2['totalL'];
        
        $queryParticipantes = "select * from Usuario order by ID desc";        //busca os dados 
        $resultadoP = mysqli_query($conexao, $queryParticipantes);         // dos usuarios participantes
        $guerreiros = mysqli_num_rows($resultadoP);                     
        
?>

<html>
    <title>Opa! Bao?!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="principal.css"/> 
        <link rel="shortcut icon" 
              href="https://www.iconninja.com/files/1005/127/662/star-wars-clone-helmet-storm-trooper-droid-icon.png" 
              type="image/x-icon"/> <!-- Favicon -->
        <script type="text/javascript" src="https://www.scmplayer.net/script.js" 
               data-config="
        {'skin':'skins/black/skin.css',
        'volume':9,'autoplay':true,
        'shuffle':false,'repeat':1,
        'placement':'top',
        'showplaylist':false,
        'playlist':[{'title':'Musica tema SW',
        'url':'https://www.youtube.com/watch?v=M4YS0R84aWY'}]}" > 
        </script>
        </head>
        
    <body>  
        <br>
         <a href="usuario.php">    <!-- Botão para voltar a pagina usuario -->
         <input type="onclick" 
                value="Escolhas">
        </a>
        
        <a href="logout.php">
        <input  type="button" 
                value="Sair">
        </a>
        <br><br>
       
         <h3>  Bem vindo 
             <?php 
             echo $Nome["NOME"]; 
             ?> 
             ao lado 
             <?php 
             echo $Nome["LADO"];
             ?> da força! 
         </h3> 
    <center>
        <img  src="https://www.pngarts.com/files/3/TIE-Fighter-Star-Wars-PNG-Image-with-Transparent-Background.png" 
              alt="some text" 
              width=200 
              height=200> 
        
         <table border="2" >
             <td bgcolor="#8A0808">
                 Este é o lado negro da força! 
             </td>
             <td bgcolor="#08088A">
                 Este lado da luz da força! 
             </td>
             <tr >
             <td>
        <center> Quantidade de Siths: 
            <?php echo $num_linhasN ; // conta a quantidade de pessoas       
                                      // escolheram o lado que presta
            ?>                                                     
        </center>  
              <td>
        <center> Quantidade de Jedis: 
            <?php echo $num_linhasL // conta a quantidade de pessoas
                                    // que escolheram o lado que nao presta
            ;?> 
        </center>  
              </td>
              </tr>
             
             <td rowspan="2" 
                 colspan="2" 
                 BACKGROUND= "https://images3.alphacoders.com/600/thumb-1920-600401.jpg" </td>
             
        <center> 
                 Participantes: 
             <?php
                     while ($linha = mysqli_fetch_array($resultadoP)){ //laço de repetição
                     echo $Guerreiro = $linha['NOME'];                    
             ?>
             <br>
              <?php } 
              ?>
             </center>
             <tr>  
             </tr>
             
             <td rowspan="2" 
                 colspan="2">
             <center> 
             <?php 
             
             if ($num_linhasN > $num_linhasL){
                 echo 'O Lado Negro esta vencendo essa Guerra!!!';
             }
             if ($num_linhasN == $num_linhasL){
                 echo 'Ainda não tem vencedores...';
             }
             if (($num_linhasN < $num_linhasL)) {
                 echo 'Os Jedis estão vencendo essa Guerra!!!';
             }
             
             ?> 
             </center>
             <tr>
             </tr>
         </table>
        </center>
    </body>
</html>
