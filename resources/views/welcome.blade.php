@extends('layouts.principal')
@section('content')

    <div class="skitter skitter-large with-dots">
        <ul>
            <li>
                <a href="#swapBarsBack">
                    <img src="img/cerrajeria.jpeg" class="swapBarsBack" />
                </a>
            </li>
            <li>
                <a href="#swapBarsBack">
                    <img src="img/pp.jpg" class="swapBarsBack" />
                </a>
            </li>
            <li>
                <a href="#cut">
                    <img src="img/cerrajeria1.jpg" class="cut" />
                </a>
            </li>
            <li>
                <a href="#swapBlocks">
                    <img src="img/cerrajeria2.jpg" class="swapBlocks" />
                </a>
            </li>
        </ul>
    </div>

    <div class="row div-oscuro hide-on-med-and-down">
        <div class="col l12 m12 s12 topbtn">
            <a id="menu" class="waves-effect waves-light btn btn-floating left" ><i class="material-icons">menu</i></a>
        </div>
    </div>
    <div class="row div-oscuro divbtn hide-on-med-and-down" style="margin-bottom: 0">
        <div class="col s12 m12 l3 offset-l1  ">
            <h3 class="yellow-text top1 ">A Toda Hora</h3>
            <h4 class="white-text top2 left30">Un Servicio Especializado</h4>
        </div>
        <div class="col s6 m6 l3">
            <img src="img/cerrajeria5.png" alt="" class="responsive-img left-top1"> <!-- notice the "circle" class -->
        </div>
        <div class="col s11 m12  l4 ">
            <span class="white-text top1 left30" style="text-align: justify">
                Como tienes muchas ocupaciones y una vida atareada. Te brindamos un servicio de cerrajería impecable las 24/7 en los 365 dias del año.
            </span>
        </div>
    </div>
    <div class="parallax-container section  scrollspy" id="servicios" >
        <div class="parallax"><img src="img/caja2.jpg"></div>
        <div class="row" >
            <div class="col l10 m12 s12 offset-l1 " >
                <div class="row card-panel yellow center">
                    <h1>Nuestros Servicios de Cerrajería</h1>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col l10 m12 s12 offset-l1 ">
                <div class="div-gris row">
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons deep-purple-text">done</i>Apertura de puertas y cajas fuertes</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons blue-text" >done</i>Frabricacion de llaves</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons green-text">done</i>Puertas de seguridad</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons red-text">done</i>Cámaras de seguridad</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons orange-text">done</i>Electroimán</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons orange-text">done</i>Programación de llaves con chip</span>
                    </div>
                    <div class="col l4 m6 s12 trabajamos">
                        <span class=""><i class="large material-icons orange-text">done</i>Cantoneras</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row div-oscuro">
        <div class="col s12 m6 l3 offset-l1  center">
            <h3 class="yellow-text top1 ">Siguenos</h3>
        </div>
        <div class="col l3 m6 s12 center">
            <a class="grey-text text-lighten-3" target="_blank" href="https://www.facebook.com/cerrajeriabululo/"><img  class="top1" src="img/redes_sociales/facebook.png" alt=""></a>
            <a class="grey-text text-lighten-3" target="_blank" href="https://www.instagram.com/cerrajeriabululo/"><img  class="top1" src="img/redes_sociales/instagram.png" alt=""></a>
            <a class="grey-text text-lighten-3" target="_blank" href="https://twitter.com/cerrajeriabulul"><img  class="top1" src="img/redes_sociales/twitter.png" alt=""></a>
        </div>
        <div class="col l4 m12 s12 white-text center">
            <h4 class="top1">Y esté atento a nuestros servicios y promociones</h4>
        </div>
    </div>
    <div class="row div-claro container">
        <div class="row">
            <div class="col l12 center top2 card blue-grey darken-1 white-text">
                <h1>Noticias, Promociones y Más</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col s12 m6 l4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Apertura de Nuestra Sede en Barranquilla</span>
                        <p  class="acortar">Les traemos una excelente noticia, gracias a él constante esfuerzo y excelente servicio ya contamos con nuestro primer local en Colombia.
                            Estamos ubicados en la Carrera 44 #64-28 Barranquilla, Colombia.
                            Qué esperas? Visitamos y recomiéndanos con tus vecinos, amigos… No te arrepentirás de nuestros servicios y no olvides seguirnos en nuestras redes.

                            Gracias de Antemano “Cerrajería Bululo” </p>
                    </div>
                    <div class="card-action">
                        <a  href="#modal1">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal Structure -->
        <div id="modal1" class="modal div-oscuro">
            <div class="modal-content">
                <div class="row  center white-text">
                    <div class="col l12 top2">
                        <h4 class=""><p>Apertura de Nuestra Sede en Barranquilla</p></h4>
                    </div>
                </div>
                <div class="row center">
                    <div class="col l12">
                        <img src="img/llave1.png" alt="" class="responsive-img ">
                    </div>
                </div>
                <div class="row  white-text text-justify">
                    <div class="col l12">
                        <p >Les traemos una excelente noticia, gracias a él constante esfuerzo y excelente servicio ya contamos con nuestro primer local en Colombia.
                            Estamos ubicados en la Carrera 44 #64-28 Barranquilla, Colombia.
                            Qué esperas? Visitamos y recomiéndanos con tus vecinos, amigos… No te arrepentirás de nuestros servicios y no olvides seguirnos en nuestras redes.

                            Gracias de Antemano “Cerrajería  Bululo” </p>
                    </div>
                </div>

            </div>
            <div class="modal-footer div-oscuro ">
                <a href="#!" class="modal-action white-text modal-close waves-effect waves-green btn-flat">Cerrar</a>
            </div>
        </div>
        <!-- Modal Structure -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Diseñada por:</h4>
                <p>Wilson Sayago</p>
                <p>Alfredo valbuena</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
        <div class="tap-target"  style="background-color: yellow;" data-activates="menu">
            <div class="tap-target-content">
                <h3>Te Damos La Bienvenida a Cerrajería Bululo!</h3>
                <p style="font-size: 18px;">Recorre nuestra pagina y enterate de nuestros servicios o contactanos por medio de nuestros numeros.</p>
            </div>
        </div>
@stop