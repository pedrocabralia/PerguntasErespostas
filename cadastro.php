

<!DOCTYPE html>
 <html lang="pt">
   <head>
     <meta charset="UTF-8">
     <title>Cadastro</title>
     <link rel="stylesheet" href="css/cadastro.css">
     <meta	name="viewport"	content="width=device-width">
     <link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:939px)">
    </head>
   <body>

     <figure id="logotipo-if">
      <img src="img/LogoMenor.png" alt="Logo IF" title="Logo If" >
     </figure>

     <div id="questoes">
       <form action="cadastro.php" method="post">
        <div id="campos">
         <label for="">Nome:</label>
         <input type="text" name="nome" required>
         <label>Email: </label>
         <input type="text" name="email" required>
         <label >Senha:</label>
         <input type="password" name="senha" required>
         <label >Digitar  Senha Novamente:</label>
         <input type="password" required>
        
        <input type="submit" value="cadastrar" id="cadastrar">
        </div>
      </form>
       

  <?php
    if(isset($_POST['nome']) && count($_POST)>=3 ) {

      /* Recebe os dados do formulário*/
      
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      try {
        
        $PDO = new PDO('mysql:host=localhost;dbname=quiz', 'pedro', '07050100');      
        $PDO->exec('set names utf8');
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    //importante
        
        /*Prepara o código sql*/
        $query = $PDO->prepare("INSERT INTO participante(nome, 
        email,senha) VALUES(:nome,:email,:senha)");
              
        //SUBSTITUI O VALOR NO CAMPO DA QUERY
        $query->bindValue(':nome', $_POST['nome']);
        $query->bindValue(':email', $email);
        $query->bindValue(':senha',  SHA1($senha));
        
        //EXECUTA A QUERY
      $result =    $query->execute();
      echo "resultado:".$result;

      } catch(Exception $e) {
        echo $e->getMessage();
      }
    }  
  ?>


    
   
      <div class="button">
       <input type="button" value="Sair" id="botoesCadastro"  onClick="javascript:window.location.href='paginaInicial.php'">
       <input type="button" value="Sobre" id="botoesCadastro" onClick="javascript:window.location.href='sobre.php'" >
      </div> 
       
    
       <?php include("rodape.php");
      
       ?>

  </body>
</html>
