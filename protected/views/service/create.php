<?php
$this->breadcrumbs=array(
	'Услуги'=>array('index'),
	'Добавление'
);

$this->menu=array(
	array('label'=>'Список Услуг', 'url'=>array('index')),
	array('label'=>'Управление Услугами', 'url'=>array('admin')),
);
?>

<h1>Добавление Услуги</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>