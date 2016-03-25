

<h1>Consulta del Historial #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuario',
		'fecha',
		'hora',
		'accion',
		'id_usuario',
	),
)); ?>
