
<h1 align="center">Lista de Usuarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('class'=>"table table-condensed"),
	/*'filter'=>$model,*/
	'columns'=>array(			
		'id',
		array(
			'name'=>'grado',
			'value'=>'$data->grado0->acronimo',
			'filter'=>CHtml::listData(Grado::model()->findAll(), 'id', 'acronimo'), 
		),
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'numero_resguardo',
		array(
			'name'=>'estatus',
			'value'=>'$data->estatus0->estatus',
			'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), 			
			),		
	),
)); ?>

