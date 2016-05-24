<?php
$oProducto=new Producto();
$oUsuario = New Usuario();
?>
<form method="post" action="accform/accProductoEliminar.php">
<?php
While($Registro=$oProducto->Selecciona()){

	?>
<input type="checkbox" name=elimina<?=$Registro->IdProducto()?> value="<?=$Registro->IdProducto()?>">
<?=$Registro->Nombre()?>/<?=$Registro->Ano()?>/<?=$oUsuario->getIdacceso()?>
<br>
<?php
}

?>
<input type="submit" value="Eliminar">
</form>