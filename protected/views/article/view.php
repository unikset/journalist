<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->ARTICLE_ID,
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Update Article', 'url'=>array('update', 'id'=>$model->ARTICLE_ID)),
	array('label'=>'Delete Article', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARTICLE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>

<h1>View Article #<?php echo $model->ARTICLE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARTICLE_ID',
		'ARTICLE_NAME',
		'ARTICLE_SHORT_DESC',
		'ARTICLE_CONTENT',
		'ARTICLE_TIMESTAMP',
		'CREATION_USER_IP',
		'VALIDATION_FLAG',
		'USER_ID',
		'ARTICLE_CATEGORY_ID',
	),
)); ?>
