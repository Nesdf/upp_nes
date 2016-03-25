

<h1 align="center">Consumible</h1>

<tr class="borde">
		<Td ><b>ID</b></Td>
		<Td ><b>Área</b></Td>
		<Td ><b>Referencia</b></Td>
		
	</tr>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_pdf',
	)); ?>
</table>

