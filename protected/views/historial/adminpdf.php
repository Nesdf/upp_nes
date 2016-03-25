
<h1 align="center">Historial</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'historial-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('class'=>"table table-condensed"),
	/*'filter'=>$model,
*/	'columns'=>array(
		'id',
		'usuario',
		'fecha',
		'hora',
		'accion',
		/*'id_usuario',*/
		
		array(
			'name'=>'id_usuario',
			'value'=>'$data->role0->role',
			'filter'=>CHtml::listData(Role::model()->findAll(), 'id', 'role'), 			
			),
		)
)); ?>
