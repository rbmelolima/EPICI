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

            <h3> Submissão </h3>

            <p>Podem submeter resumos expandidos: </p>
            <ul>
                <li>Bolsistas do PIBIFSP ou PIVICT do IFSP; </li>
                <li>Alunos do Ensino Médio ou dos Cursos Superiores, do IFSP ou de outras instituições, desde que seja um trabalho de pesquisa ou resultado de TCC.</li>
            </ul>
            <p>
                Os resumos expandidos poderão ter até 2 autores (aluno e orientador), mas o aluno ficará encarregado da apresentação. A relação dos autores no trabalho deve seguir a ordem alfabética.
            </p>
            <p>Os resumos expandidos poderão ter até 3 páginas, contendo: </p>
            <ul>
                <li>Título em português; </li>
                <li>Autor(es);</li>
                <li>Resumo;</li>
                <li>3 palavras-chave (termo único ou composto).</li>
            </ul>

            <p>O corpo do texto deverá conter: </p>
            <ul>
                <li>Introdução; </li>
                <li>Material e Métodos;</li>
                <li>Conclusões;</li>
                <li>Referências.</li>
            </ul>
            <p><b>Consulte o modelo disponível para download:</b> <a href="downloads/Modelo_Resumo_ 2 EPICI.doc"> <i class="fa fa-download" aria-hidden="true"></i> Baixar aqui</a>.</p> <br> <br>

            <h3>Pôster</h3>
            <p> Os trabalhos de Iniciação Científica serão apresentados na modalidade pôster, devendo o autor permanecer junto ao trabalho no horário específico de apresentação determinado pelo Comitê Científico, para apresentação ao público e aos avaliadores. </p>
            <p>Os trabalhos poderão indicar até 2 autores, mas a apresentação deverá ser conduzida apenas pelo aluno. É recomendável que os autores cheguem ao evento com pelo menos 30 minutos de antecedência em relação ao horário previsto para sua exposição. Consulte o modelo disponível para download.</p>

            <br> <br>
            <h3>Informações </h3>
            <p>O resumo expandido deve ser enviado para <a href="mailto:epici.cbt@gmail.com">epici.cbt@gmail.com</a>.</p>
            <p>
                <i>Datas importantes</i>:<br>
                <b>Inscrição de trabalhos</b>: até 26 de setembro de 2019.<br>
                <b>Avaliação dos resumos</b>: de 27 de setembro até 05 de outubro de 2019.<br>
                <b>Divulgação dos trabalhos aprovados</b>: 06 de outubro de 2019.<br>
                <b>Apresentação dos trabalhos</b>: 24 de outubro de 2019.<br>
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