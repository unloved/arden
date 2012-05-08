<?php
$this->breadcrumbs=array(
	'Клиенты',
);

$this->menu=array(
	array('label'=>'Добавить Клиента', 'url'=>array('create')),
	array('label'=>'Управление Клиентами', 'url'=>array('admin')),
);
?>

<h1>Клиенты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
