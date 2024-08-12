<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        // 'css/all.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        // 'css/bootstrap-icons.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'css/tempusdominus/tempusdominus-bootstrap-4.min.css',
        'css/tempusdominus/tempusdominus-bootstrap-4.css',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap'
    ];
    public $js = [
        // 'js/jquery341.min.js',
        'js/bootstrap.bundle.min.js',
        'js/main.js',
        'js/lib/chart.min.js',
        'js/lib/easing.js',
        'js/lib/easing.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
