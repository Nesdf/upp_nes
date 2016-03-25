

<h1 align="center">Consumible</h1>

<table>
	<tr class="borde">
		<td>ID</td>
		<td>Grado</td>
		<td>Nombre</td>
		<td>Apellido Paterno</td>
		<td>Apellido Materno</td>
		<td>Número de Resguardo</td>
		<td>Estatus</td>
	</tr>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_pdf',
	)); ?>
</table>

