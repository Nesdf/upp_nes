

<h1>Resguardos</h1>
<?php echo CHtml::link('Link Text',array('resguardo/pdf')); ?>
<table class="table table-hover">
	<th class="texto-centrado">ID</th>
	<th class="texto-centrado">Nombre</th>
	<th class="texto-centrado">Apellido Paterno</th>
	<th class="texto-centrado">Apellido Materno</th>
	<th class="texto-centrado">Número de Resguardo</th>
	<th class="texto-centrado">Estatus</th>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</table>

