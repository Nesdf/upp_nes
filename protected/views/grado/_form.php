<?php
/* @var $this GradoController */
/* @var $model Grado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'acronimo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Acrónimo *')); ?>
				<?php echo $form->error($model,'acronimo'); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'grado_academico',array('size'=>60,'maxlength'=>150, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Significado *')); ?>
				<?php echo $form->error($model,'grado_academico'); ?>
			</div>
		</div>
	</div>

	<div class="row ">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Alta de  Grado' : 'Save', array('class'=>'btn btn-success btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->