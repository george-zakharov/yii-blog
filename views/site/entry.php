<?php
/**
 * Test entry form
 *
 * TODO: Delete me after testing
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->label('Your name') ?>
    <?= $form->field($model, 'email')->label('Your email') ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>