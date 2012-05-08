<?php
$this->breadcrumbs=array(
	'Мастера'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список мастеров', 'url'=>array('index')),
	array('label'=>'Добавить Мастера', 'url'=>array('create')),
	array('label'=>'Просмотр Мастера', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Мастерами', 'url'=>array('admin')),
);
?>

<h1>Редактирование Мастера <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>