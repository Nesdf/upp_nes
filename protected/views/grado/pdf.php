

<h1 align="center">Usuarios</h1>


<table>
	<tr class="borde">
		<Td ><b>ID</b></Td>
		<Td ><b>Nombre</b></Td>
		<Td ><b>Apellido Paterno</b></Td>
		<Td ><b>Apellido Materno</b></Td>
		<Td ><b>Cargo</b></Td>
		<Td ><b>Correo Institucional</b></Td>
		<Td ><b>Role</b></Td>
		<Td ><b>Estatus</b></Td>
	</tr>
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_pdf',
		)); ?>
	
</table>
