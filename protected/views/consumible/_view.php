<?php
/* @var $this ConsumibleController */
/* @var $data Consumible */
?>

<div class="view">

<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->nombre_bien); ?></td>
	<td><?php echo CHtml::encode($data->descripcion); ?></td>
	<td><?php echo CHtml::encode($data->marca); ?></td>
	<td><?php echo CHtml::encode($data->modelo); ?></td>
	<td><?php echo CHtml::encode($data->numero_serie); ?></td>
	<td><?php echo CHtml::encode($data->costo); ?></td>
	<td><?php echo CHtml::encode($data->partida); ?></td>
	<td><?php echo CHtml::encode($data->resguardo); ?></td>
	<td><?php echo CHtml::encode($data->fecha_factura); ?></td>
	<td><?php echo CHtml::encode($data->numero_factura); ?></td>
	<td><?php echo CHtml::encode($data->fecha_alta); ?></td>
	<td><?php echo CHtml::encode($data->fuente_financiamiento); ?>	</td>
	<td><?php echo CHtml::encode($data->proveedor); ?></td>
	<td><?php echo CHtml::encode($data->leyenda); ?>	</td>
	<td><?php echo CHtml::encode($data->ubicacion); ?></td>
	<td><?php echo CHtml::encode($data->estatus); ?></td>

</tr>

</div>