<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Sentencia.aspx.cs" Inherits="Sentencia8.Sentencia" %>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
    <link rel="stylesheet" href="Assets/css/style.css">
    <!--<link rel="stylesheet" href="./css/style.css?1.0">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png"  href="Assets/imagenes/logoicon.png" sizes="30x30" >

    <title>FCPN INF-324</title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            height: 155px;
        }
        .auto-style3 {
            text-align: center;
            font-weight: normal;
            font-size: xx-large;
            color: #FFFFFF;
            background-color: #003366;
        }
        .auto-style4 {
            width: 354px;
        }
        .auto-style5 {
            width: 607px;
        }
        .auto-style6 {
            width: 607px;
            height: 30px;
        }
        .auto-style7 {
            width: 354px;
            height: 30px;
        }
        .auto-style8 {
            height: 56px;
        }

        /* grid css right panel */
.admin_mGrid_header {
    background-image: url(../images/accord_bg.jpg);
    background-repeat: repeat-x;
    margin: 0 0 1px 0;
    font-size: 14px;
    font-weight: bold;
    padding: 3px 0 3px 6px;
}

.admin_mGrid {
    width: 60%;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    margin-bottom: 40px;
    background-color: #fff;
    border-collapse: collapse;
    
}

    .admin_mGrid td {
        border: 1px solid #ddd;
        padding: 8px;
        font-size:18px;
    }
    .admin_mGrid td a{
       text-decoration: none;
        padding: 5px;
        background-color: #F56D91;
        color: #fff;
        text-align: center;
        border-radius: 5px;
    }

    .admin_mGrid th {
        padding: 4px 2px;
        color: #fff;
        background: #1D5C63;
        padding-top: 12px;
        padding-bottom: 12px;
        border-left: solid 1px #525252;
        font-size: 15px;
    }

    .admin_mGrid .alt {
        background: #fcfcfc;
    }

    .admin_mGrid .pgr {
        background: #424242;
    }

        .admin_mGrid .pgr table {
            margin: 5px 0;
        }

        .admin_mGrid .pgr td {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align:center;
            background-color: #1D5C63;
            color: white;
        }

        .admin_mGrid .pgr a {
            color: #999;
            text-decoration: none;
        }

    .admin_mGrid .pgr a:hover {
                color: #fff;
                text-decoration: none;
    }
    .add{
    margin-top: 2px;
    padding: 15px;
    background-color: #22577E;
    color: #fff;
    text-align: center;
    border-radius: 10px;
    text-decoration: none;
    text-align: center;
    margin-left: 20%;
    font-size: 25px;
}
    .containerform{
        width:60%;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
        color:#fff;
        padding:30px;
        border-radius:20px;
    }
    .containerform h2{
        margin:30px;
        margin-top:0;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 500;
        font-size: 30px;
        padding:5px;
        background:#003366;
    }
    .textol{
        padding:25px;
        margin:10px;
        font-size:20px;
        color:#000000;
        font-weight:300;
    }
    .form-control{
  width:12%;
  height:30px;
  border:none;
  padding:5px 5px 5px 15px;
  background:#fff;
  color:#424242;
  border:2px solid #ddd;
  border-radius:10px;
  line-height:50px;
  text-align: center;
}
    .form-controlNom{
  width:30%;
  height:25px;
  border:none;
  padding:5px 5px 5px 15px;
  background:#fff;
  color:#424242;
  border:2px solid #ddd;
  border-radius:10px;
  line-height:40px;
  text-align: center;
}
.containerform a {
    text-decoration: none;
        padding: 10px;
        background-color: #39AEA9;
        color: #fff;
        text-align: center;
        font-size:20px;
        border-radius: 5px;
}
.containerform .cancelar{
    text-decoration: none;
        padding: 10px;
        background-color: #EF6D6D;
        color: #fff;
        text-align: center;
        font-size:20px;
        border-radius: 5px;
        margin-left:20px;
}
/*crear*/
.containerform2{
        width:60%;
        text-align:center;
        margin-left:auto;
        margin-right:auto;
        color:#fff;
        padding:30px;
        border-radius:20px;
    }
    .containerform2 h2{
        margin:30px;
        margin-top:0;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 500;
        font-size: 30px;
        padding:5px;
        background:#D29D2B;
    }
    .containerform2 a {
    text-decoration: none;
        padding: 10px;
        background-color: #39AEA9;
        color: #fff;
        text-align: center;
        font-size:20px;
        border-radius: 5px;
}
    </style>
</head>
<body>
    
    <div id="page">
        <nav class="nav">  
            <div class="container-nav">
                    <div class="col1">
						<div id="logo"><a href=""><img src="Assets/imagenes/logo1.png" alt=""></a></div>
					</div>
                    <div class="col2">
                        <ul>
					        <li><a href="Sentencia.aspx">Inicio</a></li>
					        <li><a href="info.html">Informática</a></li>
					        <li><a href="estadistica.html">Estadística</a></li>
					        <li><a href="mate.html">Matemática</a></li>
					        <li class="btn-cta"><a href="Sentencia.aspx"><span>Acceder</span></a></li>
					        <li class="btn-cta"><a href="Sentencia.aspx"><span>Salir</span></a></li>
				        </ul>
                    </div>
            </div>  
        </nav>
        

        <form id="form1" runat="server">
            <div>
                 
                <asp:GridView ID="grilla" runat="server" AutoGenerateColumns="False" DataKeyNames="id_persona"  CssClass="admin_mGrid" PagerStyle-CssClass="pgr" AlternatingRowStyle-CssClass="alt">
                    <Columns>
                        <asp:BoundField DataField="id_persona" HeaderText="ID-PERSONA" />
                        <asp:BoundField DataField="id_acceso" HeaderText="ID-ACCESO" />
                        <asp:BoundField DataField="ci" HeaderText="CI" />
                        <asp:BoundField DataField="nombre_c" HeaderText="NOMBRE COMPLETO" />
                        <asp:BoundField DataField="fecha_nac" HeaderText="FECHA DE NACIMIENTO" />
                        <asp:BoundField DataField="departamento" HeaderText="DEPARTAMENTO" />
                        <asp:TemplateField> 
                            <ItemTemplate>
                                 <asp:LinkButton ID="Editar" runat="server" OnClick="Editar_Click" Text="Editar">Editar</asp:LinkButton>
                                <asp:LinkButton ID="Eliminar" runat="server" OnClick="Eliminar_Click" Text="Eliminar">Eliminar</asp:LinkButton>
                            </ItemTemplate>
                        </asp:TemplateField>
                    </Columns>
                </asp:GridView>
            </div>
            <asp:LinkButton ID="AgregarPersona" runat="server" OnClick="AgregarPersona_Click" CssClass="add" Text="Agregar Persona"></asp:LinkButton>
       
            <!--div editar-->
            <div id="FormEdi" class ="containerform">
                        <h2 class="labelEditar"><asp:Label ID="LabelEditar" runat="server" Text="Ingrese los Datos a Editar"></asp:Label></h2>
                           <asp:Label ID="LabelIDPesona" CssClass="textol" runat="server" Text="ID Persona" Visible="False"></asp:Label> <asp:TextBox ID="TextBoxPersona" CssClass="form-control" runat="server" ReadOnly="True" Visible="False"></asp:TextBox>
                        
                       <asp:Label ID="LabelIdAcceso" CssClass="textol" runat="server" Text="IDACCESO"></asp:Label> <asp:TextBox ID="TextBoxIdAcceso" CssClass="form-control" runat="server"></asp:TextBox>
                        
                        <asp:Label ID="LabelCI" CssClass="textol" runat="server" Text="C.I."></asp:Label><asp:TextBox ID="TextBoxCi" CssClass="form-control" runat="server"></asp:TextBox><br />
                        
                          <asp:Label ID="LabelNombre" CssClass="textol" runat="server" Text="NOMBRE COMPLETO"></asp:Label><asp:TextBox ID="TextBoxNombre" CssClass="form-controlNom" runat="server"></asp:TextBox><br />

                     <asp:Label ID="LabelNac" CssClass="textol" runat="server" Text="FECHA DE NACIMIENTO"></asp:Label><asp:TextBox ID="TextBoxFecha" CssClass="form-control" runat="server"></asp:TextBox>
                   
                    <asp:Label ID="LabelDepa" CssClass="textol" runat="server" Text="DEPARTAMENTO"></asp:Label><select id="SelectDepa" name="D1" CssClass="form-control" multiple="false"
            runat="server">
                        <option value="01">Sucre</option>
                    <option value="02">La Paz</option>
                    <option value="03">Cochabamba</option>
                    <option value="04">Oruro</option>
                    <option value="05">Potosi</option>
                    <option value="06">Tarija</option>
                    <option value="07">Santa Cruz</option>
                    <option value="08">Beni</option>
                    <option value="09">Pando</option>
                        </select><br /><br /><br />
                   
                   
                        <asp:LinkButton ID="edi" runat="server" OnClick="edi_Click">Actualizar</asp:LinkButton> 
                
                </div>
            <!--fin editar-->
            <!--div crear-->
            <div class ="containerform2">
            <!--form agregar-->
                 <h2 class="labelAgregar"><asp:Label ID="LabelAgregar" runat="server" Text="Ingrese los Datos Para Crear una Nueva Persona"></asp:Label></h2>
                          
                        <asp:Label ID="LabelCCI" CssClass="textol" runat="server" Text="C.I"></asp:Label><asp:TextBox ID="TextBoxCCI" CssClass="form-control" runat="server"></asp:TextBox>
                        
                          <asp:Label ID="LabelCNombre" CssClass="textol" runat="server" Text="NOMBRE COMPLETO"></asp:Label><asp:TextBox ID="TextBoxCNombre" CssClass="form-controlNom" runat="server"></asp:TextBox><br />

                     <asp:Label ID="LabelCFecha" runat="server" CssClass="textol" Text="FECHA DE NACIMIENTO(A-M-D)"></asp:Label><asp:TextBox ID="TextBoxCFecha" CssClass="form-control" runat="server"></asp:TextBox>
                   
                    <asp:Label ID="LabelCDepa" CssClass="textol" runat="server" Text="DEPARTAMENTO"></asp:Label><select id="SelectCDepa" CssClass="form-control" name="D1" multiple="false"
            runat="server">
                        <option value="01">Sucre</option>
                    <option value="02">La Paz</option>
                    <option value="03">Cochabamba</option>
                    <option value="04">Oruro</option>
                    <option value="05">Potosi</option>
                    <option value="06">Tarija</option>
                    <option value="07">Santa Cruz</option>
                    <option value="08">Beni</option>
                    <option value="09">Pando</option>
                        </select><br />
                     <asp:Label ID="LabelCNomUs" CssClass="textol" runat="server" Text="Nombre De Usuario(NickName)"></asp:Label><asp:TextBox ID="TextBoxCNUsuario" CssClass="form-control" runat="server"></asp:TextBox>
                   <asp:Label ID="LabelCPass" CssClass="textol" runat="server" Text="Contraseña De Usuario"></asp:Label><input id="Password1" type="password" CssClass="form-control" runat="server" /><br />
                <asp:Label ID="LabelCRol" CssClass="textol" runat="server" Text="Rol"></asp:Label><select id="SelectCRol" CssClass="form-control" name="D2" multiple="false"
            runat="server">
                        <option value="1">Administrador</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Director</option>
                    <option value="4">Profesor</option>
                        </select><br /><br /><br />
                        <asp:LinkButton ID="crear" runat="server" OnClick="crear_Click">Crear</asp:LinkButton>
                <!--termina-->
            
            </div>
            
            <!---->
<!--FOOTER-->
            
            <asp:Label ID="Label1" runat="server" Text="Label" Visible="False"></asp:Label>
            <asp:Label ID="Label2" runat="server" Text="Label" Visible="False"></asp:Label>
            
        </form>
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
    <div class="footer-container" style="background-image:url('Assets/imagenes/school.jpg');">
        <div class="footer-overlay">
            <div class="footer-intro">
                <img id="logofcpn"src="Assets/imagenes/logo2.png">    
                <h3>Síguenos</h3>                     
                <img src="Assets/imagenes/umsa.png" style="width: 3.5%;height: 3.5%">
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


    <div class="fh5co-loader">
           
            
           
            </div>
           

</body>

<script src="Assets/js/main.js"></script>

</html>

   

