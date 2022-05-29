<?
if (isset($_REQUEST["submit"])){
	extract($_REQUEST);//extraigo todos los tx a variables locales
	$cid=odbc_connect("prueba","","");	
	$sql="Select max(Id) from datos";
	$result=odbc_exec($cid,$sql);
	$codigo=odbc_result($result,1)+1;
	#$sql="Insert into datos values($codigo,'$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20','$t21','$t22','$t23','$t24')";
	$sql="Insert into datos values($codigo,'$nom','$ap','$am','$ed','$Sege','$dire','$ciu','$est','$movil','$coel','$ec','$graest','$nomins','$tieg','$espcar','$proescent','$titulado','$idiomas','$Upuesto','$IoE','$contacto','$TL','$cursoD','$intereses')";
	$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec()<br>$sql"));
	if (!$result){
	 print "Algo no se ejecut� bien.";
	}
	else{
	 print "Informaci�n guardada.\n";
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CURRICULUM VITAE</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="estilo1.css" rel="stylesheet" type="text/css" />
  <script language="JavaScript" type="text/JavaScript">
 <!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
<script>
 function habilitar(value){
 if(value!="100" || value==true){
 // habilitamos
 document.getElementById("proescdec").disabled=false;
 }else if(value=="100" || value==false){
 // deshabilitamos
 document.getElementById("proescdec").disabled=true;
 }
 }
</script>
<script type="text/javascript">
		function enviar(destino){
			document.ultpro.action = destino;
			document.ultpro.submit();
		}
		function guardar(destino){
			document.ultpro.action = destino;
			document.ultpro.submit();
			document.ultpro.enctype = "multipart/form-data";
		}
	</script>
</head>
<body>
	<div class="header">
		<h2>CURRICULUM VITAE</h2>
	</div>
	<div class="menu">
		Menú
		<div id="submenu1" style="display:block">
			<br />
		</div>
	</div>
	<div class="section">
		<div class="botones">
			<button id="bt-oc"> Ocultar </button>
			<button id="bt-mo"> mostrar </button>
			<button id="bt-al"> Alerta </button>
			<button id="bt-su"> Sustituir </button>
			<button id="bt-letra"> Cambiar tipo de letra </button>
			<button id="bt-color"> Cambiar color </button>
			<button class="bc" input type="button">Instrucciones</button>
		</div>
		<!-- <form name="ultpro" method="post" enctype="multipart/form-data" action=""> -->
		<form name="ultpro" method="post">
			<div class="form">
				<h2> Datos personales</h2>
				<br>
				Nombre<input type="text" name="nom" placeholder="Nombre(s)"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Solamente letras" required="required" id="t1">
				<br><br>
				Apellido Paterno<input type="text" name="ap" placeholder="Apellido Paterno"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Solamente letras" required="required" id="t2">
				<br><br>
				Apellido Materno<input type="text" name="am" placeholder="Apellido Materno"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Solamente letras" required="required" id="t3">
				<br><br>
				Edad <select name="ed" class="ed" id="t4">
					<option value="18">18
					<option value="19">19
					<option value="20">20
					<option value="21">21
					<option value="22">22
					<option value="23">23
					<option value="24">24
					<option value="25">25
					<option value="26">26
					<option value="27">27
					<option value="28">28
					<option value="29">29
					<option value="30">30
					<option value="31">31
					<option value="32">32
					<option value="33">33
					<option value="34">34
					<option value="35">35
					<option value="36">36
					<option value="37">37
					<option value="38">38
					<option value="39">39
					<option value="40">40
					<option value="41">41
					<option value="42">42
					<option value="43">43
					<option value="44">44
					<option value="45">45
					<option value="46">46
					<option value="47">47
					<option value="48">48
					<option value="49">49
					<option value="50">50
					<option value="51">51
					<option value="52">52
					<option value="53">53
					<option value="54">54
					<option value="55">55
					<option value="56">56
					<option value="57">57
					<option value="58">58
					<option value="59">59
					<option value="60">60
					<option value="61">61
					<option value="62">62
					<option value="63">63
					<option value="64">64
					<option value="65">65
					<option value="66">66
					<option value="67">67
					<option value="68">68
					<option value="69">69
					<option value="70">70
				</select>
				<br><br>
				Genero<select name="Sege" class="ge" id="t5">
					<option value="Hombre">Hombre
					<option value="Mujer">Mujer
					<option value="Otro">Otro
				</select>
				<br><br>
				Fotografia <input type="file" class="fot" name="fo" accept=".BMP,.JPG,.PNG" placeholder="Tu foto" title="Solo archivos .BMP,.JPG Y .PNG" required="required">
				<select class="ddlPercent" hidden>
				<option value="100">100</option>
			   </select>
			   <div id="outerDiv" style="background-color:#EEEEEE; height:20px; width:300px;display:inline; padding:5px">
				   <div class="innerDiv" style="width:0px; height:19px; text-align:center;display:inline; background-color:blue; color:white"></div>
			   </div>

				<br><br>
				Direccion <input type="text" name="dire" placeholder="Tu direccion"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Maximo 30" required="required" id="t6">
				<br><br>
				Ciudad <select name="ciu" class="ciu" id="t7">
					<option value="Orizaba">Orizaba
					<option value="Cordoba">Cordoba
					<option value="Rio Blanco">Rio Blanco
					<option value="Mendoza">Mendoza
					<option value="Otra">Otra
				</select>
				<br><br>
				Estado<select name="est" class="es" id="t8">
					<option value="Veracruz">Veracruz
					<option value="Puebla">Puebla
					<option value="Oaxaca">Oaxaca
					<option value="Zacatecas">Zacatecas
					<option value="Otro">Otro
				</select>
				<br><br>
				Móvil
				<input type="text" name="movil" placeholder="Número de teléfono móvil" pattern="[0-9]{10}"
					title="Ingresa tu número de teléfono móvil" required="required" id="t9">
				<br><br>
				Correo electrónico
				<input type="email" name="coel" placeholder="Correo electrónico"
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ingresa tu correo electrónico"
					required="required" id="t10">
				<br><br>
				Estado civil
				<select name="ec" id="t11">
					<option value="Soltero">Soltero
					<option value="Casado">Casado
					<option value="Divorciado">Divorciado
					<option value="Viudo">Viudo
				</select><br>
			</div>
			<center><div id="mousemove"></div></center>
			<center><div id="mouseover"></div></center>
			<div class="form2">
				<h2>Datos escolares</h2>
				<br>Grado máximo de estudios
				<select name="graest" id="t12">
					<option value="Primaria">Primaria
					<option value="Secundaria">Secundaria
					<option value="Bachillerato">Bachillerato
					<option value="Licenciatura">Licenciatura
					<option value="Maestria">Maestria
					<option value="Doctorado">Doctorado
				</select><br><br>
				Nombre de la institución
				<input type="text " name="nomins" placeholder="Institución"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Ingresa tu institución" required="required" id="t13">
				<br><br>Tiempo de egresado
				<select name="tieg" id="t14">
					<option value="Menos de 1 año">Menos de 1 año</option>
					<option value="1 año">1 año
					<option value="2 años">2 años
					<option value="3 años">3 años
					<option value="4 años">4 años
					<option value="5 años">5 años
					<option value="6 años">6 años
					<option value="7 años">7 años
					<option value="8 años">8 años
					<option value="9 años">9 años
					<option value="10 años">10 años
					<option value="11 años">11 años
					<option value="12 años">12 años
					<option value="13 años">13 años
					<option value="14 años">14 años
					<option value="15 años">15 años
					<option value="16 años">16 años
					<option value="17 años">17 años
					<option value="18 años">18 años
					<option value="19 años">19 años
					<option value="20 años">20 años
				</select><br><br>
				Nombre de la especialidad o carrera
				<input type="text " name="espcar" placeholder="Especialidad o Carrera"
					pattern="[A-Za-z0-9éàáèìíòóöùúüÿýźñÀÁÄÈÉËÌÍÏÒÓÖÙÚÜÝÑ\s\u00f1\u00d1.,-]{0,30}" minlength="0"
					maxlength="30" title="Ingresa tu Carrera o Especialidad" required="required" id="t15">
				<br><br>Promedio escolar
				<select name="proescent" id="proescent" onchange="habilitar(this.value);" id="t16">
					<option value="70">70
					<option value="71">71
					<option value="72">72
					<option value="73">73
					<option value="74">74
					<option value="75">75
					<option value="76">76
					<option value="77">77
					<option value="78">78
					<option value="79">79
					<option value="80">80
					<option value="81">81
					<option value="82">82
					<option value="83">83
					<option value="84">84
					<option value="85">85
					<option value="86">86
					<option value="87">87
					<option value="88">88
					<option value="89">89
					<option value="90">90
					<option value="91">91
					<option value="92">92
					<option value="93">93
					<option value="94">94
					<option value="95">95
					<option value="96">96
					<option value="97">97
					<option value="98">98
					<option value="99">99
					<option value="100">100
				</select>
				<select name="proescdec" id="proescdec">
					<option value=".0">.0
					<option value=".1">.1
					<option value=".2">.2
					<option value=".3">.3
					<option value=".4">.4
					<option value=".5">.5
					<option value=".6">.6
					<option value=".7">.7
					<option value=".8">.8
					<option value=".9">.9
				</select><br><br>
				Titulado
				<input type="radio" name="titulado" value="si" id="t17"> S&iacute
				<input type="radio" name="titulado" value="no" id="t17"> No
				<br><br>
				Idiomas manejados <input name="idiomas" type="text" placeholder="Idiomas manejados"
					pattern="[A-Za-z0-9áéíóúÁÉÍÓÚ\s\u00f1\u00d1.,-]{4,60}" minlength="4" maxlength="60"
					title="Idiomas manejados" required id="t18"><br>
				<br>
			</div>
			<center><div id="mousemove2"></div></center>
			<center><div id="mouseover2"></div></center>
			<div class="form3">
				<h2>Datos laborales</h2>
				&Uacute;ltimo puesto desempeñado <input name="Upuesto" type="text"
					placeholder="&Uacute;ltimo puesto desempeñado"
					pattern="[A-Za-z0-9áéíóúÁÉÍÓÚ\s\u00f1\u00d1.,-]{4,40}" minlength="4" maxlength="40"
					title="Último puesto desempeñado" required id="t19"><br>
				<br>
				Instituci&oacute;n o empresa <input name="IoE" type="text"
					placeholder="Instituci&oacute;n o empresa" pattern="[A-Za-z0-9áéíóúÁÉÍÓÚ\s\u00f1\u00d1.,-]{4,40}"
					minlength="4" maxlength="40" title="Institución o empresa" required id="t20"><br>
				<br>
				Contacto <input name="contacto" type="text" placeholder="Contacto"
					pattern="[A-Za-z0-9áéíóúÁÉÍÓÚ\s\u00f1\u00d1.,-]{4,40}" minlength="4" maxlength="40" title="contacto"
					required id="t21"><br>
				<br>
				Tiempo laborado
				<select name="TL" id="t22">
					<option value="Menos de 1 año">Menos de 1 año</option>
					<option value="1 año">1 año</option>
					<option value="2 años">2 años</option>
					<option value="3 años">3 años</option>
					<option value="4 años">4 años</option>
					<option value="5 años">5 años</option>
					<option value="6 años">6 años</option>
					<option value="7 años">7 años</option>
					<option value="8 años">8 años</option>
					<option value="9 años">9 años</option>
					<option value="10 años">10 años</option>
					<option value="11 años">11 años</option>
					<option value="12 años">12 años</option>
					<option value="13 años">13 años</option>
					<option value="14 años">14 años</option>
					<option value="15 años">15 años</option>
					<option value="16 años">16 años</option>
					<option value="17 años">17 años</option>
					<option value="18 años">18 años</option>
					<option value="19 años">19 años</option>
					<option value="20 años">20 años</option>
				</select> <br>
				<br>
			</div>
			<center><div id="mousemove3"></div></center>
			<center><div id="mouseover3"></div></center>
			<div class="form4">
				<h2>Otros datos</h2>
				<p id="cu"> Cursos o diplomados </p> <br>
				<textarea id="t23" name="cursoD" rows="5" cols="30" minlength="10" maxlength="150"
					required></textarea>
				<br />
				<p id="in"> Intereses, aficiones y habilidades </p>
				<textarea id="t24" name="intereses" rows="5" cols="30" minlength="10" maxlength="150"
					required></textarea>
				<br><br>
			</div>
			<center><div id="mousemove4"></div></center>
			<center><div id="mouseover4"></div></center>
			<center>
				<p><input type="checkbox" class="checkbox">He completado todos los campos del formulario</input></p>
			</center>
			<div class="button">
				 <button id="guardard" name="submit" value="Guardar datos" onclick="guardar('')"> Guardar datos </button>
			</div>
			<div class="button">
				 <button id="enviarb" name="submit" value="Enviar datos" onclick="enviar('r8.php')"> Enviar datos </button>
			</div>
		<center>
			<div id="img"></div>
		</center>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
	<script src="8j.js"></script>
</body>
</html>