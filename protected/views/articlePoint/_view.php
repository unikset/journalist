<?php
/* @var $this ArticlePointController */
/* @var $data ArticlePoint */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_POINT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARTICLE_POINT_ID), array('view', 'id'=>$data->ARTICLE_POINT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_POINT_TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_POINT_TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATION_USER_IP')); ?>:</b>
	<?php echo CHtml::encode($data->CREATION_USER_IP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />


</div>