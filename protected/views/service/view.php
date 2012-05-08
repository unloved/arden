<?php
$this->breadcrumbs=array(
	'Услуги'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список Услуг', 'url'=>array('index')),
	array('label'=>'Добавить Услугу', 'url'=>array('create')),
	array('label'=>'Редактирование Услуги', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Услугу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Точно удалить?')),
	array('label'=>'Управление Услугами', 'url'=>array('admin')),
);
?>

<h1>Просмотр Услуги #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'cost',
	),
)); ?>
