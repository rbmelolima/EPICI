<?php
$configs = include('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <title>EPICI</title>

</head>

<body id="body">

    <!--==========================
        Barra Superior
    ============================-->
    <?php
    echo $configs["topbar"];
    ?>

    <!--==========================
        Cabeçalho
    ============================-->
    <?php echo $configs["header"] ?>

    <!--==========================
        Conteúdo
    ============================-->
    <main id="main">
        <section class="content pd pt-100">

            <h3>Entre em contato</h3>
            <form class="form" method="post" action="">

                <div class="form-group">
                    <label for="email">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <input type="text" class="form-control" id="mensagem" name="mensagem">
                </div>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                <button type="reset" class="btn btn-alert">Limpar</button>
            </form>
        </section>
    </main>


    <?php
    if (isset($_POST['enviar'])) {

        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];


        $arquivo = "
        <style type='text/css'>
        body {
        margin:0px;
        font-family:Verdane;
        font-size:12px;
            color: #666666;
        }
        a{
            color: #666666;
            text-decoration: none;
        }
        a:hover {
            color: #FF0000;
            text-decoration: none;
        }
        </style>
         <html>
          <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
                <tr>
                 <td width='500'>Nome:$nome</td>
                 </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
                  </tr>
                  <tr>
                  <td width='320'>Telefone:<b>$telefone</b></td>
                </tr>                 
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
              </td>
             </tr>  
             <tr>
            
          </tr>
        </table>
    </html>
  ";

        // emails para quem será enviado o formulário
        $emailenviar = "rogerbernardo007@gmail.com";
        $destino = $emailenviar;
        $assunto = "Contato pelo Site";

        // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: $nome <$email>';
        //$headers .= "Bcc: $EmailPadrao\r\n";

        $enviaremail = mail($destino, $assunto, $arquivo, $headers);
        
        if ($enviaremail) {
            $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
            echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
        } else {
            $mgm = "ERRO AO ENVIAR E-MAIL!";
            echo "";
        }
    }
    ?>

    <!--==========================
        Rodapé
    ============================-->

    <?php echo $configs["footer"]; ?>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>