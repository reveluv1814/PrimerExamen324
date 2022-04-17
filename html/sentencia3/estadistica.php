<?php
    session_start();
    $usuario=$_SESSION['nombre_usuario'];
    if($usuario == null || $usuario == ''){
        echo '<h1>Usted no tiene Autorización</h1>';
        die();
    }
    else{
        include ('header.php');
        echo "<h2 style= 'widt:10%;background-color:#F7AA00; margin-left:3%;margin-right:80%;padding:5px;border-radius:10px 10px 0 0; font-size:30px;color:black; font-weight: 300;'>Bienvenido $usuario</h2>";
    }
?>
   <div class= "carrera">
        <h1>Carrera de Estadística</h1>
        <p>Excelencia en la Formación Profesional en el área de Estadística</p>
        <section id="intro">
            <div class="intro-container">
                <div class="imgblock" style="background-image:linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url(imagenes/esta2.jpg);">
                    
                </div>
                <div class="row">
                    <div class="block">
                        <div class="section-title">
                            <h2>Misión</h2>
                            <p>Formar profesionales idóneos y competentes en el campo de la estadística, capaces de resolver problemas de forma creativa, innovadora y ética con la utilización de la tecnología, los conocimientos científicos y comprometidos con el desarrollo sostenible del país.</p>
                        </div>
                    </div>

                    <div class="block">
                        <div class="section-title">
                            <h2>Visión</h2>
                            <p>La Carrera de Estadística es Líder en la formación de profesionales en la ciencia de la estadística, buscando la excelencia académica a través del desarrollo de la docencia, investigación y extensión. Capacitados para impulsar el desarrollo del país con conocimiento de la realidad nacional, dotados de recursos científicos, informativos y técnicos al servicio de la población.</p>
                        </div>
                    </div>

                </div>
        </section>
        <div class="reflexion">
            <h2>Formar profesionales idóneos y competentes en el campo de la estadística, capaces de generar y difundir conocimiento científico, con pensamiento reflexivo-crítico, innovador y creativo, de apoyo a los procesos de toma de decisiones, comprometidos con el desarrollo sostenible del país. <br>
Desarrollar y difundir la ciencia, la tecnología y la cultura en general dentro y fuera de la carrera de Estadística.</h2>
        </div>
    </div>
<?php
    include 'footer.php';
?>