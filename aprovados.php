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
            <h3> Trabalhos Aprovados </h3>
            <ul id="aprovados">
                <li>A representação do indígena em livros didáticos de Língua Portuguesa e Literatura.</li>
                <li>Análise da produção e eficiência energética na etapa de concentração de nitrato de amônio. </li>
                <li>Aperfeiçoamento de um conjunto de restrições para garantir consecutividade de aulas em modelos de otimização inteira para confecção de grades horárias.</li>
                <li>Cartilha de conscientização sobre o transtorno de déficit de atenção e hiperatividade infantil para seus educadores e responsáveis. </li>
                <li>Circuitos geradores de pulsos eletromagnéticos com transistores NPN. </li>
                <li>Como entender e fomentar a relação dos estudantes com a astronomia: uma análise sob a ótica do envolvimento destes com as áreas de ciências exatas. </li>
                <li>Como um projeto simples se tornou de grande importância para o ensino de ciências dos materiais. </li>
                <li>Conversão de ondas sonoras em energia elétrica utilizando piezoeletricidade.</li>
                <li>Desenvolvimento de um sistema com recursos da realidade aumentada para visualização tridimensional de construções civis a partir de plantas baixas. </li>
                <li>Educação Física, Corpo e Mídia: reflexões sobre a influência da cultura midiática na criação dos padrões de beleza e seus impactos durante a adolescência.</li>
                <li>Elaboração de sólidos geométricos a partir da reutilização de embalagens longa vida e papel.</li>
                <li>Em Crime e Castigo, o protagonista como vítima e carrasco de si mesmo: uma análise de desdobramentos literários, psicológicos e sociais.</li>
                <li>Estratégias de leitura e compreensão em EJA. </li>
                <li>Gerenciamento de reagentes em laboratório de Química de ensino e pesquisa.</li>
                <li>Implementação e aplicação de modelo para redes neurais convolucionais de máscara.</li>
                <li>Laboratório Maxwell - pesquisa e divulgação do Littlemax.</li>
                <li>Levantamento e análise de formas de onda de uma rede PROFIBUS DP com cabeamento em diferentes condições. </li>
                <li>Madame Bovary e o suicídio anômico apresentado por Durkheim.</li>
                <li>Mapeamento de poluição luminosa na baixada santista. </li>
                <li>Marcadores conversacionais presentes na língua falada na Baixada Santista/SP.</li>
                <li>Posicionamento linear automatizado utilizando arduino.</li>
                <li>Processamento de imagens geradas através de micro-ondas para reconhecimento de câncer cerebral infantil: resultados prévios.</li>
                <li>PROJETO SIGEV – sistema gerenciador de eventos.</li>
                <li>Reflexões sobre a educação de jovens e adultos no IFSP de Cubatão. </li>
                <li>Ródion Ramanovich Raskólnikov, protagonista de Crime e Castigo: uma análise literária sob a perspectiva social e histórica na Rússia do século XIX. </li>
                <li>Scrobble de músicas – Overmusic.</li>
                <li>Sistema eletrônico de controle de acesso realizado por microcontrolador Raspberry Pi. </li>
                <li>Uma reflexão sobre a coleta seletiva na cidade de Praia Grande. </li>
            </ul>
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