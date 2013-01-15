<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_ID'); ?>
		<?php echo $form->error($model,'ARTICLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_NAME'); ?>
		<?php echo $form->textField($model,'ARTICLE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ARTICLE_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_SHORT_DESC'); ?>
		<?php echo $form->textField($model,'ARTICLE_SHORT_DESC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ARTICLE_SHORT_DESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_CONTENT'); ?>
		<?php echo $form->textArea($model,'ARTICLE_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ARTICLE_CONTENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_TIMESTAMP'); ?>
		<?php echo $form->textField($model,'ARTICLE_TIMESTAMP'); ?>
		<?php echo $form->error($model,'ARTICLE_TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATION_USER_IP'); ?>
		<?php echo $form->textField($model,'CREATION_USER_IP',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'CREATION_USER_IP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALIDATION_FLAG'); ?>
		<?php echo $form->textField($model,'VALIDATION_FLAG'); ?>
		<?php echo $form->error($model,'VALIDATION_FLAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
		<?php echo $form->error($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->error($model,'ARTICLE_CATEGORY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->