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

                    <a class="navbar-brand" href="index.php">
                        <h1 class="text-primary"><b>San Camilo de Lellis</b><img style="height: 40px;"
                                src="images/logoh.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li class="dropdown"><a href="#">Covid-19 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="test.php">test</a></li>
                                <li><a href="aboutus2.html">Mapa 2</a></li>
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

    <div style=" width:100%;background-color:#48988f;text-align:center;color:white; ">

    </div>
    <div id=screenCopy style="font-size:16px;text-align:center;background-color:white;color:black">
        <div class=container-fluid>
            <br />
            <section id="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 id="consulta" class="title">Realiza tu Test</h1>
                            

                        </div>
                    </div>
                </div>
            </section>



            <div class="icon-wrapper">
                <i class="fa fa-2x fa-heart-o"></i>
            </div>

            <input data-wow-duration="500ms" data-wow-delay="300ms" class="btn btn-primary" type="button" name=submit
                data-toggle=modal data-dismiss=modal data-target="#myModal1" value="Empieza el test ahora">

            <br />
            <br> <br>

            <br>
            <div class="container" >

                                <p style="font-size: 16px;">Haz el siguiente test (no oficial) <b>para descongestionar los servicios de
                                        emergencia</b>
                                    y seguir los actuales pasos recomendados por las diferentes autoridades competentes:

                                    Quédate en casa si te sientes mal. Si tienes fiebre, tos y dificultad para respirar,
                                    busca atención médica

                                    lo antes posible. Sigue las instrucciones de la autoridad de salud local
                                </p>
                            </div>
        </div>
    </div>
    <div class=container-fluid style="background-color: black; ">
        <div class=row>

        </div>


        <div class="modal fade" id=myModal1 tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        Pregunta 1 de 3
                        <button type=button class=close style=color:white data-dismiss=modal>&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />
                        <h4>
                            En los últimos 14 días,
                            <br />¿has estado en alguno de los siguientes lugares?

                        </h4>
                        <br />
                        <div class="container">
                            <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                            <b>Abancay</b>
                            : Abancay, Tamburco.
                            <br />
                            <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                            <b>Andahuaylas</b> : Talavera, San Geronimo.
                            <br />
                            <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                            <b>Otra region del Perú</b>
                            : los 24 departamentos.
                            <br />
                            <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                            <b>Fuera del pais</b>

                        </div>
                        <br />
                        <br />
                        <br />


                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-primary"
                            name=pregunta11 id=reply11 aria-label=reply11 value=1 onclick=displayRadioValue1yes()
                            type=submit>Sí
                        </button>&nbsp&nbsp;

                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-secondary"
                            name=pregunta11 id=reply12 aria-label=reply12 value=0 onclick=displayRadioValue1no()
                            type=submit>No</button>

                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id=myModal2 tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        Pregunta 2 de 3
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelistX()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />

                        <div class="container">
                            <h4>
                                ¿Has tenido
                                <a class=interfaceClick>
                                    <i>contacto estrecho</i>
                                </a>
                                * con alguna persona que sea:
                            </h4>
                            <span
                                style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                                &nbspa &nbsp &nbsp</span>
                            <b>&nbspcaso de estudio</b>
                            de coronavirus, Covid-19?
                            <br> <br>
                            <span
                                style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                                &nbspb &nbsp &nbsp</span>
                            <b>&nbspcaso confirmado</b>
                            de coronavirus, Covid-19?
                            <br> <br>
                            <span
                                style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                                &nbspc &nbsp &nbsp</span>
                            &nbspque haya <b>estado en uno de los lugares</b>
                            citados anteriormente?
                        </div>

                        <br />
                        <div class=container>

                            <div id=interface class=interface>
                                <span id=estrecho style="font-size:18px;background-color:white;color:black">
                                    <b>*</b>
                                    <i>Contacto estrecho</i>
                                    quiere decir:
                                </span>
                            </div>
                            <br>
                            <div class="container">
                                <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                                Vivir en la <b>misma vivienda</b>
                                <br />
                                <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                                Tener <b>contacto cara a cara</b>
                                , como por ejemplo, una conversación de más de unos minutos.
                                <br />
                                <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                                Si ha <b>tosido cerca de ti</b>
                                <br />
                                <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                                Estar <b>a menos de 2 metros</b>
                                de la persona durante <b>más de 15 minutos</b>
                                <br />
                                <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                                Estar en <b>contacto con sus secreciones</b> <br>
                                (saliva, mocos, orina, sangre, vómitos, excrementos,
                                etc)
                                <br />
                            </div>
                            <div class=row id=estrechoButtos style=display:none>
                                <div class=col-4>
                                    <button class=btn1 name=pregunta22 id=reply21 aria-label=reply21 value=1
                                        onclick=displayRadioValue2yes() type=submit>
                                        <br />
                                        <h3>Sí</h3>
                                        <br />
                                    </button>
                                </div>
                                <div class=col-4>
                                    <button class=btn1 name=pregunta22 id=reply21 aria-label=reply21 value=1
                                        onclick=displayRadioValue2yes() type=submit>
                                        <br />
                                        <h3>No lo sé</h3>
                                        <br />
                                    </button>
                                </div>
                                <div class=col-4>
                                    <button class=btn1 name=pregunta22 id=reply22 aria-label=reply22 value=0
                                        onclick=displayRadioValue2no() type=submit>
                                        <br />
                                        <h3>No</h3>
                                        <br />
                                    </button>
                                </div>
                            </div>
                            <br />
                            <br />
                        </div>
                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-primary"
                            name=pregunta22 id=reply21 aria-label=reply21 value=1 onclick=displayRadioValue2yes()
                            type=submit>
                            Sí
                        </button>

                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-primary"
                            name=pregunta22 id=reply21 aria-label=reply21 value=1 onclick=displayRadioValue2yes()
                            type=submit>
                            No lo sé
                        </button>

                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-primary"
                            name=pregunta22 id=reply22 aria-label=reply22 value=0 onclick=displayRadioValue2no()
                            type=submit>
                            No
                        </button>
                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default" data-dismiss=modal
                            onclick="restorelistX()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModal3 tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header onclick="restorelistX()">
                        Pregunta 3 de 3
                        <button type=button class=close style=color:white data-dismiss=modal>&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />
                        <h4>¿Tienes algunos de estos síntomas?</h4>
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Fiebre</b>
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Tos</b>
                        seca
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        Dificultad <b>respiratoria</b>
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Malestar</b>
                        general
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        Dolor de cabeza, dolor muscular, rinitis (moqueo transparente), dolor de garganta
                        <br />
                        <br />
                        <br />

                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-primary"
                            name=pregunta33 id=reply31 aria-label=reply31 value=1 onclick=displayRadioValue3yes()
                            type=submit>
                            Sí
                        </button>

                        <button style="vertical-align: middle; margin: 0px;font-size:25px" class="btn btn-default"
                            name=pregunta33 id=reply32 aria-label=reply32 value=0 onclick=displayRadioValue3no()
                            type=submit>
                            No
                        </button>

                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default" data-dismiss=modal
                            onclick="restorelistX()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModalA tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        QUÉDATE EN CASA
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelistX()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />
                        Por el momento no te preocupes, pero no salgas de casa excepto por necesidad:
                        <br />
                        <h4 style="color:#48988f">
                            <b>parece que NO tienes el coronavirus - Covid-19</b>
                        </h4>
                        <br />
                        Aunque no hayas estado en ninguna zona con evidencia de transmisión comunitaria ni hayas estado
                        en contacto con ningún caso sospechoso o confirmado, <b>si presentaras algún síntoma, llama a tu
                            centro de atención primaria  para su valoración</b>
                        : recuerda evitar desplazarte al mismo salvo indicación contraria.
                        <br />
                        Sigue siempre los siguientes <b>consejos de prevención</b>
                        :
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Lávate las manos frecuentemente</b>
                        (con agua y jabon o soluciones alcoholicas 70%), especialmente
                        después del contacto directo con personas enfermas o su entorno.
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>En el momento de toser o estornudar</b>
                        , tápate la boca y la nariz con pañuelos de un solo uso y deséchalos en la papelera. En su
                        defecto usa la cara interna del codo. Acto seguido lávate las manos rápidamente con agua y
                        jabón, o con soluciones alcohólicas 70%.
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Evita el contacto cercano</b>
                        (al menos una distancia de dos metros) con personas que padecen
                        infecciones respiratoria agudas y presenten tos, estornudos y expectoraciones y no compartas las
                        pertenencias personales.
                        <br />
                        <i style="color:#48988f;font-size:14px" class="far fa-dot-circle"></i>
                        <b>Evita compartir comida y utensilios</b>
                        (cubiertos, vasos, servilletas, pañuelos, etc.) y otros
                        objetos sin limpiarlos debidamente.
                        <br>
                    </div>
                    <div class=modal-footer>
                        <button type=button class="btn btn-default" data-dismiss=modal
                            onclick="restorelistX()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModalB tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        QUÉDATE EN CASA
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelist3()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <h4 style="color:#48988f">
                            <b>parece que NO tienes el coronavirus - Covid-19</b>
                        </h4>
                        <p>Por el momento no te preocupes, pero extrema las precauciones,Durante los proximos 14 dias
                            <b>continua controlando la posible aparición de nuevos síntomas</b></p>

                        <p>En caso de que aparezcan los síntomas descritos llama al <b>983922355</b></p>

                        <p>Sigue siempre los siguientes <b>consejos de prevención</b>
                            :</p>

                        <p><b>Lávate las manos frecuentemente</b>
                            (con agua y jabon o soluciones alcoholicas 70%), especialmente
                            después del contacto directo con personas enfermas o su entorno.</p>

                        <p><b>En el momento de toser o estornudar</b>
                            , tápate la boca y la nariz con pañuelos de un solo uso y deséchalos en la papelera. En su
                            defecto usa la cara interna del codo. Acto seguido lávate las manos rápidamente con agua y
                            jabón, o con soluciones alcohólicas 70%.</p>

                        <p><b>Evita el contacto cercano</b>
                            (al menos una distancia de dos metros) con personas que padecen
                            infecciones respiratoria agudas y presenten tos, estornudos y expectoraciones y no compartas
                            las
                            pertenencias personales.</p>

                        <p><b>Evita compartir comida y utensilios</b>
                            (cubiertos, vasos, servilletas, pañuelos, etc.) y otros
                            objetos sin limpiarlos debidamente.</p>

                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default" data-dismiss=modal
                            onclick="restorelist3()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModalB2 tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        QUÉDATE EN CASA
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelist4()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <h4 style="color:#48988f">
                            <b>parece que NO tienes el coronavirus - Covid-19</b>
                        </h4>
                        <p>Por el momento no te preocupes, pero extrema las precauciones, no salgas de casa y evita el
                            contacto cercano con otras personas:</p>

                        <p>
                            <br />
                            Durante los proximos 14 dias <b>continua controlando la posible aparición de nuevos
                                síntomas</b>
                        </p>
                        <p>
                            En caso de que aparezcan los síntomas descritos o el contacto se confirme positivo llama al
                            983922355

                        </p>

                        <p>En caso de que aparezcan los síntomas descritos o el contacto se confirme positivo llama al Sigue siempre los siguientes <b>consejos de prevención</b></p>

                        <b>Lávate las manos frecuentemente</b>
                        (con agua y jabon o soluciones alcoholicas 70%).
                        <br />
                        <br />
                        <b>En el momento de toser o estornudar</b>
                        , tápate la boca y la nariz con pañuelos de un solo uso y deséchalos en la papelera.
                        <br />
                        <br />
                        <b>Evita el contacto cercano</b>
                        (al menos una distancia de dos metros) con personas que padecen
                        infecciones respiratoria agudas y presenten tos, estornudos y expectoraciones y no compartas las pertenencias personales.
                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default"  data-dismiss=modal
                            onclick="restorelist4()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModalC tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        QUÉDATE EN CASA
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelist2()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />
                        <h4>Pasos a seguir:</h4>
                        <br />
                        <span
                            style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                            &nbsp1 &nbsp &nbsp</span>
                        <b>&nbspEvita el contacto</b>
                        con otras personas.
                        <br />
                        <br />
                        <span
                            style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                            &nbsp2 &nbsp &nbsp</span>
                        <b>&nbspQu édate en casa</b>
                        y no vayas a tu centro de atención primaria , a la farmacia o al hospital.
                        <br>
                        <br>
                        <span
                            style="text-align:center;color:#48988f;font-size:16px;border-radius:100px;border: 1px solid #48988f">&nbsp
                            &nbsp3 &nbsp &nbsp
                        </span>&nbsp<b>&nbsp LLama  llamanos al 983922355</b>
                        <br>
                        <br>
                        <br>
                        <p> <b>(*) Ingrese tu telefono nos pondremos en contacto contigo</b>
                        </p>
                        <input type="text" class="form-control" id="txt_cel"
                            placeholder="Ingrese tu telefono nos pondremos en contacto contigo" maxlength="8"
                            onkeypress="return soloNumeros(event)">
                            <script>
                            $("#txt_cel").focus();
                        </script>

                        <p>
                            <button class="btn btn-primary">Enviar mi numero</button>
                        </p>

                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default" data-dismiss=modal
                            onclick="restorelist2()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id=myModalD tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class="modal-dialog modal-full" role=document>
                <div class=modal-content>
                    <div style="background-color:#48988f;color:white" class=modal-header>
                        QUÉDATE EN CASA
                        <button type=button class=close style=color:white data-dismiss=modal
                            onclick="restorelist()">&times;</button>
                    </div>
                    <div id=screenCopy class=modal-body>
                        <br />
                        Por el momento no te preocupes, pero extrema las precauciones, no salgas de casa y evita el
                        contacto cercano con otras personas.
                        <br />
                        <br />
                        <p>Durante los proximos 14 dias <b>continua controlando la posible aparición de nuevos síntomas o
                            el empeoramiento de los actuales</b>
                        .
                        Si es urgente llama al <b>983922355</b> , si no estas en grau, llama al 113</p>

                        
                        <p>Sigue siempre los siguientes <b>consejos de prevención</b>
                        :</p>
                        <b>Lávate las manos frecuentemente</b>
                        (con agua y jabon o soluciones alcoholicas 70%), especialmente
                        después del contacto directo con personas enfermas o su entorno.
                        <br />
                        <br />
                        <
                        <b>Evita el contacto cercano</b>
                        (al menos una distancia de dos metros) con personas que padecen
                        infecciones respiratoria agudas y presenten tos, estornudos y expectoraciones y no compartas las
                        pertenencias personales.
                        <br />
                        <br />
                       
                        <b>Evita compartir comida y utensilios</b>
                        (cubiertos, vasos, servilletas, pañuelos, etc.) y otros
                        objetos sin limpiarlos debidamente.
                        
                    </div>
                    <div class=modal-footer style="background-color:#48988f;">
                        <button type=button class="btn btn-default"  data-dismiss=modal
                            onclick="restorelist()">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        var posicion = -1,
            contact = -1,
            symptoms = -1;

        function displayRadioValue1yes() {
            posicion = 1;
            $("#myModal1").modal('hide');
            $("#myModal2").modal();
        };

        function displayRadioValue1no() {
            posicion = 0;
            $("#myModal1").modal('hide');
            $("#myModal2").modal();
        };

        function displayRadioValue2yes() {
            contact = 1;
            $("#myModal2").modal('hide');
            $("#myModal3").modal();
        };

        function displayRadioValue2no() {
            contact = 0;
            $("#myModal2").modal('hide');
            $("#myModal3").modal();
        };

        function displayRadioValue3yes() {
            symptoms = 1;
            $("#myModal3").modal('hide');
            nextresponse();
        };

        function displayRadioValue3no() {
            symptoms = 0;
            $("#myModal3").modal('hide');
            nextresponse();
        };

        function nextresponse() {
            if ((posicion == 0) && (contact == 0)) {
                if (symptoms == 0) {
                    $("#myModalA").modal();
                } else {
                    $("#myModalD").modal();
                }
            }
            if ((posicion > 0) || (contact > 0)) {
                if (symptoms == 0) {
                    if (contact == 0) {
                        $("#myModalB").modal();
                    } else {
                        $("#myModalB2").modal();
                    }
                } else {
                    $("#myModalC").modal();
                }
            }
        }

        function displaymessage() {
            if ((posicion == 0) && (contact == 0)) {}
            if ((posicion > 0) || (contact > 0)) {
                if (symptoms == 0) {} else {}
            }
        }
        </script>
        <script>
        function numberperregionmain(region, divname) {
            if (region == "Extremadura") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:112">112 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Extremadura'
                );
            }
            if (region == "Asturias") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:984 100 400">984 100 400 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>ó llama al <span style="font-size:22px"><a  href="tel:112">112 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Asturias'
                );
            }
            if (region == "Región de Murcia") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:900121212">900 121 212 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>ó llama al <span style="font-size:22px"><a  href="tel:112">112 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Murcia'
                );
            }
            if (region == "Melilla") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:112">112 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Melilla'
                );
            }
            if (region == "Aragón") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:976696382">976 696 382 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>ó llama al <span style="font-size:22px"><a  href="tel:061">061 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Aragón'
                );
            }
            if (region == "Baleares") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:061">061 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ó llama al <span style="font-size:22px"><a  href="tel:112">112 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Baleares'
                );
            }
            if (region == "Cantabria") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:900612112">900 612 112 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>ó llama al <span style="font-size:22px"><a  href="tel:061">061 <i style="font-size:18px" class="fas fa-phone"></i></a></span><br/>ó llama al <span style="font-size:22px"><a  href="tel:112">112 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Cantabria'
                );
            }
            if (region == "Cataluña") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:061">061 <i style="font-size:22px" class="fas fa-phone"></i></a></span> <br/>ó llama al <span style="font-size:22px"><a  href="tel:112">112 <i style="font-size:18px" class="fas fa-phone"></i></a></span></b><br/>si estás en Cataluña'
                );
            }
            if (region == "Andalucia") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:955545060">955 54 50 60 <i style="font-size:22px" class="fas fa-phone"></i></a></span> </b><br/>si estás en Andalucía'
                );
            }
            if (region == "Madrid") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900102112">900 102 112 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Madrid'
                );
            }
            if (region == "Comunidad Valenciana") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900300555">900 300 555 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Comunidad Valenciana'
                );
            }
            if (region == "Castilla la Mancha") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900232323">900 23 23 23 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Castilla-La Mancha'
                );
            }
            if (region == "Castilla y León") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900222000">900 222 000 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Castilla y León'
                );
            }
            if (region == "Galicia") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900400116">900 400 116 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Galicia'
                );
            }
            if (region == "La Rioja") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:941298333">941 29 83 33 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b> <br/>si estás en La Rioja'
                );
            }
            if (region == "Navarra") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a href="tel:948290290">948 290 290 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b> <br/>si estás en Navarra'
                );
            }
            if (region == "país Vasco") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900203050">900 20 30 50 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en País Vasco'
                );
            }
            if (region == "Canarias") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900112061">900 112 061 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Canarias'
                );
            }
            if (region == "Ceuta") {
                $(divname).html(
                    '<b><span style="font-size:26px"><a  href="tel:900720692">900 720 692 <i style="font-size:22px" class="fas fa-phone"></i></a></span></b><br/>si estás en Ceuta'
                );
            }
        };

        function numberperregion(region) {
            numberperregionmain(region, '#PriceDiv');
        }

        function numberperregion2(region) {
            numberperregionmain(region, '#PriceDiv2');
        };

        function numberperregion3(region) {
            numberperregionmain(region, '#PriceDiv3');
        };
        $(function() {
            $('#myPRODUVTS3').change(function() {
                region = $(this).val();
                numberperregion3(region);
                var hiddenspan = document.getElementById('changenumber3');
                hiddenspan.style.display = "";
                var mainlist = document.getElementById('mainlist3');
                mainlist.style.display = "none";
            });
        });
        $(function() {
            $('#mynewnumbers3').change(function() {
                region = $(this).val();
                numberperregion3(region);
                var list = document.getElementById('mynewnumbers3');
                list.value = 'Select3';
            });
        });
        $(function() {
            $('#myPRODUVTS').change(function() {
                region = $(this).val();
                numberperregion(region);
                var hiddenspan = document.getElementById('changenumber');
                hiddenspan.style.display = "";
                var mainlist = document.getElementById('mainlist');
                mainlist.style.display = "none";
            });
        });
        $(function() {
            $('#mynewnumbers').change(function() {
                region = $(this).val();
                numberperregion(region);
                var list = document.getElementById('mynewnumbers');
                list.value = 'Select';
            });
        });

        function restorelist() {
            var mainlist = document.getElementById('mainlist');
            $('#PriceDiv').html("");
            var list = document.getElementById('myPRODUVTS');
            list.value = 'Select';
            mainlist.style.display = "";
            var hiddenspan = document.getElementById('changenumber');
            hiddenspan.style.display = "none";
            var list = document.getElementById('mynewnumbers');
            list.value = 'Select';
            var estrech = document.getElementById('estrecho');
            estrech.style.backgroundColor = "white";
            estrech.style.color = "black";
            estrech.style.fontSize = "18px";
            estrechoButtos.style.display = "none";
            estrechoButtosMain.style.display = "";
        };
        </script>
        <script>
        $(function() {
            $('#myPRODUVTS2').change(function() {
                region = $(this).val();
                numberperregion2(region);
                var hiddenspan = document.getElementById('changenumber2');
                hiddenspan.style.display = "";
                var mainlist = document.getElementById('mainlist2');
                mainlist.style.display = "none";
            });
        });
        $(function() {
            $('#mynewnumbers2').change(function() {
                region = $(this).val();
                numberperregion2(region);
                var list = document.getElementById('mynewnumbers2');
                list.value = 'Select2';
            });
        });

        function restorelist2() {
            var mainlist = document.getElementById('mainlist2');
            $('#PriceDiv2').html("");
            var list = document.getElementById('myPRODUVTS2');
            list.value = 'Select2';
            mainlist.style.display = "";
            var hiddenspan = document.getElementById('changenumber2');
            hiddenspan.style.display = "none";
            var list = document.getElementById('mynewnumbers2');
            list.value = 'Select2';
            var estrech = document.getElementById('estrecho');
            estrech.style.backgroundColor = "white";
            estrech.style.color = "black";
            estrech.style.fontSize = "18px";
            estrechoButtos.style.display = "none";
            estrechoButtosMain.style.display = "";
        };

        function restorelist3() {
            var mainlist = document.getElementById('mainlist3');
            $('#PriceDiv3').html("");
            var list = document.getElementById('myPRODUVTS3');
            list.value = 'Select3';
            mainlist.style.display = "";
            var hiddenspan = document.getElementById('changenumber3');
            hiddenspan.style.display = "none";
            var list = document.getElementById('mynewnumbers3');
            list.value = 'Select3';
            var estrech = document.getElementById('estrecho');
            estrech.style.backgroundColor = "white";
            estrech.style.color = "black";
            estrech.style.fontSize = "18px";
            estrechoButtos.style.display = "none";
            estrechoButtosMain.style.display = "";
        };

        function numberperregion4(region) {
            numberperregionmain(region, '#PriceDiv4');
        };
        $(function() {
            $('#myPRODUVTS4').change(function() {
                region = $(this).val();
                numberperregion4(region);
                var hiddenspan = document.getElementById('changenumber4');
                hiddenspan.style.display = "";
                var mainlist = document.getElementById('mainlist4');
                mainlist.style.display = "none";
            });
        });
        $(function() {
            $('#mynewnumbers4').change(function() {
                region = $(this).val();
                numberperregion4(region);
                var list = document.getElementById('mynewnumbers4');
                list.value = 'Select4';
            });
        });

        function restorelist4() {
            var mainlist = document.getElementById('mainlist4');
            $('#PriceDiv4').html("");
            var list = document.getElementById('myPRODUVTS4');
            list.value = 'Select4';
            mainlist.style.display = "";
            var hiddenspan = document.getElementById('changenumber4');
            hiddenspan.style.display = "none";
            var list = document.getElementById('mynewnumbers4');
            list.value = 'Select4';
            var estrech = document.getElementById('estrecho');
            estrech.style.backgroundColor = "white";
            estrech.style.color = "black";
            estrech.style.fontSize = "18px";
            estrechoButtos.style.display = "none";
            estrechoButtosMain.style.display = "";
        };

        function restorelistX() {
            var estrech = document.getElementById('estrecho');
            estrech.style.backgroundColor = "white";
            estrech.style.color = "black";
            estrech.style.fontSize = "18px";
            estrechoButtos.style.display = "none";
            estrechoButtosMain.style.display = "";
        };
        $(".interfaceClick").click(function() {
            $('html,body').animate({
                scrollTop: $(".interface").offset().top
            }, 'slow');
            estrecho.style.backgroundColor = "#48988f";
            estrecho.style.color = "white";
            estrecho.style.fontSize = "30px";
            estrecho.style.color = "white";
            estrechoButtos.style.display = "";
            estrechoButtosMain.style.display = "none";
        });
        </script>

        <!--/#portfolio-->
        <script>
        function cargar_contenido(contenedor, contenido) {
            $("#" + contenedor).load(contenido);
        }
        </script>

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
        <script src="../../Plantilla/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
        </script>
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