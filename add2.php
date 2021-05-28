<?php 
    ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
    
   require_once('conn/conn.php'); 	
	
   // inscrição para expedição liberal 


   $nome=utf8_decode(anti_injection($_POST['nome']));
   $email=anti_injection($_POST['email']);
   $cel=anti_injection($_POST['cel']);
   $inst=utf8_decode(anti_injection($_POST['inst']));
   $pai=utf8_decode(anti_injection($_POST['pai']));
   $mae=utf8_decode(anti_injection($_POST['mae']));
   $end=utf8_decode(anti_injection($_POST['end'])); 
   $lugar=utf8_decode(anti_injection($_POST['lugar']));
   $nasc=anti_injection($_POST['nasc']);

   

    $ADD=ADDF($nome,$nasc,$inst,$pai,$mae,$end,$cel,$email,$lugar);

    //exit;


   $message = "Cadastro realizado";
   echo "<script type='text/javascript'>alert('$message');</script>";

   echo "<script>
   history.back();
   </script>"; 


  exit;
	
	?>
	
    