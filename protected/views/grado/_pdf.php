<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<tr>	
	 <td align="center"><?php echo CHtml::encode($data->id)?> </td>
	 <td align="center"><?php echo CHtml::encode($data->nombre); ?> </td>
	 <td align="center"><?php echo CHtml::encode($data->apellido_paterno); ?> </td>
	 <td align="center"><?php echo CHtml::encode($data->apellido_materno); ?> </td>	
	 <td align="center"><?php echo CHtml::encode($data->cargo); ?>	 </td>
	 <td align="center"><?php echo CHtml::encode($data->correo_institucional); ?> </td>
	 <td align="center"><?php echo CHtml::encode($data->role0->role); ?> </td>
	 <td align="center"><?php echo CHtml::encode($data->estatus0->estatus); ?> </td>
</tr>

