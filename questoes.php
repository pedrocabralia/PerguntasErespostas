<?php 
      include_once "conexao.php";
      session_start();

  
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }
 
$logado = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="pt">
    <head>
     <meta charset="UTF-8">
     <title>Questoes</title>
     <link rel="stylesheet" href="css/questoes.css">
     <meta	name="viewport"	content="width=device-width">
    <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
    </head>
<body>
              
               <div id="questoesAresponder">
                  <?php   
                      $rs = $PDO->prepare('SELECT *  FROM pergunta ');
                      $rs ->execute();
                     echo"<form action = 'verificaCorreta.php' method = 'post' >";
                     $g =0;
                      while($row = $rs->fetch(PDO::FETCH_OBJ)){
                       $g++;
                       echo "   <p>". $g."º)". $row ->pergunta."</p>";
                       echo "  <div id ='alternativa'>a) <input type=radio name= ".$row -> idpergunta  ." id=radio value=1> <label>".$row -> alternativaA. "</label> </div> ";
                       echo "  <div id ='alternativa'>b) <input type=radio name= ".$row -> idpergunta ." id=radio value=2> <label>".$row -> alternativaB. "</label> </div> ";
                       echo "  <div id ='alternativa'>c) <input type=radio name= ".$row -> idpergunta ." id=radio value=3> <label>".$row -> alternativaC. "</label> </div> ";
                      
                      }
                        
                    ?> 
                     <div id="botoes">
                       <input type=submit value="responder" id="proxima">
                      </div>
   
                      </form>
                     
                 </div>
   
           <div id="botoes">
      <input type="button" value="SAIR" id="botoesCadastro"onClick="javascript:window.location.href='sair.php'">
      <input type="button" value="SOBRE" id="botoesCadastro"onClick="javascript:window.location.href='sobre.php'">          </div> 
    
    


</body>
</html>