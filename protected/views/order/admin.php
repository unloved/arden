<?php
$this->breadcrumbs=array(
	'Заказы'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список Заказов', 'url'=>array('index')),
	array('label'=>'Добавить Заказ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Заказами</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Продвинутый поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'client.name',
		'master.name',
		'service.name',
		'status',
                array(
                    'name'=>'created_at',
                    'value'=>' $data->created_at>0 ? date("d.m.Y", $data->created_at) : ""',
                ),
                array(
                    'name'=>'ended_at',
                    'value'=>' $data->ended_at>0 ? date("d.m.Y", $data->ended_at) : ""',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
