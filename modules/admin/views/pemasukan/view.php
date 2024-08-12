<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\pemasukan\Pemasukan $model */

$this->title = $model->keterangan;
$this->params['breadcrumbs'][] = ['label' => 'Pemasukans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="card bg-secondary">
        <div class="card-body">
            <div class="mb-3 p-2 text-light">

                <h1><?= Html::encode($this->title) ?></h1>
                
                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'keterangan',
                        'nominal',
                        'status',
                        'tanggal',
                        
                    ],
                ]) ?>
                

            </div>    
        </div>    
    </div>    
</div>    


