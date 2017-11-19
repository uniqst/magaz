<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       

        <!-- search form -->
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Category', 'icon' => 'dashboard', 'url' => ['/category']],
                    ['label' => 'Filters', 'icon' => 'dashboard', 'url' => ['/filters']],
                    ['label' => 'Application', 'icon' => 'dashboard', 'url' => ['/profile']],
                    ['label' => 'Stories', 'icon' => 'dashboard', 'url' => ['/stories']],
                    ['label' => 'Service', 'icon' => 'dashboard', 'url' => ['/service']],
                    ['label' => 'Social Web', 'icon' => 'dashboard', 'url' => ['/social-web/update', 'id' => 1]],
                    ['label' => 'Reviews', 'icon' => 'dashboard', 'url' => ['/comments']],
                    ['label' => 'Profile', 'icon' => 'dashboard', 'url' => ['/user/update', 'id' => 1]],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
