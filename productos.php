<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>POSITEX- TODO DEPENDE DE UN HILO</title>
    <!-- PROPIOS -->
        <link rel="stylesheet" href="../css/index.css">
        <link href="../css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../js/index.js"></script>
    <?php require_once "menu.php"; ?>
    <!-- PRODUCTOS -->
    
    </head>
  
    <body>
        <center><h1 class="title-h1">PRODUCTOS</h1></center>
<!-- COMIENZO DE COLLAGE FOTOS -->
        <div class="slideshow-container">
            <div class="mySlides fade">
            <div class="numbertext"></div>
                <img src="../img/111.jpg" style="width:1099px;">
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="../img/222.jpg" style="width:1099px">
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="../img/333.jpg" style="width:1099px">
            </div>
        </div>
<br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div> 

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script> 
<!-- FINAL COLLAGE DE FOTOS -->

<!-- SECCION DE TEXTO -->

        <div class="contenedorSeccionesServicios py-4"> 
            <div class="row  justify-content-center espacio" >
                <div class="col-xl-10 col-lg-10 col-md-10 col-10 text-center text-lg-left py-2">
                    <div class="row  justify-content-center espacio" >
<!--INTRO-->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center text-lg-left py-2">
                            <div class="white-text" >
                                <h1 class="h1-responsive  wow fadeInLeft subtitulo" data-wow-delay="0.3s" style="text-align: left">Nos especializamos</h1>
                                <p class="parrafoIcono py-2" data-wow-delay="0.3s" style="text-align: left" >En  la  elaboración  de  camisetas  tipo  T-Shirt, Polos,  Linea  Blanca  y Moda lo cual nos hace expertos en el momento de asesorar a nuestros clientes y darles el acompañamiento indicado a todos sus proyectos.<br><br>Todo comienza con un sueño y un hilo y termina en tus manos.  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- CONTENIDO PRINCIPA -->
          <div class="producto">
              <div class="container mt-40">
              <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                  <div class="box14">
                    <img class="pic-1" src="../img/1.jpg">
                      <div class="box-content">
                        <h3 class="title">LISOS</h3>
                          <span class="post">
                            <img src=" https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%206-web1.png" style="height: 70px; width: 70px;">
                            <center><h5>"Fabricamos  camisetas tipo T-Shirt en diferentes bases textiles y colores que se ajustan a  las  necesidades  actuales  del  mercado."</h5></center>
                          </span>
                          <ul class="icon">
                            <li>
                              <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                                <i class="fa fa-whatsapp" style="height: 70px;"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </div>
      <!-- 2 -->
                  <div class="col-md-4 col-sm-6">
                    <div class="box14">
                      <img class="pic-1" src="../img/2.jpg">
                      <div class="box-content">
                        <h3 class="title">POLOS</h3>
                          <span class="post">
                            <img src="https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%207-web1.png" style="height: 70px; width: 70px;">
                            <center><h5>"Nuestra  camiseta  tipo  Polo  es  perfecta  para  dotaciones  empresariales  o  moda,  contamos con mas de 25 colores en referencias para Hombre, Dama y Polo escolar en colores. "</h5></center>
                          </span>
                          <ul class="icon">
                            <li>
                              <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                                <i class="fa fa-whatsapp" style="height: 70px;"></i>
                              </a>
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
    <!-- 3 -->
                  <div class="col-md-4 col-sm-6">
                    <div class="box14">
                      <img class="pic-1" src="../img/3.jpg">
                      <div class="box-content">
                        <h3 class="title">LINEA BLANCA</h3>
                          <span class="post">
                            <img src="https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%208-web1.png" style="height: 70px; width: 70px;">
                            <center><h5>"Impecable,  fresca,  suave  y  de  alta  durabilidad,  así  es  nuestra  línea  blanca para hombre y dama en diferentes diseños que se ajustan a tus necesidades."</h5></center>
                          </span>
                          <ul class="icon">
                            <li>
                              <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                                <i class="fa fa-whatsapp" style="height: 70px;"></i>
                              </a>
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
    <!-- 4 -->
                  <div class="col-md-4 col-sm-6">
                    <div class="box14">
                      <img class="pic-1" src="../img/3.jpg">
                      <div class="box-content">
                        <h3 class="title">LINEA BLANCA</h3>
                        <span class="post">
                          <img src="https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%208-web1.png" style="height: 70px; width: 70px;">
                          <center><h5>"Impecable,  fresca,  suave  y  de  alta  durabilidad,  así  es  nuestra  línea  blanca para hombre y dama en diferentes diseños que se ajustan a tus necesidades."</h5></center>
                        </span>
                        <ul class="icon">
                          <li>
                            <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                              <i class="fa fa-whatsapp" style="height: 70px;"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
    <!-- 5 -->
                  <div class="col-md-4 col-sm-6">
                    <div class="box14">
                      <img class="pic-1" src="../img/4.jpg">
                        <div class="box-content">
                          <h3 class="title">MODA</h3>
                          <span class="post">
                            <img src="https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%209-web1.png" style="height: 70px; width: 70px;">
                            <center><h5>"Impecable,  fresca,  suave  y  de  alta  durabilidad,  así  es  nuestra  línea  blanca para hombre y dama en diferentes diseños que se ajustan a tus necesidades."</h5></center>
                          </span>
                          <ul class="icon">
                            <li>
                              <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                                <i class="fa fa-whatsapp" style="height: 70px;"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
    <!-- 6 -->
                  <div class="col-md-4 col-sm-6">
                    <div class="box14">
                      <img class="pic-1" src="../img/5.jpg">
                      <div class="box-content">
                        <h3 class="title">LISOS</h3>
                        <span class="post">
                          <img src=" https://positex.co/img/PXT%20IconosMesa%20de%20trabajo%206-web1.png" style="height: 70px; width: 70px;">
                          <center><h5>"Fabricamos  camisetas tipo T-Shirt en diferentes bases textiles y colores que se ajustan a  las  necesidades  actuales  del  mercado."</h5></center>
                        </span>
                        <ul class="icon">
                          <li>
                            <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                              <i class="fa fa-whatsapp" style="height: 70px;"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
          </div>
<!-- FIN DE CONTENIDO -->

<!-- COMIENZO PRODUCTOS -->
        <section  class="style py-3" style="padding:4%; margin-bottom: 30px; background-color: white;">
            <div class="row  justify-content-center espacio py-3" >
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 py-4" >
                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s" >Nuestros procesos</h1>
                </div>             
            
               <div class="col-xl-12 col-lg-12 col-md-12 col-12 py-0 espacio d-none d-sm-none d-md-block" >

                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 14-web1.png" >
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 11-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 15-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 16-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 17-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 10-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 18-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 19-web1.png" > 
              
              </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 py-0 d-none d-sm-none d-md-block" >
                <div> 
              <label class="tituloIconosGrandesProductosIconos" > <h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;"> Investigación</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Diseño</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Desarrollo</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Muestras</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Pedido</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Abastecimiento</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Producción</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Logística</h1></label>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 py-0 d-block d-sm-block d-md-none"  >

                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 14-web1.png" >
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 11-web1.png" >
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 15-web1.png" >
                
                <label class="tituloIconosGrandesProductosIconos" > <h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;"> Investigación</h1>
                </label>
                <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Diseño</h1>
                </label>
                <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Desarrollo</h1>
                </label>
                
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 16-web1.png" >  
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 17-web1.png" > <img class=" imgIconosProdu" src="img/PXT IconosMesa de trabajo 10-web1.png" > 
              
                <label class="tituloIconosGrandesProductosIconos" >
                    <h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Muestras</h1>
                </label>
                <label class="tituloIconosGrandesProductosIconos" >
                    <h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Pedido</h1>
                </label>
              <label class="tituloIconosGrandesProductosIconos" >
                    <h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Abastecimiento</h1>
                </label>
             

                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 18-web1.png" > 
                <img class=" imgIconosProdu" src="../img/PXT IconosMesa de trabajo 19-web1.png" > 
                <br>
                <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Producción</h1></label>
              <label class="tituloIconosGrandesProductosIconos" ><h1 class="tituloIconosGrandesProductosIconos2" style="text-align: center;">Logística</h1></label>
              </div>
           
        </section>
<!-- FOOTER CONTACT -->
        <footer class="section footer-classic context-dark bg-image" style="margin-left: -210px; width: 1524px; margin-top: -30px;">
            <div class="container">
                <div class="row row-30">
                    <div class="col-md-4 col-xl-5">
<!-- LOGO -->
                        <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="../img/logofooter.png" alt="" width="340" height="70" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
<!-- INSTAGRAM -->
                            <div class="face" style="margin-left: 50px; margin-top: 10px;">
                                <div class="col-xl-2 col-lg-3 col-md-2 col-2 py-0 " style="padding-left: 0px;padding-right: 0px;">
                                    <a class="nav-link " style="color:white;" href="https://www.instagram.com/positex.co/"  target="_blank">
                                    <img class=" iconosColor" src="../img/insta.png" style="height: 60px;"></a>
                                </div> 
                                <div class="col-xl-4 col-lg-8 col-md-4 col-4 py-2 redesSociales" style="padding-left: 10px; margin-top: -10px;" >
                                    <h6 class="redesSociales" style="color: white;">positex.co</h6> 
                                </div>
                            </div>
<!-- FACEBOOK -->
                            <div class="face" style="margin-left: 200px; margin-top: -110px;">
                                <div class="col-xl-2 col-lg-3 col-md-2 col-2 py-0 " style="padding-left: 0px;padding-right: 0px;">
                                    <a class="nav-link " style="color:white;" href="https://www.facebook.com/Positex.co/"  target="_blank">
                                    <img class=" iconosColor2" src="../img/face.png" style="height: 60px;"></a>
                                </div> 
                            <div class="col-xl-4 col-lg-8 col-md-4 col-4 py-2 redesSociales" style="padding-left: 10px; margin-top: -10px;" >
                                <h6 class="redesSociales" style="color: white;">positex.co</h6> 
                            </div>
                        </div>
<!-- WHATSAPP -->
                        <div class="face" style="margin-left: 120px; margin-top: -10px;">
                            <div class="col-xl-2 col-lg-3 col-md-2 col-2 py-0 " style="padding-left: 0px;padding-right: 0px;">
                                <a class="nav-link " style="color:white;" href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber..."  target="_blank">
                                <img class=" iconosColor3" src="../img/what.png" style="height: 60px;"></a>
                            </div> 
                        <div class="col-xl-4 col-lg-8 col-md-4 col-4 py-2 redesSociales" style="padding-left: 10px; margin-top: -10px;" >
                            <h6 class="redesSociales" style="color: white; margin-left: -20px;">(+57)3176568738</h6> 
                        </div>
                    </div>
                </div>
            </div>
          
<!-- DIRECCIONES -->
            <section id="footer">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>CALI</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a>C.C EL TESORO</a></li>
                                <li><a>Cra 7a # 13 - 70</a></li>
                                <li><a>Local 925</a></li>
                                <li><a>321 625 49 07</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>C.C ARISTI</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a>Calle 11 # 9 - 20</a></li>
                                <li><a>Local 316 - 317 - 318</a></li>
                                <li><a>314 455 53 95</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <h5>LA PRIMERA</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a>Cra 1 # 20 - 02</a></li>
                                <li><a>317 529 08 70</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4" style="margin-top: 20px;">
                            <h5>MEDELLIN</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a>C.C EL DORADO</a></li>
                                <li><a>Cra 52 A # 45 - 33</a></li>
                                <li><a>Local 143</a></li>
                                <li><a>318 373 40 79  </a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4" style="margin-top: 20px;">
                            <h5>C.C ARISTI</h5>
                            <ul class="list-unstyled quick-links">
                                <li><a>Calle 11 # 9 - 20</a></li>
                                <li><a>Local 316 - 317 - 318</a></li>
                                <li><a>314 455 53 95</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </section>
            <button class="button">
                    <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber...">
                    </a>Pedidos<strong>317 656 87 38</strong>
            </button>
        </footer>
<!-- BOTON FLOTANTE WHATSAPP -->
        <a href="https://api.whatsapp.com/send?phone=57317%206568738&text=Hola,%20me%20gustar%C3%ADa%20saber..." class="btn-wsp" target="_blank">
            <i class="fa fa-whatsapp icono" style="margin-top: 14px;"></i>
        </a>
    </body>
</html>