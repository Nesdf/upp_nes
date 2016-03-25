<?php
/*@var $this ConsumibleController */
/* @var $model Consumible */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'id', array('id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'ID' )); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'nombre_bien',array('size'=>60,'maxlength'=>85, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Nombre del bien')); ?>
			</div>
		</div>

		<!-- <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Descrip')); ?>
			</div>
		</div> -->

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Marca')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'modelo',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Modelo')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'numero_serie',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Número de serie')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'costo',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Costo')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'partida',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Partida')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'resguardo',CHtml::listData(Resguardo::model()->findAll(), 'id','nombreCompleto' ), array('empty'=>'Seleccione nombre para Resguardo *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'resguardo'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #echo $form->textField($model,'fecha_factura'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker',
						array(
							'model'=>$model,
							'attribute'=>'fecha_factura',
							'language'=>'es',
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Fecha de la Factura *',
								),
							'options'=>array(
								'dateFormat'=>'dd-mm-yy',
								'constrainInput'=>'false',
								'duration'=>'slow',
								'showAnim'=>'slide',
								),
							)

						);
				?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #echo $form->textField($model,'fecha_alta', array('maxlength'=>10, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Número de la Factura *')); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker',
						array(
							'model'=>$model,
							'attribute'=>'fecha_alta',
							'language'=>'es',
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Fecha de Alta',
								),
							'options'=>array(
								'dateFormat'=>'dd-mm-yy',
								'constrainInput'=>'false',
								'duration'=>'slow',
								'showAnim'=>'slide',
								),
							)

						);
				?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'numero_factura',array('maxlength'=>10, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Número de la Factura *')); ?>
			</div>
		</div>

		<!-- <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'imagen_factura',array('size'=>60,'maxlength'=>254, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'ID')); ?>
			</div>
		</div> -->

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'fuente_financiamiento',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Fuente de Financiemiento')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'proveedor',array('size'=>45,'maxlength'=>45, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'Proveedor')); ?>
			</div>
		</div>

		<!-- <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #echo $form->textArea($model,'leyenda',array('rows'=>6, 'cols'=>50, 'id'=>'inputSuccess2', 'class'=>'form-control', 'placeholder'=>'ID')); ?>
			</div>
		</div> -->

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'ubicacion',CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), array('empty'=>'Seleccione una Ubicación', 'class'=>'form-control', 'id'=>'inputSuccess2')); ?>		
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback"		>
				<?php echo $form->dropDownList($model,'estatus',CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), array('empty'=>'Seleccione un Estatus', 'class'=>'form-control', 'id'=>'inputSuccess2')); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton('Búsqueda Avanzada', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->