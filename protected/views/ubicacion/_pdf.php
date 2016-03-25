<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<table>
	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
		<td><?php echo CHtml::encode($data->area); ?>	</td>
		<td><?php echo CHtml::encode($data->referencia); ?>	</td>
</tr>

