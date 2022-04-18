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
        <h1>Carrera de Informática</h1>
        <p>Excelencia en la Formación Profesional en el área de Informática</p>
        <section id="intro">
            <div class="intro-container">
                <div class="imgblock" style="background-image:linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url(imagenes/info.png);">
                    
                </div>
                <div class="row">
                    <div class="block">
                        <div class="section-title">
                            <h2>Misión</h2>
                            <p>Formar profesionales idóneos con calidad humana, ética, valores, excelencia científica, compromiso social, capacidad crítica y creativa para potenciar el desarrollo de la ciencia y la tecnología en el área de la Informática en concordancia con los requerimientos de la sociedad y sus instituciones, desempeñándose con éxito en el ámbito regional, nacional e internacional.</p>
                        </div>
                    </div>

                    <div class="block">
                        <div class="section-title">
                            <h2>Visión</h2>
                            <p>Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática, que aporta a la región y el país no solo con sus graduados sino también con proyectos de investigación y extensión de alto impacto relacionados con ciencia y tecnología.</p>
                        </div>
                    </div>

                </div>
        </section>
        <div class="reflexion">
            <h2>Grandes y nuevos son los retos y roles que debe enfrentar la Carrera de Informática para estar a la par del desarrollo tecnológico, mejorar la calidad de los planes académicos y el proceso de enseñanza-aprendizaje.</h2>
        </div>
    </div>
<?php
    include 'footer.php';
?>