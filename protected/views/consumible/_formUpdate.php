<?php
/* @var $this ConsumibleController */
/* @var $model Consumible */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consumible-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon "><div class="glyphicon glyphicon-hdd"></div></span>
						<?php echo $form->textField($model,'nombre_bien',array('size'=>60,'maxlength'=>85, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Nombre del bien*')); ?>
					</div>
				<?php echo $form->error($model,'nombre_bien'); ?>
			</div>
		</div>		

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Marca *')); ?>
				<?php echo $form->error($model,'marca'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'modelo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Modelo *')); ?>
				<?php echo $form->error($model,'modelo'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon">#</span>
					<?php echo $form->textField($model,'numero_serie',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Número de Serie *')); ?>
				</div>
				<?php echo $form->error($model,'numero_serie'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon"># UPP</span>
					<?php echo $form->textField($model,'num_control_upp',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Número de Serie UPP *')); ?>
				</div>
				<?php echo $form->error($model,'num_control_upp'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					<?php echo $form->textField($model,'costo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Costo  *')); ?>
				</div>
				<?php echo $form->error($model,'costo'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'partida',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Partida*')); ?>
				<?php echo $form->error($model,'partida'); ?>
			</div>
		</div>

		

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'resguardo',CHtml::listData(Resguardo::model()->findAll(), 'id','nombreCompleto' ), array('empty'=>'Seleccione nombre para Resguardo *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'resguardo'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #  $form->dropDownlist($model,'fecha_factura',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Fecha de la Factura*')); 
					$this->widget('zii.widgets.jui.CJuiDatePicker',
						array(
						'model'=>$model,
						'htmlOptions'=>array(
							'class'=>'form-control',
							'placeholder'=>'Fecha de la Factura',
							),
						'attribute'=>'fecha_factura',
						'language'=>'es',
						'options'=>array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'duration'=>'slow',
								'showAnim'=>'slide',
							),
						)
					);
				?>
				<?php echo $form->error($model,'fecha_factura'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php # $form->textField($model,'fecha_alta',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Fecha de Alta *')); 

					$this->widget('zii.widgets.jui.CJuiDatePicker',
						array(
						'model'=>$model,
						'htmlOptions'=>array(
							'class'=>'form-control',
							'placeholder'=>'Fecha de Alta',
							),
						'attribute'=>'fecha_alta',
						'language'=>'es',
						'options'=>array(
								'dateFormat'=>'yy-mm-dd',
								'constrainInput'=>'false',
								'duration'=>'slow',
								'showAnim'=>'slide',
							),
						)
					);
				?>
				<?php echo $form->error($model,'fecha_alta'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<div class="input-group">
					<span class="input-group-addon">#</span>
					<?php echo $form->textField($model,'numero_factura',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Numero de Factura *')); ?>
				</div>
				<?php echo $form->error($model,'numero_factura'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'fuente_financiamiento',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Fuente de Financiamiento *')); ?>
				<?php echo $form->error($model,'fuente_financiamiento'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'proveedor',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Proveedor *')); ?>
				<?php echo $form->error($model,'proveedor'); ?>
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'ubicacion',CHtml::listData(Ubicacion::model()->findAll(), 'id', 'area'), array('empty'=>'Seleccione una Ubicación *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'ubicacion'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownlist($model,'estatus',CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), array('empty'=>'Seleccione un Estatus *', 'class'=>'form-control', 'id'=>'inputSuccess2')); ?>	
				<?php echo $form->error($model,'estatus'); ?>
			</div>
		</div>
		


		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->fileField($model,'imagen_factura'); ?>
				<?php echo $form->error($model,'imagen_factura'); ?>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textArea($model,'leyenda',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Leyenda')); ?>
				<?php echo $form->error($model,'leyenda'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Descripción')); ?>
				<?php echo $form->error($model,'descripcion'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Alta de un Bien Material' : 'Actualizar Bien', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->