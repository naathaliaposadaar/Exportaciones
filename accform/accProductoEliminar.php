<?php
include("../librerias.php");
session_start();
//recuperar sesion
$oPro=new Producto();
var_dump($oUsr);
$oUsr=$_SESSION["oUsuario"];
$idacceso = $oUsr->getIdacceso();
foreach ($_POST as $id){
    
	$oPro->Elimina($id,$idacceso);	
};
?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_del.php";
</script>