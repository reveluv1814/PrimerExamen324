
<form action="CreatePersona.php" class="form-registro row" method="POST" enctype = "multipart/form-data">
            <div class="col-50">
                <label for="">C.I.</label>
                <input type="text" class="form-control" name = "ci" id ="ci" value = ""></textarea>
                <label for="">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" name = "nombrec" id ="nombrec" value = ""></textarea>
                <label for="">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name = "fecha_nac" id ="fecha_nac" value = ""></textarea>
                <label for="">DEPARTAMENTO</label>
                <select name = "departamento">
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
                </select>
                
            </div>
            <div class="col-50">
                <label for="">NOMBRE DE USUARIO</label>
                <input type="text" class="form-control" name = "user" id ="user" value = ""></textarea>
                <label for="">CONTRASEÑA DE USUARIO</label>
                <input type="password" class="form-control" name = "pass" id ="pass" value = ""></textarea>
                <label for="">ROL</label>
                <select name = "rol">
                    <option value="1">Administrador</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Director</option>
                    <option value="4">Profesor</option>
                </select>
                <input type="submit" class="form-control blue" value="Crear">
            </div>
            
        </form>
