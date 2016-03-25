<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
	'clientOptions'=>array(
	'validateOnSubmit'=>false,
	)
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>


	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Nombre *')); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Paterno *')); ?>
				<?php echo $form->error($model,'apellido_paterno'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Mateno')); ?>
				<?php echo $form->error($model,'apellido_materno'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'cargo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Cargo *')); ?>
				<?php echo $form->error($model,'cargo'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'correo_institucional',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Correo Instituconal *')); ?>
				<?php echo $form->error($model,'correo_institucional'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Contraseña *')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->passwordField($model,'repetir_password',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Repetir Contraseña *')); ?>
				<?php echo $form->error($model,'repetir_password'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'role',CHtml::listData(Role::model()->findAll(), 'id', 'role'), array('empty'=>'Seleccione un Role *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'role'); ?>
			</div>
		</div>

		
				<?php echo $form->textField($model,'estatus',array('value'=>'1', 'class'=>'hidden')); ?>
				<?php echo $form->error($model,'estatus'); ?>
		
	</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Usuario' : 'Guardar Usuario', array('class'=>'btn btn-primary btn-block')); ?>
			</div>
		</div>

<?php $this->endWidget(); ?>

</div><!-- form -->