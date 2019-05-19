<?php
	session_start();
        
    require_once $_SERVER["DOCUMENT_ROOT"]."/_includes/_config/config.ini.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo SIS_DESCRICAO; ?>">
    <meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="google" content="translate" />
	<meta name="google" content="nositelinkssearchbox" />
    <title><?php echo SIS_TITULO; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo SIS_URL; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo SIS_URL; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?php echo SIS_URL; ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo SIS_URL; ?>css/creative.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img class="img-dark" src="<?php echo SIS_URL; ?>img/logo_hor_white.png" style="margin-top: -5px;"><?php //echo SIS_TITULO; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Como Funciona?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Recursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Mercados</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Inova&ccedil;&atilde;o inteligente com o melhor pre&ccedil;o acess&iacute;vel</h1>
                <hr>
                <p>Magazine Manager disponibiliza uma solu&ccedil;&atilde;o inovadora para pequenas e m&eacute;dias empresas capaz de agregar efici&ecirc;ncia na automa&ccedil;&atilde;o de seu Ponto de Venda. </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Saiba Mais</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">N&oacute;s temos o que voc&ecirc; precisa!</h2>
                    <hr class="light">
                    <p class="text-faded">Controle de Estoque, Fluxo de Caixa completo, Relat&oacute;rios de Vendas, a simplicidade em suas m&atilde;os.</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Mais Detalhes!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recursos do Magazine Manager</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-dollar text-primary sr-icons"></i>
                        <i class="fa fa-4x fa-dollar text-primary sr-icons"></i>
                        <h3>Fluxo de Caixa</h3>
                        <p class="text-muted">Controle sua abertura, vendas e fechamento de modo simples e objetivo. Sem restri&ccedil;&otilde;es!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bar-chart text-primary sr-icons"></i>
                        <h3>Relat&oacute;rio de Vendas</h3>
                        <p class="text-muted">Estat&iacute;sticas completa de vendas, incluindo gr&aacute;ficos por produtos e formas de pagamento</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-database text-primary sr-icons"></i>
                        <h3>Estoque Total</h3>
                        <p class="text-muted">Gerencie por completo o seu estoque de produtos, verificando lan&ccedil;amentos e quantidades.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-keyboard-o text-primary sr-icons"></i>
                        <h3>Interface Amig&aacute;vel</h3>
                        <p class="text-muted">Design atraente e de f&aacute;cil manuseio, proporcionando melhor interatividade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">    	
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Magazine Manager para
                                </div>
                                <div class="project-name">
                                    Mini Mercados & Mercearias
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Magazine Manager para
                                </div>
                                <div class="project-name">
                                    Padarias & Restaurantes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Magazine Manager para
                                </div>
                                <div class="project-name">
                                    Farm&aacute;cias & Drogarias
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Magazine Manager para
                                </div>
                                <div class="project-name">
                                    Oficinas Mec&acirc;nicas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Magazine Manager para
                                </div>
                                <div class="project-name">
                                    Cl&iacute;nicas & Consult&oacute;rios
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php echo SIS_URL; ?>img/portfolio/thumbnails/6.jpg" class="portfolio-box">
                        <img src="<?php echo SIS_URL; ?>img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conhe&ccedil;a o Magazine Manager Plus
                                </div>
                                <div class="project-name">
                                    <img src="<?php echo SIS_URL; ?>img/logoblk.png" style="width: 110px;"> <i class="fa fa-1x fa-plus-square sr-icons"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Experimente agora o Magazine Manager!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Entre em Contato!</h2>
                    <hr class="primary">
                    <p>Entre em contato conosco agora mesmo e saiba como adquirir o Magazine Manager para o seu com&eacute;rcio!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-mobile fa-3x sr-contact"></i>
                    <p>(11) 99203-5937<br>
                        (11) 96200-3662<br>
                        (11) 94309-8777</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:faleconosco@magazinemanager.com.br">faleconosco@magazinemanager.com.br</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo SIS_URL; ?>vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo SIS_URL; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo SIS_URL; ?>vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo SIS_URL; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="<?php echo SIS_URL; ?>js/creative.js"></script>

</body>
</html>