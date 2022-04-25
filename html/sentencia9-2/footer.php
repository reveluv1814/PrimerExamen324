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
            <div class="footer-container" style="background-image:url(public/imagenes/school.jpg);">
                <div class="footer-overlay">
                    <div class="footer-intro">
                        <img id="logofcpn"src="public/imagenes/logo2.png">    
                        <h3>Síguenos</h3>                     
                        <img src="public/imagenes/umsa.png" style="width: 3.5%;height: 3.5%">
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

<script src="public/js/main.js"></script>

</html>