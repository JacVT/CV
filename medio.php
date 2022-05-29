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
