<?php
$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Currency','icon'=>'list','url'=>array('index')),
array('label'=>'Create Currency','icon'=>'plus','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('currency-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Currencies</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'currency-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'currency_id',
		'code',
		'name',
		'sign',
		'rate',
		'is_default',
		/*
		'enabled',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
