<?php
    session_start();
    if(isset($_SESSION['S_IDMEDICO'])){
        header('Location: especialidad.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hospital Guillermo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1 class="text-primary"><b>San Camilo de Lellis</b><img style="height: 40px;"
                                src="images/logoh.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li class="dropdown"><a href="#">Covid-19 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="test.php">test</a></li>
                                <li><a href="estadisticas-mundo.php">Estadisticas de los Paises.</a></li>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>
                        <li><a href="shortcodes.html ">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
    
    <div class="container">
        
    <h1 style="text-align: center;">Actualización Mundial del Virus Corona (COVID-19)</h1>
    

    <input type="search" class="form-control ds-input" id="gfg"  placeholder="Ingrese país a buscar ..." aria-label="Search for..." autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" style="position: relative; vertical-align: top;" dir="auto">
    <br><br>
    <div class="">
        <table class="DataTbl table table-striped">
            <thread class="thead-dark">
                <tr>
                    <th style="text-align: center;">País</th>
                    <th style="text-align: center;">Total Casos</th>
                    <th style="text-align: center;">Casos nuevos</th>
                    <th style="text-align: center;">Total de Muertes</th>
                    <th style="text-align: center;">Muertes recientes</th>
                    <th style="text-align: center;">Casos activos</th>
                    <th style="text-align: center;">Recuperados</th>
                    <th style="text-align: center;">Casos Críticos</th>
                </tr>
            </thread>
            <tbody style="text-align: center;" id="coranavirus"></tbody>
        </table>
    </div>
    </div>

    <script src="js/world.js"></script>



    <script src="../../js/citaFrontend.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="../../../Plantilla/"></script>
    <script src="../../../Plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../../Plantilla/bower_components/raphael/raphael.min.js"></script>
    <!-- Sparkline -->
    <script src="../../Plantilla/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../Plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../Plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../Plantilla/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../Plantilla/bower_components/moment/min/moment.min.js"></script>
    <script src="../../Plantilla/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../Plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../Plantilla/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../Plantilla/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../Plantilla/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script src="../../Plantilla/dist/js/demo.js"></script>


</body>

</html>