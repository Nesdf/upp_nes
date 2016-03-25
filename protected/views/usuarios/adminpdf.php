
<h1 align="center">Lista de Usuarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	
	'dataProvider'=>$model->search(),	
		'htmlOptions'=>array('class'=>"table table-condensed"),
	/*'ajaxUpdate'=>false,*/
	'columns'=>array(
		/*'id',*/
		array(
            'name'=>'correo_institucional',
           ),
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'cargo',
		array(
			'name'=>'role',
			'value'=>'Usuarios::getRole($data->role)',
			/*'value'=>'$data->role0->role', */
			'filter'=>Usuarios::getRole(),),
		array(
			'name'=>'estatus',
			'value'=>'$data->estatus0->estatus',
			'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), 			
			),
		
	),
)); ?>

