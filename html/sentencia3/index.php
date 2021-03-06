<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
    <link rel="stylesheet" href="./css/acceso.css?1.0">
    <!--<link rel="stylesheet" href="./css/style.css?1.0">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png"  href="imagenes/logoicon.png" sizes="30x30" >

    <title>FCPN INF-324</title>
    
    </head>
<body>

        <div class="login-form">
            <div id="logo"><img src="imagenes/logo2.png" alt="" width="120px" height="120px" style="margin-left: 30%;margin-bottom:20px;"></div>
            <!--form con el metodo POST hacia acceso.php-->
            <form action="sesion.php" method="post">
                <div class="form-group ">
                    <input type="text" class="form-control" placeholder="Username" id="UserName" name="login">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group log-status">
                    <input type="password" class="form-control" placeholder="Password" id="Passwod" name="pass">
                    <i class="fas fa-lock"></i>
                </div>
                <span class="alert">Credenciales no Válidas</span>
                <a class="link" href="#">¿Perdiste tu contraseña?</a>
                <button type="submit" class="log-btn" >Acceso</button>
            </form>
        </div>



</body>

<script>  
    /*$(document).ready(function(){
    $('.log-btn').click(function(){
           $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });*/
</script>

</html>