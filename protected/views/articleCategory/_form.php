<?php
/* @var $this ArticleCategoryController */
/* @var $model ArticleCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->error($model,'ARTICLE_CATEGORY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_CATEGORY_NAME'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARTICLE_CATEGORY_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_CATEGORY_DESC'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_DESC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ARTICLE_CATEGORY_DESC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->