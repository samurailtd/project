<?php echo CHtml::errorSummary($form); ?><br />
<?php echo CHtml::form('','post',array('enctype'=>'multipart/form-data')); ?>
<?=CHtml::activeFileField($form, 'upload'); ?><br />
<?=CHtml::activeLabel($form, 'cat'); ?><br />
<?=CHtml::activeTextField($form, 'cat'); ?><br />
<?=CHtml::activeLabel($form, 'view_name'); ?><br />
<?=CHtml::activeTextField($form, 'view_name'); ?><br />
<?=CHtml::activeLabel($form, 'about'); ?><br />
<?=CHtml::activeTextArea($form, 'about'); ?><br />
<?=CHtml::submitButton('Загрузить', array('id'=>'submit')); ?>
<?php echo CHtml::endForm(); ?>


