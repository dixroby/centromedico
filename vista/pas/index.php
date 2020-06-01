<?php
    session_start();
    if(isset($_SESSION['MEDICO_ID'])){
        header('Location: especialidad.php');
    }

?>
<!DOCTYPE html>

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

    <link rel="stylesheet" href="../../Plantilla/plugins/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../../Plantilla/plugins/select2/select2.min.css">
    <script src="../../Plantilla/bower_components/jquery/dist/jquery.min.js"></script>
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


    <div id="contenido" class="container">
        <section id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <div class="slide-text">
                            <h1>Bienvenido al Hospital San Camilo de Lellis</h1>
                            <p>Atencion online, en 2 pasos, realize su cita medica en una especialidad.</p>
                            <a href="#consulta" class="btn btn-common">Atenderme</a>
                        </div>
                        <img style="max-height: 400px;" src="images/img1.jpeg" class="slider-hill" alt="slider image">
                        <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                        <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                        <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                    </div>
                </div>
            </div>
            <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
        </section>
        <!--/#home-slider-->

        <section id="">
            <div class="row">
                <div class="col-sm-12">
                    <div class=" text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 id="consulta" class="title">Realiza tu cita</h1>
                        <p>Elige la especialidad, y un medico te atendera </p>
                    </div>
                </div>
            </div>
        </section>
        <!--/#clients-->

        <section id="portfolio">

            <div class="row">
                <ul class="portfolio-filter text-center ">

                    <?php 
                        require_once("../../modelo/modelo_especialidad.php");
                        
                        $est = new  Modelo_Especialidad();

                        $listaEsp =$est->listaEspecialidad2();
                        //para imprimir si hay errores
                         
                    ?>
                    <br>
                    <li>
                        <a class="btn btn-default active" href="#" data-filter="*">
                            Todas las Especialidades (<?php echo(count($listaEsp)); ?>)</a>
                    </li>
                    <?php foreach ($listaEsp as  $value)  {?>
                    <li><a class="btn btn-default" href="#" data-filter=".val<?php echo $value['especialidad_id'];?>">
                            <b><?php echo $value['especialidad_nombre'];?></b></a>
                    </li>
                    <?php }?>

                </ul>
                <!--/#portfolio-filter-->

                <div class="portfolio-items text-center">
                    <?php 
                        require_once("../../modelo/modelo_especialidad.php");
                        
                        $est = new  Modelo_Especialidad();

                        $listaEspXmed =$est->listaEspecialidadXmedico();
                        //para imprimir si hay errores
                        //print_r(count($listaEspXmed)); 
                     ?>
                    <?php 
                        $sum = 0;
                    foreach ($listaEspXmed as  $value)  { 
                        $sum = $sum+1; ?>
                    <div
                        class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos val<?php echo $value['especialidad_id'];?>">
                        <div class="portfolio-wrapper" style="border: 1px solid black">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb ">
                                    <img src="images/medico.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li>
                                            <p><?php echo $value['medico_nombre'];?></p>
                                            <br>
                                            <p><?php echo $value['medico_apepat'];?></p>
                                            <p><?php echo $value['medico_apemat'];?></p>


                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>
                                    <b>

                                        <input hidden type="text" id="xd" value="<?php echo $value['medico_id'];?>">

                                        <a onclick="xd()" style="width:100%;" " href=" javascript:;"
                                            class="test btn btn-common"
                                            id="<?php echo $value['medico_id'].$sum;?>">Realizar mi cita</a>
                                        <div>
                                            <?php echo $value['especialidad_nombre'];?>
                                        </div>
                                    </b>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <script>
                    function xd() {
                        $(".test").click(function() {
                            var id = $(this).attr('id');
                            
                        });
                        $.ajax({
                            "url": "../controlador/medico/controlador_crear_session.php",
                            type: 'POST',
                            data: {
                                id: id
                            }
                        }).done(function(resp) {
                            if (resp > 0) {
                                $("#modal_editar").modal('hide');
                                Swal.fire("Mensaje De Confirmacion", "Datos actualizados correctamente.",
                                        "success")
                                    .then((value) => {
                                        listar_insumo();
                                        tableinsumo.ajax.reload();
                                    });
                            } else {
                                Swal.fire("Mensaje De Error",
                                    "Lo sentimos, no se pudo completar la actualización", "error");
                            }
                        })
                    }
                    </script>
                    <?php } ?>


                </div>


                <div class="portfolio-pagination">
                    <ul class="pagination">
                        <li><a href="#">left</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>

        </section>

    </div>

    <!--/#portfolio-->
    <script>
    function cargar_contenido(contenedor, contenido) {
        $("#" + contenedor).load(contenido);
    }
    </script>

    <script src="../../js/citaFrontend.js"></script>
    <script src="../../Plantilla/plugins/DataTables/datatables.min.js"></script>
    <script src="../../Plantilla/plugins/sweetalert2/sweetalert2.js"></script>

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

    <script>
    $(document).ready(function() {

        $("#modal_registro").on('shown.bs.modal', function() {
            $("#txt_usu").focus();
        })
    });
    </script>
    <script>
    var idioma_espanol = {
        select: {
            rows: "%d fila seleccionada"
        },
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
        //"sInfo": "Registros del (_START_ al _END_) total de _TOTAL_ registros",
        "sInfo": "Pacientes del (_START_ al _END_) <b>total de pacientes en cola = _TOTAL_ </b>",
        //"sInfoEmpty": "Registros del (0 al 0) total de 0 registros",
        "sInfoEmpty": "Pacientes del (0 al 0) <b>total de 0 registros</b>",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "<b>Aun no existen citas por atender</b>",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }

    function cargar_contenido(contenedor, contenido) {
        $("#" + contenedor).load(contenido);
    }
    //$.widget.bridge('uibutton', $.ui.button);
    </script>


</body>

</html>