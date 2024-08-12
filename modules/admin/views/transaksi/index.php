<?php

use app\modules\admin\models\transaksi\Transaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;


/** @var yii\web\View $this */
/** @var app\modules\admin\models\transaksi\TransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="card bg-secondary">
        <div class="card-body shadow-lg">
            <div class="mb-3 p-2 text-light">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'No',
                            'headerOptions' => [
                                'class' => 'text-primary fw-bold'
                            ],
                        ],

                        
                        'keterangan',
                        'nominal',
                        'status',
                        [
                            'attribute' => 'tanggal',
                            'value' => 'tanggal',
                            'filter' => \yii\jui\DatePicker::widget([
                                'model'=>$searchModel,
                                'attribute'=>'tanggal',
                                'language' => 'ru',
                                'dateFormat' => 'dd-MM-yyyy',
                            ]),
                            'format' => 'raw',
                            
                            
                        ],
                        //'created_at',
                        //'updated_at',
                        //'deleted_at',
                        [
                            'class' => ActionColumn::className(),
                            'header' => 'Aksi',
                            'headerOptions' => [
                                'class' => 'text-primary fw-bold',
                            ],
                            'urlCreator' => function ($action, Transaksi $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>


    <?php Pjax::end(); ?>

