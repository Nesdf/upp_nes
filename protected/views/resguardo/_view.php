<?php
/* @var $this ResguardoController */
/* @var $data Resguardo */
?>

<div class="view">

<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>	
	<td><?php echo CHtml::encode($data->grado); ?></td>
	<td><?php echo CHtml::encode($data->nombre); ?></td>
	<td><?php echo CHtml::encode($data->apellido_paterno); ?></td>
	<td><?php echo CHtml::encode($data->apellido_materno); ?></td>
	<td><?php echo CHtml::encode($data->numero_resguardo); ?></td>	
	<td><?php echo CHtml::encode($data->estatus); ?></td>
</tr>

</div>