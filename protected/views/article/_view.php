<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARTICLE_ID), array('view', 'id'=>$data->ARTICLE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_SHORT_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_SHORT_DESC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_TIMESTAMP')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_TIMESTAMP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATION_USER_IP')); ?>:</b>
	<?php echo CHtml::encode($data->CREATION_USER_IP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALIDATION_FLAG')); ?>:</b>
	<?php echo CHtml::encode($data->VALIDATION_FLAG); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_CATEGORY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_CATEGORY_ID); ?>
	<br />

	*/ ?>

</div>