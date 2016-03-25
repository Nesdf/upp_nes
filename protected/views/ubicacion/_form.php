<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ubicacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>100, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Ubicación UPP')); ?>
				<?php echo $form->error($model,'area'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3  ">
			<div class="form-group has-success has-feedback">
			<?php echo $form->textArea($model,'referencia',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Indica una referencia en la UPP')); ?>
			<?php echo $form->error($model,'referencia'); ?>
		</div>
	</div>
</div>



	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3  ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Ubicación UPP' : 'Modificar Ubicación UPP', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->