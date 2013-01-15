<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_NAME'); ?>
		<?php echo $form->textField($model,'ARTICLE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_SHORT_DESC'); ?>
		<?php echo $form->textField($model,'ARTICLE_SHORT_DESC',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_CONTENT'); ?>
		<?php echo $form->textArea($model,'ARTICLE_CONTENT',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_TIMESTAMP'); ?>
		<?php echo $form->textField($model,'ARTICLE_TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATION_USER_IP'); ?>
		<?php echo $form->textField($model,'CREATION_USER_IP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALIDATION_FLAG'); ?>
		<?php echo $form->textField($model,'VALIDATION_FLAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_CATEGORY_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_CATEGORY_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->