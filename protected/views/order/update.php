<?php
$this->breadcrumbs=array(
	'Заказы'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список Заказов', 'url'=>array('index')),
	array('label'=>'Добавить Заказ', 'url'=>array('create')),
	array('label'=>'Просмотр Заказа', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Заказами', 'url'=>array('admin')),
);
?>

<h1>Редактирование Заказа <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>