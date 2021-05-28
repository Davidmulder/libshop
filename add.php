<?php 
    ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
    
   require_once('conn/conn.php'); 	
	
    
    $nome=anti_injection($_POST['nome']);
    $email=anti_injection($_POST['email']);
    $cel=anti_injection($_POST['cel']);
    
    
    $cod=anti_injection($_POST['cod']);

    if($cod=='1'){
      $cat=anti_injection($_POST['categoria']);
      $empresa=anti_injection($_POST['empresa']);

      $ADD=ADD($nome,$cel,$email,$cat,$empresa);

    }elseif($cod=='2') { 
      $cpf=anti_injection($_POST['cpf']);
      $tipo=anti_injection($_POST['tipo']);

      $ADD=ADDE($nome,$cel,$email,$tipo,$cpf); 

    }

    
    

    
   $message = "Cadastro realizado";
   echo "<script type='text/javascript'>alert('$message');</script>";

   echo "<script>
   history.back();
   </script>"; 


  exit;
	
	?>
	
    