<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ubicacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php if(Yii::app()->user->getState('role')==1)
{

	?>
	<?php

	if(isset($_GET['Ubicacion']))
		$model->attributes=$_GET['Ubicacion'];

	$url = "/ubicacion/adminpdf.jsp?Ubicacion%5Bid%5D=".$model->id."&Ubicacion%5Barea%5D=".$model->area."&yt0=B%C3%BAsqueda+Avanzada";

	?>
	<div class="row">
		<div class=" hidden-xs col-sm-offset-10 col-sm-2 col-md-offset-10 col-md-2 col-lg-offset-10 col-lg-2">
			<a  target="_blank" href="<?php echo $url;?>"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pdf.png"></a>
			<span class="esconder">Crear PDF</span>
		</div>
	</div>

<?php }?>


<h1>Lista de Ubicaciones en la UPP</h1>

<!-- <p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p> -->

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button  label label-warning')); ?>
<div class="search-form" style="display:none"><br>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ubicacion-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		'id',
		'area',
		'referencia',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
