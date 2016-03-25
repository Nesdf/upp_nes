

<h1>Ubicación dentro de la UPP</h1>

<table class="table table-hover">
	<th class="texto-centrado">ID</th>
	<th class="texto-centrado">Ubicación</th>
	<th class="texto-centrado">Referencia de la ubicación</th>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</table>