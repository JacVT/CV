<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body bgcolor="#EEEEEE" leftmargin="0" topmargin="0">
<strong> </strong> 
<? 
$dsn="prueba";//debe ser de sistema no de usuario
$usuario="";
$password="";
$cid=odbc_connect($dsn,$usuario,$password);
if (!$cid){
	exit("Ya ocurrido un error tratando de conectarse con el origen de datos.");
}	
$sql="Select * from datos";
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

?>
<table border="1" bordercolor="#666666">
  <tr bgcolor="#FFFFFF"> 
    <td height="17" colspan="25"> 
      <div align="center"><strong>Tabla generada mediante un While</strong></div></td>
  </tr>
  <tr>

  </tr>
  <tr> 
    <td><div align="center"><strong>ID</strong></div></td>
    <td><div align="center"><strong>Nombre</strong></div></td>
    <td><div align="center"><strong>Apellido Paterno</strong></div></td>
    <td><div align="center"><strong>Apellido Materno</strong></div></td>
    <td><div align="center"><strong>Edad</strong></div></td>
    <td><div align="center"><strong>Genero</strong></div></td>
    <td><div align="center"><strong>Direccion</strong></div></td>
    <td><div align="center"><strong>Ciudad</strong></div></td>
    <td><div align="center"><strong>Estado</strong></div></td>
    <td><div align="center"><strong>movil</strong></div></td>
    <td><div align="center"><strong>Correo Electronico</strong></div></td>
    <td><div align="center"><strong>Estado Civil</strong></div></td>
    <td><div align="center"><strong>Grado maximo de estudios</strong></div></td>
    <td><div align="center"><strong>Nombre de la institucion</strong></div></td>
    <td><div align="center"><strong>Tiempo de egresado</strong></div></td>
    <td><div align="center"><strong>Nombre de la especialidad o carrera</strong></div></td>
    <td><div align="center"><strong>Promedio escolar</strong></div></td>
    <td><div align="center"><strong>Titulado</strong></div></td>
    <td><div align="center"><strong>Idiomas manejados</strong></div></td>
    <td><div align="center"><strong>Ultimo puesto desempeñado</strong></div></td>
    <td><div align="center"><strong>Institucion o empresa</strong></div></td>
    <td><div align="center"><strong>Contacto</strong></div></td>
    <td><div align="center"><strong>Tiempo laborado</strong></div></td>
    <td><div align="center"><strong>Cursos o diplomados</strong></div></td>
    <td><div align="center"><strong>Intereses, aficiones y habilidades</strong></div></td>
  </tr>
  <?   while(odbc_fetch_row($result)){?>
  <tr> 
    <td><? print odbc_result($result,1); ?></td>
    <td><? print odbc_result($result,2); ?></td>
    <td><? print odbc_result($result,3); ?></td>
    <td><? print odbc_result($result,4); ?></td>
    <td><? print odbc_result($result,5); ?></td>
    <td><? print odbc_result($result,6); ?></td>
    <td><? print odbc_result($result,7); ?></td>
    <td><? print odbc_result($result,8); ?></td>
    <td><? print odbc_result($result,9); ?></td>
    <td><? print odbc_result($result,10); ?></td>
    <td><? print odbc_result($result,11); ?></td>
    <td><? print odbc_result($result,12); ?></td>
    <td><? print odbc_result($result,13); ?></td>
    <td><? print odbc_result($result,14); ?></td>
    <td><? print odbc_result($result,15); ?></td>
    <td><? print odbc_result($result,16); ?></td>
    <td><? print odbc_result($result,17); ?></td>
    <td><? print odbc_result($result,18); ?></td>
    <td><? print odbc_result($result,19); ?></td>
    <td><? print odbc_result($result,20); ?></td>
    <td><? print odbc_result($result,21); ?></td>
    <td><? print odbc_result($result,22); ?></td>
    <td><? print odbc_result($result,23); ?></td>
    <td><? print odbc_result($result,24); ?></td>
    <td><? print odbc_result($result,25); ?></td>
  </tr>
  <?
}
?>
</table>
<strong><br>
Tabla generada mediante odbc_result_all();</strong><br>
<?
$sql="Select * from datos";
$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
print odbc_result_all($result,"border=1");
?>
</body>
</html>
