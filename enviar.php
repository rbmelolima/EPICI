<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';


$nome = htmlspecialchars($_POST["nome"]);
$email = htmlspecialchars($_POST["email"]);
$assunto = htmlspecialchars($_POST["assunto"]);
$telefone = htmlspecialchars($_POST["telefone"]);
$mensagem = htmlspecialchars($_POST["mensagem"]);


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'a';                  // SMTP username
    $mail->Password   = 'a';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $nome);
    $mail->addAddress("a", "a");

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $assunto;
    $mail->Body    = 'E-mail enviado por ' . $nome . ' (' . $telefone .') <br> <p>' . $mensagem . '</p>';
    $mail->AltBody = 'E-mail enviado por ' . $nome . ' (' . $telefone .') \n' . $mensagem;

    $mail->send();
    echo 'Enviado';
} catch (Exception $e) {
    echo "Email não pode ser enviado. Erro: {$mail->ErrorInfo}";
}
?>
