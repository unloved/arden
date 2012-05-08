<?php
$this->breadcrumbs=array(
	'Мастера',
);

$this->menu=array(
	array('label'=>'Добавить Мастера', 'url'=>array('create')),
	array('label'=>'Управление Мастерами', 'url'=>array('admin')),
);
?>

<h1>Мастера</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
