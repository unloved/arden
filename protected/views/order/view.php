<?php
$this->breadcrumbs=array(
	'Заказы'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список Заказов', 'url'=>array('index')),
	array('label'=>'Добавить Заказ', 'url'=>array('create')),
	array('label'=>'Редактирование Заказа', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Заказ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Точно удалить?')),
	array('label'=>'Управление Заказом', 'url'=>array('admin')),
);
?>

<h1>Просмотр Заказа #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client_id',
		'master_id',
		'service_id',
		'status_id',
		'created_at',
		'ended_at',
	),
)); ?>
