<?php
/* @var $this ArticlePointController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Article Points',
);

$this->menu=array(
	array('label'=>'Create ArticlePoint', 'url'=>array('create')),
	array('label'=>'Manage ArticlePoint', 'url'=>array('admin')),
);
?>

<h1>Article Points</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
