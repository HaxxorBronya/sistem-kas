<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/donate-solidd.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Sistem Kas</title>
    
  
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-donate me-2"></i>Sistem Kas</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= Url::to('@web/img/user.svg') ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Human</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                   
                    <a href="/" class="nav-item nav-link <?= (Yii::$app->controller->id == 'default' ? 'active' : '') ?> mt-2"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <hr>
                    <a href="/admin/transaksi/create" class="nav-item nav-link  <?= (Yii::$app->controller->id == 'transaksi' ? 'active' : '') ?>"><i class="fa fa-paper-plane me-2"></i>Input</a>
                    <a href="/admin/users" class="nav-item nav-link <?= (Yii::$app->controller->id == 'users' ? 'active' : '') ?>"><i class="fa fa-users me-2"></i>Data User</a>
                    <a href="/admin/pemasukan" class="nav-item nav-link <?= (Yii::$app->controller->id == 'pemasukan' ? 'active' : '') ?>"><i class="fa fa-wallet me-2"></i>Pemasukan</a>
                    <a href="/admin/pengeluaran" class="nav-item nav-link <?= (Yii::$app->controller->id == 'pengeluaran' ? 'active' : '') ?>"><i class="fa fa-minus me-2"></i>Pengeluaran</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= Url::to('@web/img/user.svg') ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Human</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-dark border-0 rounded-0 rounded-bottom m-0">
                            
                            <?= 
								Html::beginForm(['/site/logout'])
								.Html::submitButton(
									'Logout',
									['class' => 'nav-link btn btn-link logout bg-dark']
									)
									.Html::endForm();
								?>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4 p-4 vh-100">
                <?= $content ?>
            </div>

            <!-- Blank End -->
            
            
            <!-- Footer Start -->
            
            
            <div class="container-fluid  pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#" >Sistem Kas</a>, All Right Reserved. 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        
        
        <!-- Back to Top -->
        
    </div>
    
    
    
    
    
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>