



<!DOCTYPE html>
 <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastroPergunta.css">
    <meta	name="viewport"	content="width=device-width">
    <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
  </head>
  <body>

   

   <div id="Cadastroquestoes">
    <form action="cadastroPergunta.php" method="post">
      <div id="camposQuestoes">
        <label id="peguntaPrin">Pergunta:</label>
          <input type="text" name="pergunta" id="pergunta">
         
           <label for="">Alternativas:</label>
          <div> <label id ="a">a):</label>
           <input type="text" name="alternativaA" id="pergunta"  >
           </div>
           <div>   <label id ="a">b):</label>
           <input type="text" name="alternativaB" id="pergunta"  >
           </div>
            <div>
           <label  id ="a">c):</label>
           <input type="text" name="alternativaC" id="pergunta">
           </div>
          
         <div> <label for="">Alternativa Correta:</label></div>

          <div><label for="">a) </label>
          <input type="radio" name="alternativaCorreta" id="radio"   value="1">
          </div>
          <div><label for="">b) </label>
          <input type="radio" name="alternativaCorreta" id="radio"  value="2">
          </div>
          <div><label for="">c) </label>
          <input type="radio" name="alternativaCorreta" id="radio" value="3">
          </div>
          </div>
        <input type="submit" value="cadastrar" id="cadastrar">
       
    </form>




   
 <div class="button">
  <input type="button" value="Sair" id="botoesCadastro"  onClick="javascript:window.location.href='index.php'">
  <input type="button" value="Sobre" id="botoesCadastro" onClick="javascript:window.location.href='sobre.php'" >
 </div> 
</body>
</html>

<?php
    if(isset($_POST['pergunta'])){

      try
         {
             $PDO = new PDO('mysql:host=localhost;dbname=quiz', 'pedro', '07050100');
         }
      catch(PDOException $e)
         {
             echo 'Erro ao conectar com o MySQL: ' .$e->getMessage();
         }
      $PDO->exec('set names utf8');
      $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
      try 
        {  
            
              $cmd = $PDO->prepare("INSERT INTO pergunta(pergunta, alternativaA, 
              alternativaB,alternativaC,alternativaCorreta)VALUES(:pergunta, :alternativaA, 
              :alternativaB, :alternativaC,:alternativaCorreta)");
             $cmd->bindValue(':pergunta', $_POST['pergunta']);
             $cmd->bindValue(':alternativaA', $_POST['alternativaA']);
             $cmd->bindValue(':alternativaB',($_POST['alternativaB']));
             $cmd->bindValue(':alternativaC', $_POST['alternativaC']);
             $cmd->bindValue(':alternativaCorreta', $_POST['alternativaCorreta']);

             $cmd->execute();
         
          
          
         } 
      
      catch(Exception $e) 
         {
             echo $e->getMessage();
         }
       
        }
?>
