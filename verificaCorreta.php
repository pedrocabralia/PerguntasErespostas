
<?php
      session_start();

      
  
      if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
      {
          unset($_SESSION['login']);
          unset($_SESSION['senha']);
          header('location:index.php');
          }
       
      $logado = $_SESSION['email'];
      include_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/questoes.css">
    <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<figure>
   <img src="img/logoIfquiz" alt="Logo IF" title="Logo If" >
  </figure>
<div id="questoesAresponder">

<?php
    
       $rs = $PDO->prepare('SELECT alternativaCorreta FROM pergunta ');
       $rs ->execute();
       $row = [];
       while($r = $rs->fetch(PDO::FETCH_OBJ)) {
                    $row[] = $r;
          }
      
          $respostaCorreta = 0;
    
    
         for($i =0; $i < count($row); $i++){
          
           $j = $i+1;
           
         if($_POST["$j"] == $row[$i] ->alternativaCorreta){

                        $respostaCorreta ++;
                   }
                
                }
 
                echo "<p> Parabéns!!<br> Você acertou: <br>". $respostaCorreta." </p>";
 
 ?>

 </div>
 <div id="botoes">
      <input type="button" value="SAIR" id="entrarSobre"onClick="javascript:window.location.href='sair.php'">
      <input type="button" value="SOBRE" id="entrarSobre"onClick="javascript:window.location.href='sobre.php'">          </div> 
</body>
</html>

