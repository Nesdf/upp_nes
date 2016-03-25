<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historial-grid').yiiGridView('update', {
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

	if(isset($_GET['Historial']))
		$model->attributes=$_GET['Historial'];

	$url = "/historial/adminpdf.jsp?Historial%5Busuario%5D=".$model->usuario."&Historial%5Bfecha%5D=".$model->fecha."&Historial%5Bhora%5D=".$model->hora."&Historial%5Baccion%5D=".$model->accion."&Historial%5Bid_usuario%5D=".$model->id_usuario."&yt0=B%C3%BAsqueda+Avanzada";

	?>
	
		<div class="hidden-xs col-sm-offset-10 col-sm-2 col-md-offset-10 col-md-2 col-lg-offset-10 col-lg-2">
			<a target="_blank" href="<?php echo $url;?>"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pdf.png"></a>
			<span class="esconder">Crear PDF</span>
		</div>
	</div>

<?php }?>

<h1>Lista del Historial</h1>
<!-- <span class="esconder">Crear PDF</span> -->

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
	'id'=>'historial-grid',
	'dataProvider'=>$model->search(),
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
