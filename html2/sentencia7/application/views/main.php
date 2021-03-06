<?php
    $this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <!--<link rel="stylesheet" href="./css/style.css?1.0">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png"  href="imagenes/logoicon.png" sizes="30x30" >

    <title>FCPN INF-324</title>
</head>
<body>
    <div id="page">
        <nav class="nav">  
            <div class="container-nav">
                    <div class="col1">
						<div id="logo"><a href="index.php"><img src="imagenes/logo1.png" alt=""></a></div>
					</div>
                    <div class="col2">
                        <ul>
					        <li><a href="index.php">Inicio</a></li>
					        <li><a href="info.php">Informática</a></li>
					        <li><a href="estadistica.php">Estadística</a></li>
					        <li><a href="mate.php">Matemática</a></li>
					        <li class="btn-cta"><a href="#"><span>Acceder</span></a></li>
					        <li class="btn-cta"><a href="#"><span>SignIn</span></a></li>
				        </ul>
                    </div>
            </div>  
        </nav>        

        <section id="container-slider"> 
            <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
              <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
              <li><a itlist="itList_1" href="#"></a></li>
              <li><a itlist="itList_2" href="#"></a></li>
              <li><a itlist="itList_3" href="#"></a></li>
            </ul>
            <ul id="slider">
              <li style="background-image: url('imagenes/slide4.png'); z-index:0; opacity: 1;">
                <div class="content_slider" >
                    <div>
                        <p>Al Servicio de la Sociedad</p>
                        <h2>HACIENDO CIENCIA E INVESTIGACIÓN</h2>
                    </div>
                </div>
              </li>
              <li style="background-image: url('imagenes/slide1.png'); ">
                <div class="content_slider" >
                    <div>
                        <p>FACULTAD DE CIENCIAS PURAS Y NATURALES</p>
                        <h2>Excelencia en la Formación Profesional</h2>
                    </div>
                </div>
              </li>
              <li style="background-image: url('imagenes/slide3.png'); ">
                <div class="content_slider" >
                    <div>
                        <p>Lograr que nuestra Facultad</p>
                        <h2>Forme profesionales altamente calificados en ciencia y tecnología.</h2>
                    </div>
                </div>
              </li>
              <li style="background-image: url('imagenes/slide5.png'); ">
                <div class="content_slider" >
                    <div>
                        <p>Aportanto a la Investigación</p>
                        <h2>Conduciendo proyectos de Investigación científica en el área de la Ciencia</h2>
                    </div>
                </div>
              </li>
            </ul>
        </section>


        <section id="info">
            <div class="container">
                <!-- card1  -->
                <div class="card">
                    <img class="image" src="imagenes/infologo.png" alt="informática">
                    <div class="overlay">
                        <div class="text">
                            <b>Carrera de Informática</b> <br>
                            Carrera que potencia el desarrollo de la ciencia y la tecnología en el área de la Informática.
                        </div>
                        <button type="button" name="button"><a href='info.php' alt='Broken Link'>Visitar</a></button>

                    </div>
                </div>
                <!-- card2  -->
                <div class="card">
                    <img class="image" src="imagenes/esta.jpg" alt="estadística">
                    <div class="overlay">
                        <div class="text">
                            <b>Carrera de Estadística</b> <br>
                            La Carrera de Estadística es Líder en la formación de profesionales en la ciencia de la estadística.
                        </div>
                        <button type="button" name="button"><a href='estadistica.php' alt='Broken Link'>Visitar</a></button>

                    </div>
                </div>
                <!-- card3  -->
                <div class="card">
                    <img class="image" src="imagenes/mate.png" alt="matemática">
                    <div class="overlay">
                        <div class="text">
                            <b>Carrera de Matemática</b><br>
                            Carrera a la formación de profesionales calificados y al fortalecimiento de la enseñanza de la matemática a todo nivel.
                        </div>
                        <button type="button" name="button"><a href='mate.php' alt='Broken Link'>Visitar</a></button>
                    </div>
                </div>

            </div>
        </section>
        
<!--FOOTER-->
<section id="contacto">
            <div id="contacto-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.3569777339331!2d-68.13029897078201!3d-16.504480913440315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21ef47ebd1fb%3A0xf4df4ed38c2dc9d!2sFacultad%20de%20Ciencias%20Puras%20y%20Naturales%20-%20UMSA!5e0!3m2!1ses!2sbo!4v1650139949346!5m2!1ses!2sbo" width="600" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div id="textcontact">
                    
                    <h3>Dirección de visita</h3>
                    <h4>Nos encontramos en:</h4>
                    <div id="contenidocontacto">
                        <p><i class="fas fa-map-marker-alt"></i>Av. Villazón N° 1995, Plaza del Bicentenario – Zona Central<br>
                        <i class="fab fa-facebook"></i>Facebook: Dame_unaPata <br>    
                        <i class="fas fa-phone-square"></i>Telf: 261-2901/2440571 <br>
                        <i class="fas fa-envelope"></i>Correo: decanato@fcpn.edu.bo <br>
                        </p>
                        <h5>Cualquier donación nos ayudaría</h5>
                    </div>

                </div>
            </div>
        </section>

        <footer>
            <div class="footer-container" style="background-image:url(imagenes/school.jpg);">
                <div class="footer-overlay">
                    <div class="footer-intro">
                        <img id="logofcpn"src="imagenes/logo2.png">    
                        <h3>Síguenos</h3>                     
                        <img src="imagenes/umsa.png" style="width: 3.5%;height: 3.5%">
                    </div>

                    <div class="redessol">
                        <a href="" class="fenlaces"><i class="fab fa-facebook"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-instagram"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-twitter"></i></a>
                        <a href="" class="fenlaces"><i class="fab fa-linkedin-in"></i></a>

                    </div>

                    <div>
                        <p class="footer-copy">Copyright &copy; 2022 Neil Graneros</p>
                    </div>

                </div>
               
               

            </div>
        </footer>
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>




        <script>
            $(document).ready(function(){

              $(window).scroll(function(){
                if($(this).scrollTop() > 40){
                  $('#topBtn').fadeIn();
                } else{
                  $('#topBtn').fadeOut();
                }
              });

              $("#topBtn").click(function(){
                $('html ,body').animate({scrollTop : 0},800);
              });
            });
        </script>      
        
       

    </div>



<div class="fh5co-loader"></div>

</body>

<script src="js/main.js"></script>

</html>