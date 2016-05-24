<?php
include("../librerias.php");
//recuperar sesion
$oPro=new Producto();
$idacceso = $_POST['idacceso'];
foreach ($_POST as $id){
    
	$oPro->Elimina($id,$idacceso);	
};
?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_del.php";
</script>