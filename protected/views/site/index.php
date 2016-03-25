<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	
	<div class="row">
		<div class="col-xs-12  col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4  col-lg-offset-4">
			<div class="form-group has-success">
				<?php echo $form->textField($model,'username', array('class'=>'form-control', 'id'=>'inputWarning1', 'placeholder'=>'Usuario')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		</div>

		<div class="col-xs-12  col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4  col-lg-offset-4">
			<div class="form-group has-success">
				<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'id'=>'inputWarning1', 'placeholder'=>'Contraseña')); ?>
				<?php echo $form->error($model,'password'); ?>		
			</div>
		</div>

	<div class="col-xs-12  col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-4 col-lg-4  col-lg-offset-4">
		<?php echo CHtml::submitButton('Ingresar', array('class'=>'btn btn-primary btn-block')); ?>
	</div>
		<div class="row">
			<div class="col-xs-12  col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-2  col-lg-offset-6">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</div>


<?php $this->endWidget(); ?>
</div><!-- form -->
