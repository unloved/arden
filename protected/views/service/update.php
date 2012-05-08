<?php
$this->breadcrumbs=array(
	'Услуги'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список Услуг', 'url'=>array('index')),
	array('label'=>'Добавить Услугу', 'url'=>array('create')),
	array('label'=>'Просмотр Услуги', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление Услугами', 'url'=>array('admin')),
);
?>

<h1>Редактирование Услуги <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>