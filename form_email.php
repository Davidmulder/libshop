<?



//CAMPOS TESTE


if(isset($_POST['nome'])){
    $nome_remetente = $_POST['nome'];
    $nome=$_POST['nome'];
}
if(isset($_POST['destino'])){
    $email_destino = $_POST['destino'];
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['instagram'])){
    $instagram=$_POST['instagram'];
}
if(isset($_POST['youtube'])){
    $youtube=$_POST['youtube'];
}





require("./formEmail/PHPMailer/PHPMailerAutoload.php");

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



// envio por email

$conteudo_email="<div  style=\"background-color:#dceaff; font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight: bold; padding-top: 20px; padding-left:5px;\">";
$conteudo_email.="<p>Dados da inscrição<br />";
$conteudo_email.="  <br /> ";
$conteudo_email.=" <p>$nome</p> ";
$conteudo_email.=" <p>$instagram</p> ";
$conteudo_email.=" <p>$email<br /> ";
$conteudo_email.=" <p>$youtube<br /></p> ";
$conteudo_email.=" <br><br> </div> ";



$mail->IsHTML(true);
$mail->Body = $conteudo_email;

echo !extension_loaded('openssl') ? "Not Available" : "Available";

if ($mail->send()) {
    echo "200";
} else {
    echo "Falha ao enviar o email: " . $mail->ErrorInfo;
}











?>