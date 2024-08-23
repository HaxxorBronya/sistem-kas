<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\pemasukan\Pemasukan;
use app\modules\admin\models\pemasukan\PemasukanSearch;
use app\modules\admin\models\pengeluaran\Pengeluaran;
use app\modules\admin\models\pengeluaran\PengeluaranSearch;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengeluaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $searchModel2 = new PemasukanSearch();
        $dataProvider2 = $searchModel2->search($this->request->queryParams);
        $hari = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $data1 = [1000, 2000, 3000, 4000, 5000, 6000, 7000];
        $data2 = [10000, 9000, 8000, 7000, 6000, 5000, 4000];
        return $this->render('index', [
            'hari' => $hari,
            'data1' => $data1,
            'data2' => $data2,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModel2' => $searchModel2,
            'dataProvider2' => $dataProvider2,
        ]);
    }
}
