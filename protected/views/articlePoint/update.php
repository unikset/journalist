<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */

$this->breadcrumbs=array(
	'Article Points'=>array('index'),
	$model->ARTICLE_POINT_ID=>array('view','id'=>$model->ARTICLE_POINT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticlePoint', 'url'=>array('index')),
	array('label'=>'Create ArticlePoint', 'url'=>array('create')),
	array('label'=>'View ArticlePoint', 'url'=>array('view', 'id'=>$model->ARTICLE_POINT_ID)),
	array('label'=>'Manage ArticlePoint', 'url'=>array('admin')),
);
?>

<h1>Update ArticlePoint <?php echo $model->ARTICLE_POINT_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>