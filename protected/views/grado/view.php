
<h1>AConsulta de Grado de estudios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'acronimo',
		'grado_academico',
	),
)); ?>
