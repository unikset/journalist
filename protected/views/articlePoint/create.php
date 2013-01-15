<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */

$this->breadcrumbs=array(
	'Article Points'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticlePoint', 'url'=>array('index')),
	array('label'=>'Manage ArticlePoint', 'url'=>array('admin')),
);
?>

<h1>Create ArticlePoint</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>