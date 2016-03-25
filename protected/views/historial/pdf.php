
<h1 align="center">Historial</h1>

<table class="table table-hover">
	<th class="texto-centrado">ID</th>
	<th class="texto-centrado">Usuario</th>
	<th class="texto-centrado">Fecha</th>
	<th class="texto-centrado">Hora</th>
	<th class="texto-centrado">Detalle</th>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</table>