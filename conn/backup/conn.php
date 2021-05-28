<?php 



$keyacesso="davidjunior2006";

global $MySQL; //Torna a variável acessível em todas as funções

function MyCONN() { //faz a conexão com o servidor 
    $host = "177.105.192.66";
 $user = "usrormacesso";
 $pass = "ormacesso2k12";
 $db = "videowonza";

   $conexao = mysqli_connect($host, $user, $pass, $db) ;
//seleciona a Base de Dados.
    return $conexao;
    };





function anti_injection($sql, $formUse = true)   
{   
// remove palavras que contenham sintaxe sql   
$sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/i","",$sql);   
$sql = trim($sql);//limpa espa�os vazio   
$sql = strip_tags($sql);//tira tags html e php   
if(!$formUse || !get_magic_quotes_gpc())   
$sql = addslashes($sql);//Adiciona barras invertidas a uma string   
return $sql;   
} 


function data($data){
    return date("d/m/Y", strtotime($data));
}




// cadastro lib shop (1)

function ADD($nome,$cel,$email,$cat,$empresa) {
$day=date('Y-m-d');
$conexao = MyCONN(); 
  $query =" INSERT INTO form_lange(id_cat,nome,cel,email,data,nivel,empresa)VALUES('$cat','$nome','$cel','$email','$day','1','$empresa') ";
 $insert = mysqli_query($conexao, $query);
}

// cadastro de entregadores (2)

function ADDE($nome,$cel,$email,$tipo,$cpf) {
    $day=date('Y-m-d');
    $conexao = MyCONN(); 
      $query =" INSERT INTO form_lange(nome,cel,email,data,nivel,cpf,tipo)VALUES('$nome','$cel','$email','$day','2','$cpf','$tipo') ";
     $insert = mysqli_query($conexao, $query);
    }
    
// lista de usuarios cadastrados

function LISTA() {
    $conexao = MyCONN();  
    
      $query_busca = "select * from form_lange  ORDER BY id desc ";
 
       $listas = mysqli_query($conexao,$query_busca) or die ('Error');
       return $listas;   
   
   }

// inscrição expedição liberal

function ADDF($nome,$nasc,$inst,$pai,$mae,$end,$cel,$email,$lugar) {
    $day=date('Y-m-d');
    $time=date("H:i:s"); 
    $conexao = MyCONN(); 
      $query =" INSERT INTO form_exped_lib(nome,nasc,inst,pai,mae,end,cel,email,lugar,data,time)VALUES('$nome','$nasc','$inst','$pai','$mae','$end','$cel','$email','$lugar','$day','$time') ";
     $insert = mysqli_query($conexao, $query);
    }


// verifica se ja foi votado

function VERBB($cel) {
    
    $conexao = MyCONN(); 
      $query =" select * from enquete where cel like '%$cel%' and tipo = '2' ";
     $listas = mysqli_query($conexao, $query);
     return $listas;  

    }


// inscrição para enquete bbb

function ADDBB($nome,$email,$cel,$cpf,$bbb,$numero) {
    $day=date('Y-m-d');
    $time=date("H:i:s");
    $conexao = MyCONN(); 
      $query =" INSERT INTO enquete(nome,email,cel,cpf,bbb,numero,tipo,data,hora)VALUES('$nome','$email','$cel','$cpf','$bbb','$numero','2','$day','$time') ";
     $insert = mysqli_query($conexao, $query);
    }




?>