<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$instagram = $_POST['instagram'];
$youtube = $_POST['youtube'];
$nome_remetente = ($_POST["nome_remetente"]);
$email_destino = $_POST["email_destino"];

require("./PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer;
$mail->isSMTP();

//Configuracoes do servidor de email
$mail->Host = "mail.grupoliberal.com";
$mail->Port = "587";
// $mail->SMTPSecure = "tls";
$mail->SMTPAutoTLS = false;
$mail->SMTPAuth = "true";
$mail->Username = "aviso@grupoliberal.com";
$mail->Password = "Aviso#102030";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// $mail->Host = "smtp.gmail.com";
// $mail->Port = "587";
// $mail->SMTPAuth = "true";
// $mail->Username = "";
// $mail->Password = "";

//Configuracao da mensagem
$mail->setFrom($mail->Username, $nome_remetente); //Remetente
$mail->addAddress($email_destino); //Destinatário
$mail->Subject = utf8_decode("Inscrição Creators"); //Assunto do email

$conteudo_email = "
    <h1>Nova Inscrição para Creators</h1><br>
    <b>Nome</b>: $nome<br>
    <b>Email</b>: $email<br>
    <b>Instagram</b>: $instagram<br>
    <b>Youtube</b>: $youtube<br>
";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

echo !extension_loaded('openssl') ? "Not Available" : "Available";

if ($mail->send()) {
    echo "200";
} else {
    echo "Falha ao enviar o email: " . $mail->ErrorInfo;
}
