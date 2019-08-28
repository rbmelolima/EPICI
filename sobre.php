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
            <h3>O IFSP</h3>
            <div class="row">
                <div class="col-sm">
                    <img class="img-fluid" src="img/campus.jpg" />
                </div>

                <div class="col-sm">
                    <p>
                        O Instituto Federal de Educação, Ciência e Tecnologia de São
                        Paulo – IFSP – é uma autarquia federal de ensino. Fundado em
                        1909, é reconhecido, pela sociedade paulista, por sua excelência no ensino público gratuito de qualidade. Já teve os nomes
                        Escola Técnica Federal de São Paulo e Centro Federal de Educação Tecnológica de São Paulo – CEFET/SP. Com a transformação
                        em Instituto, em dezembro de 2008, passou a ter autonomia,
                        equiparando-se às universidades. O Instituto Federal de São
                        Paulo está organizado em estrutura multicampi e em polos
                        de educação a distância distribuídos pelo estado de São Paulo.
                    </p>

                </div>

            </div>
        </section>
        <section class="content pd pt-100">
            <h3>O EPICI</h3>
            <p>
                O Encontro de Pesquisadores de Iniciação Científica (EPICI) é um evento que reúne pesquisadores e alunos de iniciação científica do Câmpus Cubatão.
                O evento é organizado pelo Comitê de Pesquisa (COMPESQ) no âmbito da Semana Nacional de Ciência e Tecnologia (SNCT), com apoio do CNPq, visando aproximar os pesquisadores do Câmpus, estimulando e difundindo o conhecimento científico aos participantes da SNCT.
                O evento, em sua segunda realização, tem como tema central “Bioeconomia: Diversidade e Riqueza para o Desenvolvimento Sustentável”. <br>
                São objetivos do EPICI:
                <ul>
                    <li>Incentivar a apresentação dos trabalhos de iniciação científica em desenvolvimento no Câmpus Cubatão;</li>
                    <li>Promover a participação de pesquisadores do Câmpus Cubatão; </li>
                    <li>Divulgar o conhecimento científico para a população da região. </li>
                </ul>
            </p>
        </section>

        <section class="content pd">
            <h3>Horários</h3>
            <p>
                O 2º EPICI ocorrerá durante a Semana Nacional de Ciência e Tecnologia(SNCT), concomitantemente com outros eventos:
                <ol type="a">
                    <li><b>FECITEC</b> - Feira de Ciências e Tecnologia;</li>
                    <li><b>TECHWEEK</b> – Semana de Tecnologia;</li>
                    <li><b>SEARCM</b> - Semana de Arte, Cultura, Corpo e Movimento;</li>
                    <li><b>SENLB</b> - Semana Nacional do Livro e da Biblioteca;</li>
                    <li><b>SEAUT</b> - Semana de Automação;</li>
                    <li><b>II Semana de Letras</b>;</li>
                    <li><b>VI WMO</b> – Workshop de Micro-ondas.</li>
                </ol>
            </p>
            <br>
            <div class="clearfix position-relative">
                <div class="float-left position-relative">
                    <iframe class="img-fluid mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3646.91717788255!2d-46.4131124!3d-23.9279867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1bb29bde4aeb%3A0x8b65b60dcd73ad02!2sIFSP+-+Campus+Cubat%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1566288805523!5m2!1spt-BR!2sbr" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div>
                    <p><span class="font-weight-bold">Data de início: </span> 24/10/2019 às <i>14:00</i></p>
                    <p><span class="font-weight-bold">Data de término: </span> 24/10/2019 às <i>22:00</i></p>
                    <p><span class="font-weight-bold">Endereço: </span> R. Maria Cristina, 50 - Jardim Casqueiro, Cubatão - SP,
                        11533-160</p>
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