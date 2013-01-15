<?php
/* @var $this ArticlePointController */
/* @var $model ArticlePoint */

$this->breadcrumbs=array(
	'Article Points'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticlePoint', 'url'=>array('index')),
	array('label'=>'Create ArticlePoint', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#article-point-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Article Points</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'article-point-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ARTICLE_POINT_ID',
		'ARTICLE_POINT_TIMESTAMP',
		'CREATION_USER_IP',
		'ARTICLE_ID',
		'USER_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
