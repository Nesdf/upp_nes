<?php
/* @var $this ResguardoController */
/* @var $model Resguardo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resguardo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>	

	<div class="row">

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'grado',CHtml::listData(Grado::model()->findAll(), 'id', 'acronimo'), array('empty'=>'Seleccione un Grado *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'grado'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45, 'size'=>60,'maxlength'=>85, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Nombre*')); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45, 'size'=>60,'maxlength'=>85, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Paterno *')); ?>
				<?php echo $form->error($model,'apellido_paterno'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45, 'size'=>60,'maxlength'=>85, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Materno')); ?>
				<?php echo $form->error($model,'apellido_materno'); ?>
			</div>
		</div>

		<!-- <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'numero_resguardo', array('class'=>'form-control','id'=>'disabledInput','placeholder'=>'Número de Resguardo', 'disabled')); ?>
				<?php echo $form->error($model,'numero_resguardo'); ?>
			</div>
		</div> -->

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownlist($model,'estatus',CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), array('empty'=>'Seleccione un Estatus *', 'class'=>'form-control', 'id'=>'inputSuccess2')); ?>	
				<?php echo $form->error($model,'estatus'); ?>
			</div>
		</div>
			
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Alta de Resguardo' : 'Actualizar Resguardo', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->