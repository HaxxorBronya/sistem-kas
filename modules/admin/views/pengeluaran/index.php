<?php

use app\modules\admin\models\pengeluaran\Pengeluaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\modules\admin\models\pengeluaran\PengeluaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengeluaran';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="card bg-secondary">
        <div class="card-body">
            <div class="mb-3 p-2 text-light">

                <h1><?= Html::encode($this->title) ?></h1>

               

                <?php Pjax::begin(); ?>
                <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions' => [
                        'class' => 'table table-borderless table-striped table-sm '
                    ],

                    'showFooter' => true,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'No',
                            'headerOptions' => [
                                'class' => 'text-primary'
                            ],
                            

                        ],

                        
                        [
                            'attribute' => 'keterangan',
                            'footer' => 'TOTAL',
                            'footerOptions' => [
                                'class' => 'text-light fw-bold'
                            ],
                            
                            
                        ],
                        [
                            'attribute' => 'nominal',
                            
                            'value' => function($data){
                                    return number_format($data->nominal);
                                },
                            'footer' => Pengeluaran::getTotal($dataProvider->models, 'nominal'), 
                            'footerOptions' => [
                                'class' => 'text-light fw-bold'
                            ],
                            
                        ],
                        
                        [
                            'attribute' => 'tanggal',
                            'value' => 'tanggal',
                            'filter' => \yii\jui\DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal',
                            'language' => 'en',
                            'dateFormat' => 'yyyy-MM-dd',
                            ]),
                            'format' => 'html',
                            
                            
                            
                        ],
                       
                        
                        
                        [
                            'class' => ActionColumn::className(),
                            'header' => 'Aksi',
                            'headerOptions' => [
                                'class' => 'text-primary '
                            ],
                            
                            'urlCreator' => function ($action, Pengeluaran $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            },
                            
                        ],
                        

                    ],
                    
                ]); ?>
            </div>
        </div>
    </div>
</div>

    <?php Pjax::end(); ?>


