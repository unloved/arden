<?php
$this->breadcrumbs=array(
	'Услуги'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список Услуг', 'url'=>array('index')),
	array('label'=>'Добавить Услугу', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('service-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Услугами</h1>

<p>
Вы можете использовать знаки (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
или <b>=</b>) в начале строки для уточнения параметров поиска
</p>

<?php echo CHtml::link('Продвинутый поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'service-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'cost',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
