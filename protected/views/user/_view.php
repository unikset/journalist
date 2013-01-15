<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_ID), array('view', 'id'=>$data->USER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_OTHERS_COMMING_SOON')); ?>:</b>
	<?php echo CHtml::encode($data->USER_OTHERS_COMMING_SOON); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE_ID); ?>
	<br />


</div>