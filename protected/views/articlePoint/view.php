<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */

$this->breadcrumbs=array(
	'Article Points'=>array('index'),
	$model->ARTICLE_POINT_ID,
);

$this->menu=array(
	array('label'=>'List ArticlePoint', 'url'=>array('index')),
	array('label'=>'Create ArticlePoint', 'url'=>array('create')),
	array('label'=>'Update ArticlePoint', 'url'=>array('update', 'id'=>$model->ARTICLE_POINT_ID)),
	array('label'=>'Delete ArticlePoint', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARTICLE_POINT_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticlePoint', 'url'=>array('admin')),
);
?>

<h1>View ArticlePoint #<?php echo $model->ARTICLE_POINT_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARTICLE_POINT_ID',
		'ARTICLE_POINT_TIMESTAMP',
		'CREATION_USER_IP',
		'ARTICLE_ID',
		'USER_ID',
	),
)); ?>
