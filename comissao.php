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
            <h3>Comissão organizadora</h3>

            <table class="table table-hover">

                <tr>
                    <td> Leandro Fabrício Campelo (Coordenador) </td>
                </tr>
                <tr>
                    <td> Amauri Dias de Carvalho</td>
                </tr>
                <tr>
                    <td> Anna Karina Fontes Gomes</td>
                </tr>
                <tr>
                    <td> Arnaldo de Carvalho Júnior</td>
                </tr>
                <tr>
                    <td> Elifas Levi da Silva</td>
                </tr>
                <tr>
                    <td> Fernanda Luiz Teixeira</td>
                </tr>
                <tr>
                    <td> Fernando Ribeiro dos Santos</td>
                </tr>
                <tr>
                    <td>Flavia Daylane Tavares de Luna</td>
                </tr>
                <tr>
                    <td> Jairo Augusto dos Santos</td>
                </tr>
                <tr>
                    <td> Katya Lais Ferreira Patella Couto</td>
                </tr>
                <tr>
                    <td> Marciel Silva Santos</td>
                </tr>
                <tr>
                    <td> Marcos Marinovic Doro</td>
                </tr>
                <tr>
                    <td> Rafael Stoppa Rocha</td>
                </tr>
                <tr>
                    <td> Sueli Maria Preda dos Santos Torres</td>
                </tr>
                <tr>
                    <td> Thiago Rodrigues Schulze</td>
                </tr>
                <tr>
                    <td> Wellington Santos Ramos</td>
                </tr>
                <tr>
                    <td>Danielli Deutschmann de Souza (Discente)</td>
                </tr>
                <tr>
                    <td>Lucas Nascimento Veiga (Discente)</td>
                </tr>
                <tr>
                    <td>Pedro Vitor Pimentel Silveira (Discente)</td>
                </tr>
                <tr>
                    <td>Roger Bernardo de Melo Lima (Discente)</td>
                </tr>
            </table>
            <br>

            <p>
                <a class="btn btn-danger" href="downloads/CBT.0092-2019 - Altera a CBT.0089-2019 - Comissão do 2 EPICI na SNCT.pdf"> <i class="fa fa-download" aria-hidden="true"></i> BAIXAR PORTARIA</a>
            </p>
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