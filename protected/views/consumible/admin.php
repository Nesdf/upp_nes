<?php
/* @var $this ConsumibleController */
/* @var $model Consumible */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#consumible-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php

if(Yii::app()->user->getState('role')==1)
{

	?>
	<?php

	if(isset($_GET['Consumible']))
		$model->attributes=$_GET['Consumible'];

	$url ="/consumible/adminpdf.jsp?Consumible%5Bid%5D=".$model->id."&Consumible%5Bnombre_bien%5D=".$model->nombre_bien."&Consumible%5Bmarca%5D=".$model->marca."&Consumible%5Bmodelo%5D=".$model->modelo."&Consumible%5Bnumero_serie%5D=".$model->numero_serie."&Consumible%5Bcosto%5D=".$model->costo."&Consumible%5Bpartida%5D=".$model->partida."&Consumible%5Bresguardo%5D=".$model->resguardo."&Consumible%5Bfecha_factura%5D=".$model->fecha_factura."&Consumible%5Bfecha_alta%5D=".$model->fecha_alta."&Consumible%5Bnumero_factura%5D=".$model->numero_factura."&Consumible%5Bfuente_financiamiento%5D=".$model->fuente_financiamiento."&Consumible%5Bproveedor%5D=".$model->proveedor."&Consumible%5Bubicacion%5D=".$model->ubicacion."&Consumible%5Bestatus%5D=".$model->estatus."&yt0=B%C3%BAsqueda+Avanzada";
	
	?>
	<div class="row">		
		<div class="hidden-xs col-sm-offset-10 col-sm-2 col-md-offset-10 col-md-2 col-lg-offset-10 col-lg-2">
			<a class="mostrar" target="_blank" href="<?php echo $url;?>"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pdf.png"></a>
			<span class="esconder">Crear PDF</span>
		</div>
	</div>

<?php }?>
<h1>Lista de Consumibles</h1>


<!-- <p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p> -->

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button label label-warning')); ?>
<div class="search-form" style="display:none"><br><br>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'consumible-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		array(
            'name'=>'id',
            'type'=>'raw',
            'value'=>'CHtml::link($data->id, $data->id)',
           ),
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
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
