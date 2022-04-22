<?php

include('../../login-cadastro/conexao.php');



$_SESSION["inv_id"] =$_GET["country"];


$inv_id = $_SESSION["inv_id"];




echo '<script>console.log("';

 $result_usuarios = $pdo-> prepare( "SELECT * FROM com  WHERE  id = '$inv_id' ORDER BY id DESC LIMIT 1");
$result_usuarios-> execute();



$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        

        
 echo "/id=//".$row_usuario["id"]."//'";
 
          
 echo "/repository=//".$row_usuario["repo_name"]."//'";

         
 echo "/commit=//".$row_usuario["nmcommit"]."//'";
            
 echo "/usuario=//".$row_usuario["user_1"]."//'";

 echo "/data=//".$row_usuario["dia"]."//'";

            
 echo "/tag=//".$row_usuario["tag"]."//.";





        
 
};

  
echo '")</script>';

      
 

?>

<?php

include('../../login-cadastro/conexao.php');














 $result_usuarios = $pdo-> prepare( "SELECT * FROM com  WHERE  id = '$inv_id' ORDER BY id DESC LIMIT 1");
$result_usuarios-> execute();



$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        

        
 echo "/id=//".$row_usuario["id"]."//'";
 
          
 echo "/repository=//".$row_usuario["repo_name"]."//'";

         
 echo "/commit=//".$row_usuario["nmcommit"]."//'";
            
 echo "/usuario=//".$row_usuario["user_1"]."//'";

 echo "/data=//".$row_usuario["dia"]."//'";

            
 echo "/tag=//".$row_usuario["tag"]."//.";





        
 
};

  


      
 

?>
  
