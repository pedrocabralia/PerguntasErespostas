<?php
session_start();
session_id('d');

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta	name="viewport"	content="width=device-width">
    <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
    <link rel="stylesheet" href="css/cadastro.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerador</title>
</head>
<body>
    
<figure>
   <img src="img/logoIfquiz" alt="Logo IF" title="Logo If" >
  </figure>
    
   <div id="questoes">    
    <form action="questoesAresponder.php" method="get">

        <label id="numeroQuestoes">Número de questões a responder:</label>
        <input type="number" name="numeroQuestoes" id="numero">
        <input type="submit" value="Gerar Perguntas" id="botoesCadastro">
    
       
         </form>       
  </div>     
  <?php

     
    for($i=1 ; $i <= $_GET['numeroQuestoes'];$i++){
      
         $_SESSION[$i] = rand(1,$_GET['numeroQuestoes']);
        }
       var_dump($_SESSION);

  ?>


  <div id="botoes">
          
          <input type="button" value="Sair" id="botoesCadastro" onClick="javascript:window.location.href='index.php'">
          <input type="button" value="Sobre o site" id="botoesCadastro"onClick="javascript:window.location.href='sobre.php'">
     </div> 
  </body>

</html>