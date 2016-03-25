
<h1 align="center">Lista de Usuarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consumible-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('class'=>"table table-condensed"),
	/*'filter'=>$model,*/
	'columns'=>array(
		'id',
		'nombre_bien',
		'descripcion',
		'marca',
		'modelo',
		'numero_serie',		
		'costo',
		'partida',
		'resguardo',
		'fecha_factura',
		'fecha_alta',
		'numero_factura',
		'imagen_factura',
		'fuente_financiamiento',
		'proveedor',
		'leyenda',
		array(
			'name'=>'ubicacion',
			'value'=>'$data->ubicacion0->area',
			'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), 			
			),
		array(
			'name'=>'estatus',
			'value'=>'$data->estatus0->estatus',
			'filter'=>CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), 			
			),
		
		
	),
)); ?>
