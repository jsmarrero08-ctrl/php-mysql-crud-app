<html>
 <head>
 <title>Modify Records</title>
 <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="css/Site.Css">
 <?php 
  include('Web_Config.Php');
 ?> 
 </head>
 <body>

	</body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $ID = $_POST["value"]; }
else
 $ID = 1;
?>
<h2> Forma para modificar la tabla de clientes</h2> 

 ¿Qué número de record desea modificar? <br/>
<form action="Modify_Records.php" method="POST">
  <input type="text" name="value" >
  <input type="submit" style="width:150; height:50; font-weight: bold;" value="Buscar cliente" name="buscaCliente" >
</form>
<br/>

<?
 $query = "SELECT * FROM $databaseName.Clientes WHERE Id_Cliente = '".$ID."';";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_assoc($result);

 // --- Trick to show message only when first submit is clicked. 
 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['buscaCliente'])) { 
  if ($row["Id_Cliente"] == "") echo "<script type='text/javascript'>alert('No encuentro ese cliente.');</script>";
 }
?>
 
 <form action="Update.php" method="post"> 
 <table> 
  <tr>
   <td> Id Cliente: </td>
   <td> <input type="text" name="second" value = "<? echo $row["Id_Cliente"]; ?>"> </td>
  </tr>

  <tr>
   <td> Nombre del cliente: </td>
   <td> <input type="text" name="first"  value = "<? echo $row["Nombre_Cliente"]; ?>"> </td>
  </tr>
  
  <tr>
   <td> Apellido Paterno del cliente: </td>
   <td> <input type="text" name="apellidoP"  value = "<? echo $row["ApellidoP_Cliente"]; ?>"> </td>
  </tr>
  
  <tr>
   <td> Edad del cliente: </td>
   <td> <input type="text" name="edad"  value = "<? echo $row["Edad"]; ?>"> </td>
  </tr>
  
  <tr>
   <td> Email del cliente: </td>
   <td> <input type="text" name="email"  value = "<? echo $row["Email"]; ?>"> </td>
  </tr>
  
  <tr>
   <td> Numero de telefono del cliente: </td>
   <td> <input type="text" name="telefono"  value = "<? echo $row["Telefono"]; ?>"> </td>
  </tr>
  
  
  </table>
  
 <br/> 
 <input type="Submit"  style="width:150; height:50; font-weight: bold;" value="Mofificar cliente">
 </form> 
  <h2> <br/> <br/>  <a href="Index.php"> <button>Regresar al menú principal</button> </a> </h2>
 </html>