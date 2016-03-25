
<h1>Consulta del resguardo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('name'=>'grado','value'=>$model->grado0->acronimo,'type'=>'text',),
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'numero_resguardo',		
		array('name'=>'estatus','value'=>$model->estatus0->estatus,'type'=>'text',),
	),
));
	
 ?>


