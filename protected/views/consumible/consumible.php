<!Doctype html>
<html lang="es">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	</head>
	<body>
		<table>
			<tr>
				<td class="sin-margen"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/hidalgo.png"> </td>
				<td class="tamanios sin-margen"></td>
				<td class="sin-margen"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/mini-upp.jpg"></td>				
		</table>

			</tr>
		<div><br><br>
			<span class="negrita">Fecha: </span><?php echo $fecha; ?><br />
			<span class="negrita">Número de inventario: </span><?php echo $numero_upp?><br />
			<span class="negrita">Nombre: </span><?php echo $nombre; ?><br />
			<span class="negrita">Descripción: </span><?php echo $model->descripcion;; ?><br />
			<span class="negrita">Área: </span><?php echo $model->ubicacion0->area;?><br />
			<span class="negrita">Número de resguardo:</span> <?php echo $model->resguardo0->numero_resguardo;?><br />
			<span class="negrita">Proyecto: </span><?php echo $model->fuente_financiamiento ?><br />
			<span class="negrita">Nombre del bien: </span><?php echo $model->nombre_bien;?><br />
			<span class="negrita">Marca: </span><?php echo $model->marca;?><br />
			<span class="negrita">Modelo: </span><?php echo $model->modelo?><br />
			<span class="negrita">Número de serie:  </span><?php echo $model->numero_serie?><br />
			<br>
			<table class="texto-justificado">
				<tr>
					<td class="sin-margen">
						<hr>
						<span class="negrita"> Importante: </span> El Usuario se obliga a la responsabilidad que emana del presente documento durante el tiempo que tenga asignado este mobiliario y equipo a mantenerlo en buen estado, a notificar oportunamente a la Dirección de Administración y Finanzas, cualquier cambio de adscripción, baja, robo, daño o extravío.
						<hr>
					</td>
				</tr>
				<tr>
					<td class="sin-margen">
						ART. 47 Para salvaguardar la legalidad, honradez, lealtad, imparcialidad, y eficiencia que deben ser observados en el desempeño de su empleo, cargo o comisión, todo servidor público tendrá las siguientes obligaciones: 
						<hr>
					</td>
				</tr>
				<tr>
					<td class="sin-margen">
						III.- Utilizar los recursos que tengan asignados para desempeño de su empleo, cargo o comisión, exclusivamente para los fines a que están afectos
						<hr>
					</td>
				</tr>				
			</table>
			<br><br>
			<table class="centrado">
				<tr>
					<td class="sin-margen celda-350">						
						<span class="">ACEPTÓ</span> <br><br><br><hr>
						MUÑOZ ESTRADA EDITH<br>
						JEFE DE OFICINA C.</td>						
					<td class="sin-margen celda-350">
						ELABORÓ<br><br><br><hr>
						TÉC. J. ENOCH MORENO ALFARO<br>
 						INVENTARIOS Y ALMACÉN.
					</td>
				</tr>
			</table>
			<br><br>
			<table class="centrado">
				<tr>
					<td class="sin-margen celda-350">
						ENTREGÓ<br><br><br><hr>
						C.P. NORMA YOLANDA CERVANTES H.<br>
						JEFA DEL DPTO. RECURSOS MATERIALES,<br>
						 Y ADQUISICIONES.
					</td>
					<td class="sin-margen celda-350">
						Vo. Bo.<br><br><hr>
						ING. JORGE A. FERNÁNDEZ SALAS<br>
 						SECRETARIO ADMINISTRATIVO.

					</td>
				</tr>
			</table>

		</div>
		</div>
					
	</body>
	<footer>
	</footer>
</html>