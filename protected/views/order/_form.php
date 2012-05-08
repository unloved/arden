<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со знаком <span class="required">*</span> являются обязательными для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->dropDownList($model,'client_id', CHtml::listData(Client::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'client_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'master_id'); ?>
		<?php echo $form->dropDownList($model,'master_id', CHtml::listData(Master::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_id'); ?>
		<?php echo $form->dropDownList($model,'service_id', CHtml::listData(Service::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'service_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->