<?php
include("../librerias.php");
$oUsr = New Usuario();
$newpewd=$_POST['clave'];
//$newpewd=$_GET['newpwd'];

session_start();
if (!isset($_SESSION["oUsuario"])){
	?>
<!-- Reenvio a la p�gina principal-->
<script>
	document.location.href="index.php";
</script>
<?php 
}

$oUsr=$_SESSION["oUsuario"];
var_dump($oUsr);
if($oUsr->ActualizaClave($newpewd)) echo "clave actualizada"; else echo "ERROR";
?>