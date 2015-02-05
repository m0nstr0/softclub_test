<?php
/* @var $this EmailsController */
/* @var $model Emails */
/* @var $form CActiveForm */
?>

<center><h1>Подпишись на наши новости!</h1></center>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emails-subscribe-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php /*echo $form->errorSummary($model);*/ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Подписаться'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->