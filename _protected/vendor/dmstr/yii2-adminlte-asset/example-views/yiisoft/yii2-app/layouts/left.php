<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site']],
                    ['label' => 'Pesanan', 'icon' => 'list', 'url' => ['/pesanan']],
                    ['label' => 'produk', 'icon' => 'heart-o', 'url' => ['/produk'],],
                    ['label' => 'Pengguna', 'icon' => 'users', 'url' => ['/pengguna']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
