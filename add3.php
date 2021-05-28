<?php 
  //  ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);
    
   require_once('conn/conn.php'); 	
	
   // enquete do bbb


   $nome=utf8_decode(anti_injection($_POST['nome']));
   $email=anti_injection($_POST['email']);
   $cel=anti_injection($_POST['cel']);
   $cpf=utf8_decode(anti_injection($_POST['cpf']));
   $bbb=utf8_decode(anti_injection($_POST['bbb']));
   $numero=utf8_decode(anti_injection($_POST['votos']));




   /*

   $ADD=ADDBB($nome,$email,$cel,$cpf,$bbb,$numero);


   $message = "Cadastro realizado";
   echo "<script type='text/javascript'>alert('$message');</script>";



   echo "<script>
   history.back();
   </script>"; 

  exit;
   
*/
  

    $VER=VERBB($cel);

    $row= mysqli_fetch_array($VER);

    echo $row[0];
    

  
     
    if(is_null($row[0])== FALSE){  // UM CEL CPF PÓR VEZ
  
        
   $message = "É permitido um cadastro por Celular";
   echo "<script type='text/javascript'>alert('$message');</script>";


   echo "<script>
   history.back();
   </script>"; 


  exit;

    }else{

        $ADD=ADDBB($nome,$email,$cel,$cpf,$bbb,$numero);

        $message = "Cadastro realizado";
   echo "<script type='text/javascript'>alert('$message');</script>";

   
   

   echo "<script>  
   window.open('https://www.libshop.com.br/', '_blank');
   history.back();
   </script>"; 



  exit;

    }

  



   

   


   

	
	?>
	
    