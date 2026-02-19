 <link rel="stylesheet" type="text/css" href="css/Site.Css">
 <?php include('Web_Config.Php'); ?> 
<?
$first = $_POST['first'];
$second = $_POST['second'];
$apellidoP = $_POST['apellidoP'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
if ($first != "") {
  $query = "UPDATE $databaseName.Clientes SET Nombre_Cliente='".$first."', ApellidoP_Cliente='".$apellidoP."', Edad='".$edad."' , Email='".$email."' , Telefono= '".$telefono."' WHERE Id_Cliente = '".$second."'";
  
echo $query;
	
  mysqli_query($conn, $query);
  echo "<br/> <br/><br/> <b> Cliente modificado de la base de datos. </b>";
  echo "<h2> <br/> <br/>  <a href='Index.php'> <button>Regresar al menú principal</button> </a> </h2>";
 }
 else
 {
   echo "<br/> <b> Por favor, necesito el número de ID del cliente para poder procesar la información. </b>";
   echo "<h2> <br/> <br/>  <a href='Modify_Records.php'> <button>Regresar a la página anterior</button> </a> </h2>";
 }

?>
