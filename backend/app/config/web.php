<?php
// web application configuration
return array(
    // path aliases


    // application behaviors
    'behaviors' => array(
        'maintain' => array(
            'class' => 'common.behaviors.MaintainApplicationBehavior',
            'maintainFile' => realpath(__DIR__ . '/../runtime/maintain'),
        ),
        'common.behaviors.ApplicationConfigBehavior'
    ),
    'controllerMap' => array(
    ),

    // application modules

    // application components
    'components' => array(




        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(

                '<lang:(ru|en|de)>/'=>array('site/index',array('parsingOnly'=>true)),
                'page/<name>-<id:\d+>.html'=>array('cms/node/page',array('parsingOnly'=>true)),
                'pages/<view:\w+>'=>array('site/pages'),
                'admin/<controller:\w+>/<id:\d+>'=>array('<controller>/view',array('parsingOnly'=>true)),
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        'user' => array(
            'class'=>'vendor.crisu83.yii-auth.components.AuthWebUser',
            'allowAutoLogin' => true,
            'admins' => array('admin', 'test1'), // users with full access
            'identityCookie' => array('domain' => '.startapp.com', 'httpOnly' => true),
            'loginUrl' => array('/user/login'),

        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),


    ),
);