<?php
/* @var $this GradoController */
/* @var $model Grado */

$this->breadcrumbs=array(
	'Grados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Grado', 'url'=>array('index')),
	array('label'=>'Create Grado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grado-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Grados</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grado-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		'id',
		'acronimo',
		'grado_academico',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
