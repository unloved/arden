<?php
$this->breadcrumbs=array(
	'Заказы'=>array('index'),
	'Добавление'
);

$this->menu=array(
	array('label'=>'Список Заказов', 'url'=>array('index')),
	array('label'=>'Управление Заказами', 'url'=>array('admin')),
);
?>

<h1>Добавление Заказа</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>