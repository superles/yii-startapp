<?php
/**
 * @var Controller $this
 */
$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'collapse' => true,
        'fluid'=>true,
        'wrapper'=>false,

        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',

                'encodeLabel'=>false,
                /**
                 * type is added for color icons
                 * @todo
                 */
                'type'=>'topmenu',
                'activateParents'=>true,
                'items' => array(
                    array('label' => '<i class="fa fa-tasks "></i> Tasks ', 'url' => array('/site/index'),
                        'items' => array(
                            array('label' => '<div>
                        <p>
                            <strong>Task 1</strong>
                            <span class="pull-right text-muted">40% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>', 'url' => array('/site/index')),
                            TbHtml::navbarMenuDivider(),
                            array('label' => '<div>
                        <p>
                            <strong>Task 2</strong>
                            <span class="pull-right text-muted">20% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </div>', 'url' => array('/site/contact')),

                        ),
                        'menuOptions'=>array('class'=>'dropdown-tasks')

                    ),

                    array('label' => '<i class="fa fa-envelope"></i> Mail', 'url' => array('/site/index'),
                        'items' => array(
                            array('label' => '<div>
                        <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>', 'url' => array('/site/index')),
                            TbHtml::navbarMenuDivider(),
                            array('label' => '<div>
                        <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>', 'url' => array('/site/contact')),

                        ),
                        'menuOptions'=>array('class'=>'dropdown-messages')
                    ),
                    array('label' => '<i class="fa fa-list"></i> Cms', 'url' => "$",'items'=>array(
                        array('label'=>'Page list','url'=>array('/cms/node/index')),

                    )),
                    array('label' => '<i class="fa fa-lock"></i> Security', 'url' => array('/auth/assignment/index')),
                    array('label' => '<i class="fa fa-users"></i> Users', 'url' => array('/user/default/index')),
                    array('label' => '<i class="fa fa-cogs"></i> Settings', 'url' => '#','items'=>array(
                        array('label' => '<i class="fa fa-terminal"></i> Terminal', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => '<i class="fa fa-comment"></i> Contact', 'url' => array('/site/contact')),
                        array('label' => '<i class="fa fa-list"></i> Profile ', 'url' => array('/user/profile')),
                        array('label' => '<i class="fa fa-sign-in"></i>  Login', 'url' => array('/user/login'), 'visible' => user()->isGuest),
                        array(
                            'label' => '<i class="fa fa-sign-out"></i> Logout (' . user()->name . ')',
                            'url' => array('/user/logout'),
                            'visible' => !user()->isGuest
                        )
                    )),


                ),
                'htmlOptions'=>array('class'=>'navbar-top-links navbar-nav navbar-right'),
                // uncomment the following if your application is multilingual
                /*
                array(
                    'class'=>'vendor.crisu83.yii-multilingual.widgets.MlLanguageMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                ),
                */
            ),

        ),
        'htmlOptions'=>array()
    )
); ?>