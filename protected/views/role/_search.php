<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ROLE_ID'); ?>
		<?php echo $form->textField($model,'ROLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROLE_NAME'); ?>
		<?php echo $form->textField($model,'ROLE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROLE_DESC'); ?>
		<?php echo $form->textField($model,'ROLE_DESC',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->