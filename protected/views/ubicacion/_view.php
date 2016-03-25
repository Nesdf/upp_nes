<?php
/* @var $this UbicacionController */
/* @var $data Ubicacion */
?>

<div class="view">

<tr>
		<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
		<td><?php echo CHtml::encode($data->area); ?>	</td>
		<td><?php echo CHtml::encode($data->referencia); ?>	</td>
</tr>

</div>