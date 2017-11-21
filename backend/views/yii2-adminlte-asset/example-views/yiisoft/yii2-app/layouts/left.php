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
                    // ['label' => 'Filters', 'icon' => ' fa fa-filter', 'url' => ['/filters']],
                    ['label' => 'Application', 'icon' => 'fa fa-id-card-o', 'url' => ['/profile']],
                    ['label' => 'Stories', 'icon' => ' fa fa-file-powerpoint-o', 'url' => ['/stories']],
                    ['label' => 'Service', 'icon' => ' fa fa-hashtag', 'url' => ['/service']],
                    ['label' => 'Social Web', 'icon' => ' fa fa-facebook', 'url' => ['/social-web/update', 'id' => 1]],
                    ['label' => 'Reviews', 'icon' => ' fa fa-comment', 'url' => ['/comments']],
                    ['label' => 'Profile', 'icon' => 'fa fa-user-circle-o', 'url' => ['/user/update', 'id' => 1]],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Translations', 'icon' => ' fa fa-database', 'url' => ['/translates']],
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
