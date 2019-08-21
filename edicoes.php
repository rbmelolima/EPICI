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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

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
    <?php echo $configs["header"]?>

    <!--==========================
        Conteúdo
    ============================-->

    <!--==========================
        Conteúdo
    ============================-->
    <main id="main">
        <section class="content pd pt-100">
            <h3>Programação</h3>
            <a class="btn btn-danger" href="downloads/programacao-epici1.pdf"> <i class="fa fa-download" aria-hidden="true"></i> PROGRAMAÇÃO 1º EPICI</a>
        </section>

        <section class="content pd">
            <h3>Galeria de Fotos - 1º EPICI</h3>
            <div class="linha">
                <div class="column">
                    <a href="img/epici1/foto1.jpg"><img class="galimg" src="img/epici1/foto1.jpg"></a>
                    <a href="img/epici1/foto2.jpg"><img class="galimg" src="img/epici1/foto2.jpg"></a>
                    <a href="img/epici1/foto3.jpg"><img class="galimg" src="img/epici1/foto3.jpg"></a>
                </div>
                <div class="column">
                    <a href="img/epici1/foto4.jpg"><img class="galimg" src="img/epici1/foto4.jpg"></a>
                    <a href="img/epici1/foto5.jpg"><img class="galimg" src="img/epici1/foto5.jpg"></a>
                    <a href="img/epici1/foto6.jpg"><img class="galimg" src="img/epici1/foto6.jpg"></a>
                </div>
                <div class="column">
                    <a href="img/epici1/foto7.jpg"><img class="galimg" src="img/epici1/foto7.jpg"></a>
                    <a href="img/epici1/foto8.jpg"><img class="galimg" src="img/epici1/foto8.jpg"></a>
                    <a href="img/epici1/foto9.jpg"><img class="galimg" src="img/epici1/foto9.jpg"></a>
                </div>
            </div>
        </section>

    </main>

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