<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-point-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_POINT_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_POINT_ID'); ?>
		<?php echo $form->error($model,'ARTICLE_POINT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_POINT_TIMESTAMP'); ?>
		<?php echo $form->textField($model,'ARTICLE_POINT_TIMESTAMP'); ?>
		<?php echo $form->error($model,'ARTICLE_POINT_TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATION_USER_IP'); ?>
		<?php echo $form->textField($model,'CREATION_USER_IP',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'CREATION_USER_IP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARTICLE_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_ID'); ?>
		<?php echo $form->error($model,'ARTICLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
		<?php echo $form->error($model,'USER_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->