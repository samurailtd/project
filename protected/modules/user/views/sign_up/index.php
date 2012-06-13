<div class="page">
    <?php echo CHtml::errorSummary($form, '<div class="errors">','</div>'); ?>
    <?php echo CHtml::form(); ?>
    <?php echo CHtml::label($form, 'login'); ?><br />
    <?php echo CHtml::activeTextField($form, 'login'); ?><br />
    <?php echo CHtml::label($form, 'pass'); ?><br />
    <?php echo CHtml::activePasswordField($form, 'pass'); ?><br />
    <?php $this->widget('CCaptcha', array('buttonLabel' => '<br>[новый код]')); ?><br />
    <?php echo CHtml::activeTextField($form,'verifyCode'); ?><br />
    <?php echo CHtml::buttonSubmit('Дальше', array('id'=>'submit')); ?><br />
    <?php echo CHtml::endForm(); ?>
</div>