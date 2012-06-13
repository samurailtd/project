<?php echo CHtml::form() ?>
<?=CHtml::activeLabel($form, 'name') ?><br />
<?=CHtml::activeTextField($form, 'name') ?><br />
<?=CHtml::activeLabel($form, 'extend_id') ?><br />
<?=CHtml::activeTextField($form, 'extend_id') ?><br />
<?=CHtml::submitButton('Создать', array('id'=>'submit')) ?>
<?=CHtml::endForm() ?>

