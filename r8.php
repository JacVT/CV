<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form>
<div class="formx">
<?php 
 $pmost ="<h2>Datos personales\r\n</h2>";
 $pmost .="<b>Nombre(s):</b> $nom\r\n";
 $pmost .="<b>Apellido Paterno:</b> $ap\r\n";
 $pmost .="<b>Apellido Materno:</b> $am\r\n";
 $pmost .="<b>Edad:</b> $ed\r\n";
 $pmost .="<b>Genero:</b> $Sege\r\n";
 $pmost .="<b>Fotografia:</b>\r\n $fo \r\n";
 $pmost .="<b>Dirección:</b> $dire\r\n";
 $pmost .="<b>Ciudad:</b> $ciu\r\n";
 $pmost .="<b>Estado:</b> $est\r\n";
 $pmost .="<b>Móvil:</b> $movil\r\n";
 $pmost .="<b>Correo electrónico:</b> $coel\r\n";
 $pmost .="<b>Estado civil:</b> $ec\r\n";
 $pmost .="<h2>Datos escolares\r\n</h2>";
 $pmost .="<b>Grado máximo de estudios:</b> $graest\r\n";
 $pmost .="<b>Nombre de la institución:</b> $nomins\r\n";
 $pmost .="<b>Tiempo de egresado:</b> $tieg\r\n";
 $pmost .="<b>Nombre de la especialidad o carrera:</b> $espcar\r\n";
 $pmost .="<b>Promedio escolar:</b> $proescent$proescdec\r\n";
 $pmost .="<b>Titulado:</b> $titulado\r\n";
 $pmost .="<b>Idiomas manejados:</b> $idiomas\r\n";
 $pmost .="<h2>Datos laborales\r\n</h2>";
 $pmost .="<b>Ultimo puesto desempeñado:</b> $Upuesto\r\n";
 $pmost .="<b>Institución o empresa:</b> $IoE\r\n";
 $pmost .="<b>Contacto:</b> $contacto\r\n";
 $pmost .="<b>Tiempo laborado:</b> $TL\r\n";
 $pmost .="<h2>Otros datos\r\n</h2>";
 $pmost .="<b>Cursos o diplomados:</b>\r\n $cursoD\r\n";
 $pmost .="<b>Intereses, aficiones y habilidades:</b>\r\n $intereses\r\n";
 echo nl2br($pmost);

 $archivo=fopen("CurriculumVitae.txt","w+") or die("Problemas en la creacion");
 fputs($archivo,"Datos personales\n");
 fputs($archivo,"Nombre(s): ".$_REQUEST['nom']."\n");
 fputs($archivo,"Apellido Paterno: ".$_REQUEST['ap']."\n");
 fputs($archivo,"Apellido Materno: ".$_REQUEST['am']."\n");
 fputs($archivo,"Edad: ".$_REQUEST['ed']."\n");
 fputs($archivo,"Genero: ".$_REQUEST['Sege']."\n");
 fputs($archivo,"Fotografia:\n".$_REQUEST['fo']."\n");
 fputs($archivo,"Dirección: ".$_REQUEST['dire']."\n");
 fputs($archivo,"Ciudad: ".$_REQUEST['ciu']."\n");
 fputs($archivo,"Estado: ".$_REQUEST['est']."\n");
 fputs($archivo,"Móvil: ".$_REQUEST['movil']."\n");
 fputs($archivo,"Correo electrónico: ".$_REQUEST['coel']."\n");
 fputs($archivo,"Estado civil:".$_REQUEST['ec']."\n");
 fputs($archivo,"Datos escolares\n");
 fputs($archivo,"Grado máximo de estudios: ".$_REQUEST['graest']."\n");
 fputs($archivo,"Nombre de la institución: ".$_REQUEST['nomins']."\n");
 fputs($archivo,"Tiempo de egresado: ".$_REQUEST['tieg']."\n");
 fputs($archivo,"Nombre de la especialidad o carrera: ".$_REQUEST['espcar']."\n");
 fputs($archivo,"Promedio escolar: ".$_REQUEST['proescent']."".$_REQUEST['proescdec']."\n");
 fputs($archivo,"Titulado: ".$_REQUEST['$titulado']."\n");
 fputs($archivo,"Idiomas manejados: ".$_REQUEST['idiomas']."\n");
 fputs($archivo,"Datos laborales\n");
 fputs($archivo,"Ultimo puesto desempeñado: ".$_REQUEST['Upuesto']."\n");
 fputs($archivo,"Institución o empresa: ".$_REQUEST['IoE']."\n");
 fputs($archivo,"Contacto: ".$_REQUEST['contacto']."\n");
 fputs($archivo,"Tiempo laborado: ".$_REQUEST['TL']."\n");
 fputs($archivo,"Otros datos\n");
 fputs($archivo,"Cursos o diplomados:\n".$_REQUEST['cursoD']."\n");
 fputs($archivo,"Intereses, aficiones y habilidades:\n".$_REQUEST['intereses']."\n");
?>
</div>
<div class="button2">
<button input><a href="CurriculumVitae.txt" download>Descargar Datos</a></ button input>
</div>
</form>

</body>
</html>