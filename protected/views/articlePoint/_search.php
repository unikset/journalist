<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_POINT_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_POINT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_POINT_TIMESTAMP'); ?>
		<?php echo $form->textField($model,'ARTICLE_POINT_TIMESTAMP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATION_USER_IP'); ?>
		<?php echo $form->textField($model,'CREATION_USER_IP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARTICLE_ID'); ?>
		<?php echo $form->textField($model,'ARTICLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->