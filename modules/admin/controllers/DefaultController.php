<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\pemasukan\Pemasukan;
use app\modules\admin\models\pemasukan\PemasukanSearch;
use app\modules\admin\models\pengeluaran\Pengeluaran;
use app\modules\admin\models\pengeluaran\PengeluaranSearch;
use Codeception\Coverage\Filter;
use Yii;
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
        $hari = [];

        $jumlah_hari = cal_days_in_month(CAL_GREGORIAN, 9, 2024);

        $income = [];
        $outcome = [];

        for ($i=1; $i <= $jumlah_hari; $i++) { 
            if(strlen($i) < 2){
                $i = '0'.$i;
            }
            $tanggal = date('2024-09-'.$i.'', strtotime($i));

            $pemasukan = Yii::$app->db->createCommand('SELECT SUM(nominal) as nominal, tanggal FROM `transaksi` WHERE DATE_FORMAT(tanggal, "%Y-%m-%d") = "'.$tanggal.'" AND status = 1 GROUP BY tanggal')->queryOne();
            $pengeluaran = Yii::$app->db->createCommand('SELECT SUM(nominal) as nominal, tanggal FROM `transaksi` WHERE DATE_FORMAT(tanggal, "%Y-%m-%d") = "'.$tanggal.'" AND status = 0 GROUP BY tanggal')->queryOne();
            
            if(!empty($pemasukan['tanggal']) && $tanggal == $pemasukan['tanggal']){
                $income[] = $pemasukan['nominal'];
            }else{
                $income[] = 0;
            }
            
            if(!empty($pengeluaran['tanggal']) && $tanggal == $pengeluaran['tanggal']){
                $outcome[] = $pengeluaran['nominal'];
            }else{
                $outcome[] = 0;
            }

            $hari[] = $tanggal;
        }

        // $pengeluaran = Yii::$app->db->createCommand('SELECT SUM(nominal) as nominal, tanggal FROM `transaksi` WHERE MONTH(tanggal) = 8 AND status = 0 GROUP BY tanggal')->queryAll();
        // foreach ($pengeluaran as $data) {
        //     $outcome[] = $data['nominal'];
        // }


        return $this->render('index', [
            'hari' => $hari,
            'income' => $income,
            'outcome' => $outcome,
        ]);
    }
}
