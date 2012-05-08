<?php
$this->breadcrumbs=array(
	'Мастера'=>array('index'),
	'Добавление'
);

$this->menu=array(
	array('label'=>'Список мастеров', 'url'=>array('index')),
	array('label'=>'Управление Мастерами', 'url'=>array('admin')),
);
?>

<h1>Добавление Мастера</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>