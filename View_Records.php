<html>
<head>
 <title> View Records </title>
  <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" /> 
    <link rel="stylesheet" type="text/css" href="css/Site.Css">
   <?php include('Web_Config.Php'); ?> 
   <style>
    body {
      font-family:Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace;
	  {
	</style>	  
</head>
<body>
 <h1> <b>Lista de clientes</b> </h1> <br/>
 
<?
 $picFolder="pictures/";

 $query = "SELECT * FROM $databaseName.Clientes;";
 mysqli_set_charset($conn,"utf8");
 $result = mysqli_query($conn, $query);

 if (mysqli_num_rows($result) > 0) {
	echo "<table id='customers'>";
    echo "<tr> <th> ID </th> <th> Nombre </th> <th> Apellido Paterno</th> <th>Edad</th> <th>Email</th> <th>Numero de Telefono</th> </tr>";
    while($row = mysqli_fetch_assoc($result))  {
		echo "<tr>";
		echo "<td>". $row["Id_Cliente"]. "</td>";
        echo "<td>". $row["Nombre_Cliente"]. "</td>";
		echo "<td>". $row["ApellidoP_Cliente"]. "</td>";
		echo "<td>". $row["Edad"]. "</td>";
		echo "<td>". $row["Email"]. "</td>";
		echo "<td>". $row["Telefono"]. "</td>";
        echo "</tr>";
    }
	echo "</table>";
  } 
else
  echo "Tabla vacía o error en la lectura de datos."; 
mysqli_close($conn);
?>
 
 <h2> <br/> <br/>  <a href="Index.php"> <button>Regresar al menú principal</button> </a> </h2>
 </body>
</html>