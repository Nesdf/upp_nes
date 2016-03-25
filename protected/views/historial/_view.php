<?php
/* @var $this HistorialController */
/* @var $data Historial */
?>


	<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>	
		<td><?php echo CHtml::encode($data->usuario); ?></td>	
		<td><?php echo CHtml::encode($data->fecha); ?></td>	
		<td><?php echo CHtml::encode($data->hora); ?></td>	
		<td><?php echo CHtml::encode($data->accion); ?>	</td>
		<td><?php echo CHtml::encode($data->id_usuario); ?>	</td>
	</tr>
