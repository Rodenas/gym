<!DOCTYPE html>
<html lang="es">

<head>
	<!-- caracter en lenguaje humano -->
  <meta charset="UTF-8">
	<!-- Vista distintas ventanas -->
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<!-- Informacion de la pagina -->
  <meta name="Sistema web para gimnasio" content="Pagina de login"/>
	<!-- Etiquetas para los buscadores -->
  <meta name="keywords" content="Sistema web, gimnasio, login"/>

	<!-- Bootstrap-->
  <link rel="stylesheet" href="../dir/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="../dir/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

  <!-- Script JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="css/estiloHome.css">
	
	<!-- Logo Icono -->
  <link href="img/LogoSF.png" rel="icon" type="image/png">

	<title>Formulario Ingreso- a5-g6-gimnasio</title>
</head>

<body id="estiloBody">

  <header class="menu container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark estilo_navbar">
      <div class="container-fluid"> <!--container-fluid para que ocupe todo el ancho disponible-->
        <a href="index.html">
          <img class="CssImage" href="index.html" src="img/LogoSF.png" width="70" height="70" alt="Imagen logo"/>
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="MenuNavegacion" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-3">
            <li class="nav-item"><a href="index.html"> Home </a></li>
            <li class="nav-item"><a href="sobre_nosotros.html">Equipo</a></li>
            <li class="nav-item"><a href="contacto.html"> Contacto </a></li>
            <li class="nav-item"><a href="form_ingreso.html"> Login </a></li>
            <li class="nav-item"><a href="alta_cliente.html"> Alta Cliente </a></li>
            <li class="nav-item"><a href="help.html"> Ayuda </a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <br>

  <div id="Idbreadcrumbs1" class="container">
    <ul>
      <li><a href="index.html"> Home > </a></li>
      <li><a> Login </a></li>
    </ul>
  </div>

  <section id="cuerpoPagina">
    <div class="container encabezado">        
      <?php          
        //Validar que los campos no sean NULL
        if(isset($_POST['txtUsuario']) && isset($_POST['txtClave']))
        {
          // Obtener los valores de formulario, variables $_POST[]
          $u = $_POST['txtUsuario'];
          $c = $_POST['txtClave'];

          if($u == "" || $c == ""){ // Validamos que ningún campo quede vacío
            echo "<script> alert('Error: usuario y/o clave vacios!!'); </script>"; // Se utiliza Javascript dentro de PHP
            echo "<script type=\"text/javascript\">
                    window.location.href = \"form_ingreso.html\";
                  </script>";
          }else{
            include("Conexion/conexion.php");

            // Cadena de SQL
            $sql = "SELECT * FROM `PrUsuario`";

            // Ejecuto cadena query()
            if(!$consulta = $conexion->query($sql)){
              echo "ERROR: no se pudo ejecutar la consulta!";
            }else{
              //Comprobar si hubo un error en la conexion
              if (mysqli_connect_errno())
              {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              
              $query = $mysqli -> query ("SELECT * FROM `PrUsuario` WHERE `usuario` = '$u' AND `Clave` = '$c'");
              
              //Obtener numero de registros encontrados
              $filas = mysqli_num_rows($query);

              // Comparo cantidad de registros encontrados
              if($filas == 0){
                echo "<script> alert('Error: usuario y/o clave incorrectos!!'); </script>";
                echo "<script type=\"text/javascript\">
                        window.location.href = \"form_ingreso.html\";
                      </script>";	
              }else{

                //Mostrar los datos en el HTML
                while ($fila = mysqli_fetch_array($query))
                {
                  echo "<td>".'<img src="'.$fila['Imagen'].'" width="100" heigth="100"/>'."</td>"."<br>";
                  echo "<h2>"." Id: ".$fila['IdUsuario']."</h2>";
                  echo "<h1>"." Usuario: ".$fila['usuario']."</h1>";
                  echo "<h2>"." DNI: ".$fila['DNI']."</h2>";
                  echo "<h2>"." Nombre: ".$fila['Nombre']."</h2>";
                  echo "<h2>"." Apellido: ".$fila['Apellido']."</h2>";
                }

                mysqli_close($mysqli);
              }
            }
          }
        }
      ?>
    </div>
  </section>
  
	<footer>
    <nav class="navbar navbar-light bg-light quitarMargenInferior">
      <div class="container-fluid">
        <img src="img/LogoSF.png" alt="" width="25" height="25" class="d-inline-block align-text-top" href="index.html">
        <a href="index.html">Home</a>
        <a href="sobre_nosotros.html">Equipo</a>
        <a href="contacto.html"> Contacto </a>
        <a href="form_ingreso.html"> Login </a>
        <a href="help.html"> Ayuda </a>
      </div>
    </nav>
  </footer>

  <!-- Minified JS library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Compiled and minified Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  <script src="dir/js/bootstrap.min.js"></script>
  
</body>
</html>
