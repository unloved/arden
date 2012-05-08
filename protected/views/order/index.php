<?php
$this->breadcrumbs=array(
	'Заказы',
);

$this->menu=array(
	array('label'=>'Добавить Заказ', 'url'=>array('create')),
	array('label'=>'Управление Заказами', 'url'=>array('admin')),
);
?>

<h1>Заказы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
