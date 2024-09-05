<?php

use dosamigos\chartjs\ChartJs;
use yii\helpers\Html;
?>

<h1>Dashboard</h1>
<div class="row">
    <div class="col-md-3">
        <div class="card bg-secondary ">
            <div class="card-body text-light">
                <a href="/admin/transaksi/create">
                    
                        <div class="d-flex">
                            <div class="align-items-center">
                                <i class="me-2 fa fa-paper-plane x2"></i>
                            </div>
                            <div class="fw-bold">  
                                <span>Input</span>
                            </div>
                        </div>
                    
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-secondary ">
            <div class="card-body text-light">
                <a href="/admin/users">
                    
                        <div class="d-flex">
                            <div class="align-items-center">
                                <i class="me-2 fa fa-users x2"></i>
                            </div>
                            <div class="fw-bold">  
                                <span>Data User</span>
                            </div>
                        </div>
                    
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-secondary ">
            <div class="card-body text-light">
                <a href="/admin/pemasukan">
                    
                        <div class="d-flex">
                            <div class="align-items-center">
                                <i class="me-2 fa fa-wallet x2"></i>
                            </div>
                            <div class="fw-bold">  
                                <span>Pemasukan</span>
                            </div>
                        </div>
                    
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-secondary ">
            <div class="card-body text-light">
                <a href="/admin/pengeluaran">
                    
                        <div class="d-flex">
                            <div class="align-items-center">
                                <i class="me-2 fa fa-minus-circle x2"></i>
                            </div>
                            <div class="fw-bold">  
                                <span>Pengeluaran</span>
                            </div>
                        </div>
                    
                </a>
            </div>
        </div>
    </div>
   
</div>

<div class="row">

<?php

    

        
?>
    

<?= ChartJs::widget([
    'type' => 'bar',
    'options' => [
        'height' => 250,
        
        
    ],
    'data' => [
        'labels' => $hari,
        'datasets' => [
            [
                'label' => "Pemasukan",
                'backgroundColor' => "rgba(179,181,198,0.2)",
                'borderColor' => "rgba(179,181,198,0.2)",
                'data' => $income
            ],
            [
                'label' => "Pengeluaran",
                'backgroundColor' => "rgba(255,99,132,0.2)",
                'borderColor' => "rgba(255,99,132,0.2)",
                'data' => $outcome
            ]
        ]
    ]
]);
?>

<?php

    

?>
</div>