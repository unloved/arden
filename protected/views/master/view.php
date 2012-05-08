<?php
$this->breadcrumbs=array(
	'Мастера'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список мастеров', 'url'=>array('index')),
	array('label'=>'Добавить Мастера', 'url'=>array('create')),
	array('label'=>'Редактирование Мастера', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Мастера', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Точно удалить?')),
	array('label'=>'Управление Мастерами', 'url'=>array('admin')),
);
?>

<h1>Просмотр Мастера #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type',
	),
)); ?>
