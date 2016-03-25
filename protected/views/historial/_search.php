<?php
/* @var $this HistorialController */
/* @var $model Historial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		
		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Usuario')); ?>
			</div>
		</div>

		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php #echo $form->textField($model,'fecha'); ?>
				<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker',
						array(
							'model'=>$model,
							'attribute'=>'fecha',
							'language'=>'es',
							'htmlOptions'=>array(
								'class'=>'form-control',
								'placeholder'=>'Fecha',
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

		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'hora',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Hora')); ?>
			</div>
		</div>

		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'accion',array('size'=>60,'maxlength'=>90, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Detalle')); ?>
			</div>
		</div>

		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'id_usuario', array('class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Role de sistema')); ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton('Búsqueda Avanzada', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->