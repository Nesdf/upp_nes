
<h1 align="center">Lista de Usuarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grado-grid',
	'dataProvider'=>$model->search(),	
		'htmlOptions'=>array('class'=>"table table-condensed"),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'acronimo',
		'grado_academico',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

