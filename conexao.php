<?php
    
     try
           {  
             $PDO = new PDO('mysql:host=localhost;dbname=quiz', 'root', '07050100');
             $PDO->exec('set names utf8');
           }
    catch(PDOException $e)
                          {      
                             echo 'Erro ao conectar com o MySQL: ' .$e->getMessage();
                          }


                  ?>     
