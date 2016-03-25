<?php 
$nombre = $model->resguardo0->grado0->acronimo.' '.$model->resguardo0->nombre.' '.$model->resguardo0->apellido_paterno.' '.$model->resguardo0->apellido_materno;
?>

<div class="row">	
	<div class="hidden-xs col-sm-offset-8 col-sm-1 col-md-offset-8 col-md-1 col-lg-offset-8 col-lg-1">
		<a href="<?php echo Yii::app()->theme->baseUrl;?>/qr/<?php echo $model->nombre_bien.$model->numero_serie?>.png" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/qrupp.png" ></a>
	</div>
	<div class="hidden-xs  col-sm-1  col-md-1  col-lg-1">
		<?php echo CHtml::link('<img  src=" '.Yii::app()->theme->baseUrl.'/img/pdf.png">',array('consumible/resguardo','id'=>$id, 'nombre'=>$nombre),array('target'=>'_blank', 'class'=>'mostrar')); ?>		
		<span class="esconder">Crear Resguardo</span>
	</div>		
</div>

<h1 class="centrado">Consulta de Consumible #<?php echo $model->id; ?></h1><br>
<?php $this->widget('application.extensions.qrcode.QRCodeGenerator',array(
    'data' => "Asignado: ".$model->resguardo0->grado0->acronimo.' '.$model->resguardo0->nombre.' '.$model->resguardo0->apellido_paterno.' '.$model->resguardo0->apellido_materno." - Artículo: ".$model->nombre_bien." - #_serie: ".$model->numero_serie." - Marca: " .$model->marca. " -  Modelo: ".$model->modelo,
    'nombre'=> $model->nombre_bien."".$model->numero_serie ,
    'filePath'=>YiiBase::getPathOfAlias('webroot.themes.upp.qr'),
    'subfolderVar' => true,
    'matrixPointSize' => 5,
)) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_bien',
		'descripcion',
		'marca',
		'modelo',
		'numero_serie',
		array('label'=>'Imagen Factura',
             'type'=>'raw',
            'value'=>'$ '.$model->costo,
            ),
		'partida',
		array('name'=>'resguardo','value'=>$model->resguardo0->grado0->acronimo.' '.$model->resguardo0->nombre.' '.$model->resguardo0->apellido_paterno.' '.$model->resguardo0->apellido_materno,'type'=>'text',),
		'fecha_factura',
		'fecha_alta',
		'numero_factura',
		array('label'=>'Imagen Factura',
             'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->imagen_factura), "/themes/upp/imagen/".$model->nombre_bien."_".$model->num_control_upp.".jpg" , array('target'=>'_blank'))),
		'fuente_financiamiento',
		'proveedor',
		'leyenda',
		array('name'=>'ubicacion','value'=>$model->ubicacion0->area,'type'=>'text',),
		array('name'=>'estatus','value'=>$model->estatus0->estatus,'type'=>'text',),
		
	),
)); ?>

