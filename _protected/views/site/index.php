<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '';
?>
<div>
        <div>
        
            <div class="col-lg-8 col-md-12">
                <h2>Grafik Penjualan Bulanan</h2>
                <?= $this->render('_months') ?>

            </div>

            <div class="col-lg-4 col-md-12">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fa fa-list"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pesanan</span>
                        <span class="info-box-number"><?= $pesanan ?></span>
                        <span>
                            <?php echo Html::a('Selengkapnya ...', 
                                ['/pesanan']
                            ) ?>
                        </span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-heart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Produk</span>
                        <span class="info-box-number"><?= $produk ?></span>
                        <span>
                            <?php echo Html::a('Selengkapnya ...', 
                                ['/produk']
                            ) ?>
                        </span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Pengguna</span>
                        <span class="info-box-number"><?= $pengguna ?></span>
                        <span>
                            <?php echo Html::a('Selengkapnya ...', 
                                ['/pengguna']
                            ) ?>
                        </span>
                    </div>
                </div>
            </div>

        </div>


</div>