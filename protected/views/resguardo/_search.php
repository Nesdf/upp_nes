12<?php
/*4@var $this ResguardoController */
/* @var $model Resguardo */
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
				<?php echo $form->textField($model,'id', array( 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'ID')); ?>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'grado',CHtml::listData(Grado::model()->findAll(), 'id', 'acronimo'), array('empty'=>'Seleccione un Grado *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'grado'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Nombre')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellid Paterno')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Materno')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'numero_resguardo', array('class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Número de Resguardo')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'estatus',CHtml::listData(Estatus::model()->findAll(), 'id', 'estatus'), array('empty'=>'Seleccione un Estatus', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton('Búsqueda avanzada', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->