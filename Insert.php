 <link rel="stylesheet" type="text/css" href="css/Site.Css">
 <?php include('Web_Config.Php'); ?> 
<?
$first = $_POST['first'];
$apellidoP = $_POST['apellidoP'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

if ($first != "") {
$query = "INSERT INTO $databaseName.Clientes (Nombre_Cliente , ApellidoP_Cliente , Edad , Email , Telefono) VALUES ('$first', '$apellidoP' , '$edad' , '$email' , '$telefono')";

echo $query;
	
  mysqli_query($conn, $query);
  echo "<br/> <br/><br/> Cliente añadido a la base de datos.";
  echo "<h2> <br/> <br/>  <a href='Index.php'> <button>Regresar al menú principal</button> </a> </h2>";
 }
 else
 {
	 echo "<br/> <b> Por favor, escriba el nombre. </b>";
	 echo "<h2> <br/> <br/>  <a href='Add_Records.php'> <button>Regresar a la página anterior</button> </a> </h2>";
 }

?>
