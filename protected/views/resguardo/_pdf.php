<?php
/* @var $this ResguardoController */
/* @var $data Resguardo */
?>



<tr>
	<td align="center"><?php echo CHtml::link(CHtml::encode($data->id)); ?></td>	
	<td align="center"><?php echo CHtml::encode($data->grado); ?></td>
	<td align="center"><?php echo CHtml::encode($data->nombre); ?></td>
	<td align="center"><?php echo CHtml::encode($data->apellido_paterno); ?></td>
	<td align="center"><?php echo CHtml::encode($data->apellido_materno); ?></td>
	<td align="center"><?php echo CHtml::encode($data->numero_resguardo); ?></td>	
	<td align="center"><?php echo CHtml::encode($data->estatus); ?></td>
</tr>

