<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\pemasukan\Pemasukan $model */

$this->title = 'Update Pemasukan: ' . $model->keterangan;
$this->params['breadcrumbs'][] = ['label' => 'Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container">
    <div class="card bg-secondary">
        <div class="card-body">
            <div class="mb-3 p-2 text-light">

                <h1><?= Html::encode($this->title) ?></h1>
                
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
                
                    
            </div>    
        </div>    
    </div>    
</div>    

