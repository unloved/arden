<?php
$this->breadcrumbs=array(
	'Клиенты'=>array('index'),
	'Добавление'
);

$this->menu=array(
	array('label'=>'Список Клиентов', 'url'=>array('index')),
	array('label'=>'Управление Клиентами', 'url'=>array('admin')),
);
?>

<h1>Добавление Клиента</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>