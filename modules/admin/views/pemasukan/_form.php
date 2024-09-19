<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\pemasukan\Pemasukan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemasukan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        1 => 'pemasukan',
        0 => 'pengeluaran',
        
        ]) ?>

    <?= $form->field($model, 'tanggal')->widget(DatePicker::className(), [
            'dateFormat' => 'yyyy-MM-dd',
            'options' => [
                'class' => 'form-control'
            ]
            ]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= \yii\helpers\Html::a( 'Cancel',  Yii::$app->request->referrer, ['class' => 'btn btn-outline-primary']);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
