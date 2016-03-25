<?php
/* @var $this ResguardoController */
/* @var $model Resguardo */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#resguardo-grid').yiiGridView('update', {
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

	if(isset($_GET['Resguardo']))
		$model->attributes=$_GET['Resguardo'];
	
	$url = "/resguardo/adminpdf.jsp?Resguardo%5Bid%5D=".$model->id."&Resguardo%5Bgrado%5D=".$model->grado."&Resguardo%5Bnombre%5D=".$model->nombre."&Resguardo%5Bapellido_paterno%5D=".$model->apellido_paterno."&Resguardo%5Bapellido_materno%5D=".$model->apellido_materno."&Resguardo%5Bnumero_resguardo%5D=".$model->numero_resguardo."&Resguardo%5Bestatus%5D=".$model->estatus."&yt0=Búsqueda+avanzada";


	?>
	<div class="row">
		<div class="hidden-xs col-sm-offset-10 col-sm-2 col-md-offset-10 col-md-2 col-lg-offset-10 col-lg-2">
			<a target="_blank" href="<?php echo $url;?>"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pdf.png"></a>
			<span class="esconder">Crear PDF</span>
		</div>
	</div>

<?php }?>

<h1>Lista de Resguardos</h1>

<!-- <p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación..
</p> -->
	
<br><br>
<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button label label-warning')); ?>
<div class="search-form" style="display:none"><br><br>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'resguardo-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(			
	array(
            'name'=>'id',
            'type'=>'raw',
            'value'=>'CHtml::link($data->id, $data->id)',
           ),
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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
