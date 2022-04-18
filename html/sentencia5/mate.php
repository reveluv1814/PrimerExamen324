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
        <h1>Carrera de Matemática</h1>
        <p>Excelencia en la Formación Profesional en el área de Matemática e investigación.</p>
        <section id="intro">
            <div class="intro-container">
                <div class="imgblock" style="background-image:linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url(imagenes/mat.jpg);">
                    
                </div>
                <div class="row">
                    <div class="block">
                        <div class="section-title">
                            <h2>Misión</h2>
                            <p>La Carrera de Matemática, como parte del Sistema Universitario público boliviano, es una institución de generación, transmisión y aplicación de conocimientos matemáticos, orientada hacia la investigación, la formación de profesionales calificados y al fortalecimiento de la enseñanza de la matemática a todo nivel.</p>
                        </div>
                    </div>

                    <div class="block">
                        <div class="section-title">
                            <h2>Visión</h2>
                            <p>Ser la Unidad nacional modelo de eficiencia, desarrollo e impacto social en Matemática que brinda formación sólida en pregrado y postgrado. Apoyar y contribuir al desarrollo científico y tecnológico de Bolivia a través de la resolución de problemas que competen a sus áreas de interés.</p>
                        </div>
                    </div>

                </div>
        </section>
        <div class="reflexion">
            <h2>La Carrera de Matemática es una Unidad Académica dependiente de la Facultad de Ciencias Puras y Naturales (FCPN) de la Universidad Mayor de San Andrés (UMSA), cuya misión principal es la formación profesional en Matemática a nivel superior y desarrollar la investigación matemática dentro del Instituto de Investigación Matemática (IIMAT). </h2>
        </div>
    </div>
<?php
    include 'footer.php';
?>