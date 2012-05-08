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
	array('label'=>'Управление Заказами', 'url'=>array('admin')),
);
?>

<h1>Просмотр Заказа #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client.name',
		'master.name',
		'service.name',
		'status',
		array(
                    'name'=>'created_at',
                    'value'=>($model->created_at>0 ? date("d.m.Y", $model->created_at) : ""),
                ),
                array(
                    'name'=>'ended_at',
                    'value'=>($model->ended_at>0 ? date("d.m.Y", $model->ended_at) : ""),
                ),
	),
)); ?>
