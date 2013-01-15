<?php
/* @var $this ArticleCategoryController */
/* @var $data ArticleCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_CATEGORY_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARTICLE_CATEGORY_ID), array('view', 'id'=>$data->ARTICLE_CATEGORY_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_CATEGORY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_CATEGORY_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARTICLE_CATEGORY_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->ARTICLE_CATEGORY_DESC); ?>
	<br />


</div>