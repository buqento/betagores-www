<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site']],
                    ['label' => 'Pesanan', 'icon' => 'list', 'url' => ['/pesanan']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'produk',
                        'icon' => 'heart-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daftar Produk', 'icon' => 'circle-o', 'url' => ['/produk'],],
                            ['label' => 'Tambah Produk', 'icon' => 'circle-o', 'url' => ['/produk/create'],],
                        ],
                    ],
                    ['label' => 'Pengguna', 'icon' => 'users', 'url' => ['/pengguna']],

                ],
            ]
        ) ?>

    </section>

</aside>
