<?php
$this->breadcrumbs=array(
	'Услуги',
);

$this->menu=array(
	array('label'=>'Добавить Услугу', 'url'=>array('create')),
	array('label'=>'Управление Услугами', 'url'=>array('admin')),
);
?>

<h1>Услуги</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
