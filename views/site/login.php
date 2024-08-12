<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class=" mb-3">
                            <a href="#" class="">
                                <h3 class="text-primary text-center"><i class="fa fa-donate me-2"></i>Sistem Kas</h3>
                            </a>
                            
                        </div>
                        <div class="  mb-3">
                            <h3 class="text-center">Login</h3>

                        </div>
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                        ]); ?>
                    
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    
                        <?= $form->field($model, 'password')->passwordInput(
                            
                        ) ?>
                    
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>
                    
                        <div class="form-group">
                            <div>
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                    
                        <?php ActiveForm::end(); ?>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
	
    
    