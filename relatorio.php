<?

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
    
   require_once('conn/conn.php'); 


   $lista=RELATORIO(); 
  
   $row= mysqli_fetch_array($lista);


  echo" Relatorio de Inscritos <p><p>";

   do {
  
    echo "<b> Região  ".$row['1']."    (".$row['0'].") </b><p>" ;


} while ($row = mysqli_fetch_array($lista)); 

?>