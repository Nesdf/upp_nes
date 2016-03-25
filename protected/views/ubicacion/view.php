

<h1>consulta de la Ubicación en la UPP#<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'area',
		'referencia',
	),
)); ?>
