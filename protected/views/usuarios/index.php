

<h1>Usuarios</h1>
<?php echo CHtml::link('Link Text',array('usuarios/pdf')); ?>
<table class="table table-hover">
	<th class="texto-centrado">ID</th>
	<th class="texto-centrado">Nombre</th>
	<th class="texto-centrado">Apellido Paterno</th>
	<th class="texto-centrado">Apellido Materno</th>
	<th class="texto-centrado">Cargo</th>
	<th class="texto-centrado">Correo Institucional</th>
	<th class="texto-centrado">Role</th>
	<th class="texto-centrado">Estatus</th>

		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>

</table>
