<?php
/* @var $this RoleController */
/* @var $data Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ROLE_ID), array('view', 'id'=>$data->ROLE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE_DESC); ?>
	<br />


</div>