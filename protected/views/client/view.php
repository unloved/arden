<?php
$this->breadcrumbs=array(
	'Клиенты'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список Клиентов', 'url'=>array('index')),
	array('label'=>'Добавить Клиента', 'url'=>array('create')),
	array('label'=>'Редактирование Клиента', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Клиента', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Точно удалить?')),
	array('label'=>'Управление Клиентами', 'url'=>array('admin')),
);
?>

<h1>Просмотр Клиента #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'phone',
	),
)); ?>
