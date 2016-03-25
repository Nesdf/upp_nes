<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
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

	if(isset($_GET['Usuarios']))
		$model->attributes=$_GET['Usuarios'];

	$url = "/usuarios/adminpdf.jsp?Usuarios%5Bid%5D=".$model->id."&Usuarios%5Bcorreo_institucional%5D=".$model->correo_institucional."&Usuarios%5Bnombre%5D=".$model->nombre."&Usuarios%5Bapellido_paterno%5D=".$model->apellido_paterno."&Usuarios%5Bapellido_materno%5D=".$model->apellido_materno."&Usuarios%5Bcargo%5D=".$model->cargo."&Usuarios%5Brole%5D=".$model->role."&Usuarios%5Bestatus%5D=".$model->estatus."&yt0=B%C3%BAsqueda+Avanzada";

	?>
	
		<div class="hidden-xs col-sm-offset-10 col-sm-2 col-md-offset-10 col-md-2 col-lg-offset-10 col-lg-2">
			<a target="_blank" href="<?php echo $url;?>"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pdf.png"></a>
			<span class="esconder">Crear PDF</span>
		</div>
	</div>

<?php }?>
<h1 align="center">Lista de Usuarios</h1>
<!-- <p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p> -->

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button label label-warning')); ?>
<div class="search-form" style="display:none"><br><br>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
	$mod = Usuarios::model();
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'ajaxUpdate'=>false,
	'columns'=>array(
		'id',
		array(
            'name'=>'correo_institucional',
            'type'=>'raw',
            /*'value'=>'CHtml::link($data->correo_institucional, $data->id)',*/
            'value'=>'$data->correo_institucional',
           ),
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'cargo',
		array(
			'name'=>'role',
			'value'=>'Usuarios::getRole($data->role)',
			/*'value'=>'$data->role0->role', */
			'filter'=>Usuarios::getRole(),			
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

