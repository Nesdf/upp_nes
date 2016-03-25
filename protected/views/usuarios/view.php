
<div class="row">
	<div class="col-xs-4 col-sm-3 col-md-3 col-lg-8">
		<h1 class="titulo-h1">Usuario #<?php echo $model->id."<br/> ".$model->nombre." ".$model->apellido_paterno;  ?></h1>
	</div>	
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'cargo',
		'correo_institucional',
		array('name'=>'role','value'=>$model->role0->role,'type'=>'text',),
		array('name'=>'estatus','value'=>$model->estatus0->estatus,'type'=>'text',),
	),
)); ?>
