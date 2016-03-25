<?php
/* @var $this UbicacionController */
/* @var $model Ubicacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'id', array('class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'ID')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>100, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Área UPP ')); ?>
			</div>
		</div>

		<!-- <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textArea($model,'referencia',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Referencia')); ?>
			</div>
		</div> -->
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton('Búsqueda Avanzada', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->