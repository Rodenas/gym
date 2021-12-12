 <?php
$host = "168.197.48.110";
$usr = "c2110488_PrIspc";
$clave = "98movadoDO";
$db = "c2110488_PrIspc";

$mysqli = new mysqli($host,$usr,$clave,$db);


$conexion = new mysqli('168.197.48.110','c2110488_PrIspc','98movadoDO','c2110488_PrIspc');
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";

?>