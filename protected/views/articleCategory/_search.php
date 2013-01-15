<?php
/* @var $this ArticleCategoryController */
/* @var $model ArticleCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_CATEGORY_NAME'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_CATEGORY_DESC'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_DESC',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->