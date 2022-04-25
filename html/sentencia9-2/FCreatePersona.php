<link rel="stylesheet" href="public/css/acceso.css?2.0">
<div class="login-form">
    <h1>Ingresa los Datos de la Nueva Persona</h1>
    <form action="CreatePersona.php" class="form-registro row" method="POST" enctype="multipart/form-data">
        <div class="col-50">
            <div class="form-group ">
                <label class="texto" for="">C.I.</label>
                <input type="text" class="form-control" name="ci" id="ci" value=""></textarea><br>
                <label class="texto" for="">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" name="nombrec" id="nombrec" value=""></textarea><br>
                <label class="texto" for="">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" value=""></textarea><br>
                <label class="texto" for="">DEPARTAMENTO</label>
                <select name="departamento" class="form-control">
                    <option value="seleccionar">Seleccionar</option>
                    <option value="01">Sucre</option>
                    <option value="02">La Paz</option>
                    <option value="03">Cochabamba</option>
                    <option value="04">Oruro</option>
                    <option value="05">Potosi</option>
                    <option value="06">Tarija</option>
                    <option value="07">Santa Cruz</option>
                    <option value="08">Beni</option>
                    <option value="09">Pando</option>
                </select><br>

            </div>
            <div class="col-50">
                <label class="texto" for="">NOMBRE DE USUARIO</label>
                <input type="text" class="form-control" name="user" id="user" value=""></textarea><br>
                <label class="texto" for="">CONTRASEÑA DE USUARIO</label>
                <input type="password" class="form-control" name="pass" id="pass" value=""></textarea><br>
                <label class="texto" for="">ROL</label>
                <select name="rol" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Director</option>
                    <option value="4">Profesor</option>
                </select><br><br>
                <input type="submit" class="log-btn" value="Crear">
                <input type="submit" onclick="crud.php" class="log-btn2" value="Cancelar">
            </div>
        </div>

    </form>