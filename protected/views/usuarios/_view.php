<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<tr>	
	 <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?> </td>
	 <td><?php echo CHtml::encode($data->nombre); ?> </td>
	 <td><?php echo CHtml::encode($data->apellido_paterno); ?> </td>
	 <td><?php echo CHtml::encode($data->apellido_materno); ?> </td>	
	 <td><?php echo CHtml::encode($data->cargo); ?>	 </td>
	 <td><?php echo CHtml::encode($data->correo_institucional); ?> </td>
	 <td><?php echo CHtml::encode($data->role0->role); ?> </td>
	 <td><?php echo CHtml::encode($data->estatus0->estatus); ?> </td>
</tr>

