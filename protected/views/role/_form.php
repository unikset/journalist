<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLE_ID'); ?>
		<?php echo $form->textField($model,'ROLE_ID'); ?>
		<?php echo $form->error($model,'ROLE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLE_NAME'); ?>
		<?php echo $form->textField($model,'ROLE_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ROLE_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLE_DESC'); ?>
		<?php echo $form->textField($model,'ROLE_DESC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ROLE_DESC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->