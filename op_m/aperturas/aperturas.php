prueba
<?php
print "prueba1";
if(aperturas_uno_output() == "1"){
	print "prueba1";
	include("uno.tpl.php");
}
if(aperturas_dos_output() == "1"){
	print "prueba2";
	include("dos.tpl.php");
}
?>