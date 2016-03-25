<?php
/* @var $this GradoController */
/* @var $data Grado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acronimo')); ?>:</b>
	<?php echo CHtml::encode($data->acronimo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado_academico')); ?>:</b>
	<?php echo CHtml::encode($data->grado_academico); ?>
	<br />


</div>