<!DOCTYPE html>
<html lang="es">
 	<!-- caracter en lenguaje humano -->
  <meta charset="UTF-8">
	<!-- Vista distintas ventanas -->
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<!-- Informacion de la pagina -->
  <meta name="Sistema web para gimnasio" content="Pagina de inicio"/>
	<!-- Etiquetas para los bucadores -->
  <meta name="keywords" content="Sistema web, gimnasio, entrenamiento"/>

<head>

    
	<!-- Script JS -->
	<script src="../dir/js/bootstrap.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="js/Archivo.js"></script>
	<script type="text/javascript" src="js/funcionesGrupo6.js"></script>
	<!-- Estilo Alertas -->
	<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<!-- CSS -->
	<link rel="stylesheet" href="../dir/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloHome.css">
	<link rel="stylesheet" href="css/Formregistro.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	
	<!-- Logo Icono -->
    <link href="img/LogoSF.png" rel="icon" type="image/png">
	
	<!-- Titulo -->
    <title>Logeado</title>
</head>

<body id="estiloBody">
    
	<header class="menu">
				<nav>
					<ul>
        <li class="CssImage"><a href="index.html"><img class="CssImage" src="img/LogoSF.png" width="70" height="70" alt="Imagen logo"/></a></li>
  		<li><a href="index.html"> Home </a></li>
		<li><a href="sobre_nosotros.html">Equipo</a></li>
		<li><a href="contacto.html"> Contacto </a></li>
        <li><a href="form_ingreso.html"> Login </a></li>
		<li><a href="alta_cliente.html"> Alta Cliente </a></li>
		<li><a href="help.html"> Ayuda </a></li>
		</ul>
	</nav>
	</header>
  <main>
	
  <div class="container estiloHome">
    <div class="row">
      
      <div class="col">
       
    
  </div>


    <br>
    <section>
    <div class="container ">

      <div class="col CentroHome" >


<table border=1 align="center">
<tr>
<td border=1 colspan="4" align="center" bgcolor="#E6E7E8">


  <p><B>Usuarios</B></p>
  </td>
</tr>
<TR bgcolor="#E6E7E8">
<TD><B>IdUsuario</B></TD>
<TD><B>DNI</B></TD>
<TD><B>Nombre</B></TD>
<TD><B>Apellido</B></TD>

</TR>

<p>
					   

  <?php

$mysqli = new mysqli("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = $mysqli -> query ("SELECT * FROM `PrUsuario`");


  while ($fila = mysqli_fetch_array($query))

{

	  
echo "<TR>\n";
//echo "<td>".'<img src="'.$fila['Imagen'].'" width="50" heigth="50"/>'."</td>\n";
echo "<td>".$fila['IdUsuario']."</td>\n";
echo "<td>"."  ".$fila['DNI']."</td>\n";
echo "<td>"."  ".$fila['Nombre']."</td>\n";
echo "<td>"."  ".$fila['Apellido']."</td>\n";

echo "</TR>\n";
}
						 
//echo "</table>";

?>
				   
</table>
      </div>
      
  </main>
  
<br>
	<footer>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
     
        
          <img src="img/LogoSF.png" alt="" width="25" height="25" class="d-inline-block align-text-top" href="index.html">
		<a href="index.html"> Home </a>
         <a href="sobre_nosotros.html">Equipo</a>
        <a href="contacto.html"> Contacto </a>
        <a href="form_ingreso.html"> Login </a>
        <a href="help.html"> Ayuda </a>
      </div>
    </nav>

  </footer>
</body>

</html>