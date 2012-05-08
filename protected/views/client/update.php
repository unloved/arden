<?php
$this->breadcrumbs=array(
	'Клиенты'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список Клиентов', 'url'=>array('index')),
	array('label'=>'Добавить Клиента', 'url'=>array('create')),
	array('label'=>'Просмотр Клиента', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Клиентами', 'url'=>array('admin')),
);
?>

<h1>Редактирование Клиента <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>