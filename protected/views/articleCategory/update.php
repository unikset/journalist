<?php
/* @var $this ArticleCategoryController */
/* @var $model ArticleCategory */

$this->breadcrumbs=array(
	'Article Categories'=>array('index'),
	$model->ARTICLE_CATEGORY_ID=>array('view','id'=>$model->ARTICLE_CATEGORY_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticleCategory', 'url'=>array('index')),
	array('label'=>'Create ArticleCategory', 'url'=>array('create')),
	array('label'=>'View ArticleCategory', 'url'=>array('view', 'id'=>$model->ARTICLE_CATEGORY_ID)),
	array('label'=>'Manage ArticleCategory', 'url'=>array('admin')),
);
?>

<h1>Update ArticleCategory <?php echo $model->ARTICLE_CATEGORY_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>