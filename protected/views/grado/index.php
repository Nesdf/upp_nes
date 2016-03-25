<?php
/* @var $this GradoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grados',
);

$this->menu=array(
	array('label'=>'Create Grado', 'url'=>array('create')),
	array('label'=>'Manage Grado', 'url'=>array('admin')),
);
?>

<h1>Grados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
