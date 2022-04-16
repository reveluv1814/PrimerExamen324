<?php
    include 'header.php';
?>  

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
        
<?php
    include 'footer.php';
?>  
