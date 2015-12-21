<aside class="main-sidebar">

    <section class="sidebar">
        

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    
                    ['label' => 'Main Menu ', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Human Resource',
                        'icon' => 'fa fa-user text-blue',
                        'url' => '#',
                        'items' => [
                            ['label' => 'ข้อมูลผู้ใช้', 'icon' => 'fa fa-navicon', 'url' => ['/user/index'],],
                            ['label' => 'ตำแหน่ง', 'icon' => 'fa fa-navicon', 'url' => ['/position/index'],],
                            ['label' => 'ข้อมูลแผนก', 'icon' => 'fa fa-navicon', 'url' => ['/department/index'],],
                            ['label' => 'คำนำหน้า', 'icon' => 'fa fa-navicon', 'url' => ['/prefix/index'],],
                            ['label' => 'บุคคล', 'icon' => 'fa fa-navicon', 'url' => ['/person/index'],],
                        ],
                    ],
                    ['label' => 'Maketing ', 'icon' => 'fa fa-shopping-cart text-aqua', 'url' => '#'],
                    ['label' => 'Accounting ', 'icon' => 'fa fa-dollar text-yellow', 'url' => '#'],
                    [
                        'label' => 'Planning ', 'icon' => 'fa fa-bar-chart text-primary', 'url' => '#',
                        'items' => [
                            ['label' => 'J-001 Thai Oil', 'icon' => 'fa fa-circle-o text-red', 'url' => ['/gii'],],
                            ['label' => 'J-002 Esso', 'icon' => 'fa fa-circle-o text-aqua', 'url' => ['/debug'],],
                            ['label' => 'J-003 Ploto', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/debug'],],
                            ['label' => 'J-004 Power Plant', 'icon' => 'fa fa-circle-o text-green', 'url' => ['/debug'],],
                            ['label' => 'J-004 Power Plant', 'icon' => 'fa fa-circle-o text-blue', 'url' => ['/debug'],],
                        ]
                    ],
                    [
                        'label' => 'Construction', 'icon' => 'fa fa-cogs text-green', 'url' => '#',
                        'items' => 
                        [
                            ['label' => 'J-001 Thai Oil', 'icon' => 'fa fa-circle-o', 'url' => ['/gii'],],
                            ['label' => 'J-002 Esso', 'icon' => 'fa fa-circle-o', 'url' => ['/debug'],],
                        ]
                    ],
                    [
                        'label' => 'Quality Control', 'icon' => 'fa fa-check-square text-red', 'url' => '#',
                        'items' =>
                        [
                            ['label' => 'J-001 Thai Oil', 'icon' => 'fa fa-circle-o', 'url' => ['/gii'],],
                            ['label' => 'J-002 Esso', 'icon' => 'fa fa-circle-o', 'url' => ['/debug'],],
                        ]
                    ],
                    ['label' => 'Warehouse', 'icon' => 'fa fa-home text-sky', 'url' => '#'],
                    ['label' => 'Store', 'icon' => 'fa fa-square text-purple', 'url' => '#'],
                    ['label' => 'Safty', 'icon' => 'fa fa-plus-square text-green', 'url' => '#'],
                    ['label' => 'Administrator', 'icon' => 'fa fa-odnoklassniki text-orange', 'url' => '#'],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    ['label' => 'Main Menu Iron Chang System', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Human Resource',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'ข้อมูลผู้ใช้', 'icon' => 'fa fa-file-code-o', 'url' => ['/user/index'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>
    </section>
</aside>
