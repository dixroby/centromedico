<?php
    session_start();
    if(!isset($_SESSION['MEDICO_ID'])){
        header('Location: index.php');
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

    <style>
    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
        font-size: 15px;
    }
    </style>

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
                        <li class="dropdown"><a href="#">Paginas <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="aboutus.html">About</a></li>
                                <li><a href="aboutus2.html">About 2</a></li>
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


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12 " style="text-align: center;">
                            <h1 class="title"><?php echo $_SESSION['ESPECIALIDAD_NOMBRE']; ?></h1>
                            <p><b><?php echo $_SESSION['MEDICO_NOMBRE']; ?> <?php echo $_SESSION['MEDICO_APEPAT']; ?>
                                    <?php echo $_SESSION['MEDICO_APEMAT']; ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/med.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold"><?php echo $_SESSION['ESPECIALIDAD_NOMBRE'];?></h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i><?php echo date("Y/m/d"); ?></a></li>
                            <li><a href="#"><i class="fa fa-tag"></i>Branding</a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <p>La consulta de Medicina General está orientada al abordaje integral del paciente que acudepor
                            cualquier motivo de consulta, durante la misma se realizará la evaluación específica
                            delproblema
                            que aqueja al paciente, una vez completada esa revisión se procederá a la deteccióne
                            identificación de factores de riesgo para enfermedades latentes o potenciales en el corto,
                            mediano y largo plazo.</p>


                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i>Consejo o terapia individual, familiar, grupal,
                                prematrimonial y matrimonial..</li>
                            <li><i class="fa fa-angle-right"></i>Asesoramiento genético y cuidados prenatales.</li>
                            <li><i class="fa fa-angle-right"></i> Medicina preventiva clínica y mantenimiento de la
                                salud.</li>
                            <li><i class="fa fa-angle-right"></i> Medicina preventiva clínica y mantenimiento de la
                                salud.</li>


                            salud y educación comunitaria.</li>
                            <li><i class="fa fa-angle-right"></i>Participación y organización de actividades docentes
                                para
                                el personal de salud y la comunidad.</li>
                        </ul>
                    </div>

                    <div class="live-preview">
                        <a style="font-size:20px;" onclick="cerrar_Session();"
                            class="btn btn-danger uppercase col-sm-12 ">Cancelar Cita</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-information-->


    <section id="related-work">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Proceso de Atención</h1>
                <form onsubmit="return false" autocomplete="false">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <input type="text" class="global_filter form-control" id="global_filter"
                                        placeholder="Ingresar dato a buscar">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-common" style="width:100%" onclick="AbrirModalRegistro();"><i
                                        class="glyphicon glyphicon-plus"></i>Realizar Cita</button>
                            </div>
                        </div>
                        <table id="tabla_citas_frontend" class="display responsive nowrap table-dark"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th># de Atención</th>
                                    <th>Atenci&oacute;n</th>
                                    <th>Registro</th>
                                    <th>Paciente</th>
                                    <th>Medico</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th># de Atención</th>
                                    <th>Atenci&oacute;n</th>
                                    <th>Registro</th>
                                    <th>Paciente</th>
                                    <th>Medico</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <br>
    < <form autocomplete="false" onsubmit="return false">
        <div class="modal fade" id="modal_registro" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align:center;"><b>Realizar Cita</b></h4>
                    </div>
                    <div class="modal-content">
                        <div class="col-lg-12">
                            <br><br>
                            <input type="text" id="txtidusuario" hidden value="<?php echo $_SESSION['MEDICO_ID']; ?>">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control" id="txtapellido" placeholder="Ingrese Apellido"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="">DNI</label>
                            <select class="form-control" name="state" id="cbm_dni" style="width:100%;">
                            </select><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="Registrar_Cita()"><i
                                class="fa fa-check"><b>&nbsp;Registrar Cita</b></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                class="fa fa-close"><b>&nbsp;Cancelar </b></i></button>
                    </div>
                </div>
            </div>
        </div>
        </form>



        <!--/#related-work-->



        <script>
        $(document).ready(function() {
            listar_Citas();
            listar_combo_dni();
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
        <script type="text/javascript" src="js/bootstrap.min.js"></script>


    </body>

</html>

<script src="../../js/citaFrontend.js"></script>
<script src="../../Plantilla/plugins/DataTables/datatables.min.js"></script>
<script src="../../Plantilla/plugins/sweetalert2/sweetalert2.js"></script>
<script src="../../Plantilla/plugins/select2/select2.min.js"></script>