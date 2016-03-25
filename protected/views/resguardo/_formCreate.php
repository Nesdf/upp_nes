
<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
<?php 
	$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
	                'id'=>'vmodal',
	                	'options'=>array(
	                    'title'=>'Agregar Grado Académico',
	                    'autoOpen'=>false,
	                    'modal'=>'false',
	                    'width'=>'250',
	                    'height'=>'300',
	                    'overlay'=> array(
	                    	'backgroundColor'=>'#fff',
	                    	'opacity'=>'0.2',
	                    	),
	                    'show'=>array(
		                'effect'=>'blind',
		                'duration'=>1200,
				            ),
				        'hide'=>array(
				                'effect'=>'explode',
				                'duration'=>600,
				            ), 
			                ),
			   
			             ));

			
	$this->renderPartial('//grado/_form',array('model'=>$model_grado),false);

				
	$this->endWidget();
	?>
		</div>
</div>

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

		<div class="col-xs-9 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<?php echo $form->dropDownList($model,'grado',CHtml::listData(Grado::model()->findAll(), 'id', 'acronimo'), array('empty'=>'Seleccione un Grado *', 'class'=>'form-control', 'id'=>'inputSuccess2',)); ?>
				<?php echo $form->error($model,'grado'); ?>
			</div>
		</div>

		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 ">
			<div class="form-group has-success has-feedback">
				<?php echo CHtml::link('Agregar Grado Académico','',array('onclick'=>'$("#vmodal").dialog("open") ; return false;', 'class'=>'label label-success links')); ?>
			</div>
		</div>
	</div>
	<div class="row">

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
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			<div class="form-group has-success has-feedback">
				<h2><?php echo 'No. Resguardo: '.$num_resguardo?></h2>
				<?php echo $form->textField($model,'numero_resguardo',array('value'=>$num_resguardo, 'class'=>'hidden')); ?></h2>
				<?php echo $form->error($model,'numero_resguardo'); ?>
			</div>
		</div>
		
				<?php echo $form->textField($model,'estatus',array('value'=>'1', 'class'=>'hidden')); ?>
				<?php echo $form->error($model,'estatus'); ?>
			
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Alta de Resguardo' : 'Actualizar Resguardo', array('class'=>'btn btn-primary btn-block')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->