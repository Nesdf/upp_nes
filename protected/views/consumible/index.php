

<h1 class="center">Consumibles</h1>

<table class="table table-hover">
	<th class="texto-centrado">ID</th>
	<th class="texto-centrado">Nombre del bien</th>
	<th class="texto-centrado">Descripción</th>
	<th class="texto-centrado">Marca</th>
	<th class="texto-centrado">Modelo</th>
	<th class="texto-centrado"># serie</th>
	<th class="texto-centrado">Costo</th>
	<th class="texto-centrado">Partida</th>
	<th class="texto-centrado">Resguardo</th>
	<th class="texto-centrado">Fecha Factura</th>
	<th class="texto-centrado">Financiamiento</th>
	<th class="texto-centrado"># serie</th>
	<th class="texto-centrado">Proveedor</th>
	<th class="texto-centrado">Leyenda</th>
	<th class="texto-centrado">Ubicación</th>
	<th class="texto-centrado">Estatus</th>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</table>
