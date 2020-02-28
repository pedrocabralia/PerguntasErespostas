<?php
    session_start();

    $login = $_POST['email'];
    $senha = $_POST['senha'];
?>


<!DOCTYPE html>
 <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/index.css">
    <meta	name="viewport"	content="width=device-width">
    <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
 </head>
 <body>


<div class="login">

  <figure>
   <img src="img/logoIfquiz" alt="Logo IF" title="Logo If" >
  </figure>
  <form action="index.php" method="post">
     <div id="campos">
      <label>Email:</label>
      <input type="text" name="email" class="campoTexto"> 
      <label >Senha:</label>
      <input type="password" name="senha"  class="campoTexto">
     </div>
     <div id="botoes">
          <input type="submit" value="Entrar" id="butonn">
          <input type="button" value="Novo Usuário" id="butonn" onClick="javascript:window.location.href='cadastro.php'">
          <input type="button" value="Sobre o site" id="butonn"onClick="javascript:window.location.href='sobre.php'">
     </div> 
 </form>


        <footer class="rodape">
          <ul class="social">
             <li><a	href="https://www.facebook.com/IFTOcampusdianopolis/">Facebook</a></li>
             <li><a	href="https://twitter.com/IFTO">Twitter</a></li>
             <li><a	href="http://plus.google.com/iftoDianopolis">Google+</a></li>
          </ul>
         </footer>

      
</div>
<?php
if(isset($_POST['email']) && isset($_POST['senha'])){

    try
        {
          $PDO = new PDO('mysql:host=localhost;dbname=quiz', 'pedro', '07050100');
          $PDO->exec('set names utf8');
          $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
     $cmd = $PDO->prepare("SELECT idparticipante, nome FROM participante WHERE email = :email AND senha = :senha");
     $cmd->bindValue(':email', $_POST['email']);
     $cmd->bindValue(':senha',SHA1($_POST['senha']));
      $cmd->execute();
     $users = $cmd->fetchAll();
      
 
if (count($users) <= 0)
{  
  echo "<h1>Email ou senha incorretos!!!<h1>";
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
    exit;
}
 

else{

      
      $_SESSION['email'] = $login;
      $_SESSION['senha'] = $senha;
      header("location:questoes.php");


}

         }
    catch(PDOException $e)
      {
        echo 'Erro ao conectar com o MySQL: ' .$e->getMessage();
      }
    }      
?>
</body>
</html>
