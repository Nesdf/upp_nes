<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); 
	
?>

<br><br>
	<div class="row">

		<!--   -->

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'ID')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'correo_institucional',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Correo Electrónico')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Nombre')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_paterno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Paterno')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'apellido_materno',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Apellido Materno')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->textField($model,'cargo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control', 'id'=>'inputSuccess2', 'placeholder'=>'Cargo')); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'role',Usuarios::getRole(), array('empty'=>'Seleccione un Role', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
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
			<?php echo CHtml::submitButton('Búsqueda Avanzada', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>
	
<?php $this->endWidget(); ?>

