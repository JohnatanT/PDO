 <?php
    function getConection(){
         $dsn = "mysql:host=localhost;dbname=mercadophp;charset=utf8";
         $username="root";
         $password="123456";
     }  
    try{
         $pdo = new PDO($dsn, $username, $password);
         return $pdo;
     }   
    catch (PDOException $ex) {
         echo "ERRO: ".$ex->getMessage();
     }
 
      

