<?php
/* @var $this ArticleCategoryController */
/* @var $model ArticleCategory */

$this->breadcrumbs=array(
	'Article Categories'=>array('index'),
	$model->ARTICLE_CATEGORY_ID,
);

$this->menu=array(
	array('label'=>'List ArticleCategory', 'url'=>array('index')),
	array('label'=>'Create ArticleCategory', 'url'=>array('create')),
	array('label'=>'Update ArticleCategory', 'url'=>array('update', 'id'=>$model->ARTICLE_CATEGORY_ID)),
	array('label'=>'Delete ArticleCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARTICLE_CATEGORY_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticleCategory', 'url'=>array('admin')),
);
?>

<h1>View ArticleCategory #<?php echo $model->ARTICLE_CATEGORY_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARTICLE_CATEGORY_ID',
		'ARTICLE_CATEGORY_NAME',
		'ARTICLE_CATEGORY_DESC',
	),
)); ?>
