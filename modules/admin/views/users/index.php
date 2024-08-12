<?php

use app\modules\admin\models\users\Users;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\modules\admin\models\users\UsersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="card bg-secondary">
        <div class="card-body">
            <div class="mb-3 p-2 text-light">

                
                    <h1><?= Html::encode($this->title) ?></h1>
                
                    <p>
                        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
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
                                    'class' => 'text-primary'
                                ],

                            ],
                
                            
                            'username',
                            'password:ntext',
                           
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, Users $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                 },
                                 'header' => 'Aksi',
                                 'headerOptions' => [
                                    'class' => 'text-primary'
                                 ],

                            ],
                        ],
                    ]); ?>
                
                    <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>


