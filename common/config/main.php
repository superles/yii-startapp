<?php


// shared application configuration
return array(

    'name' => 'Application',



    //'sourceLanguage'    =>'en',

    'language'          =>'en',

    'aliases' => array(


        'vendor' => 'ROOT.vendor',

        'bootstrap' => 'ROOT.vendor.crisu83.yiistrap',

        'common' => 'ROOT.common',



    ),
    // components to preload

    // paths to import
    'import' => array(
        'vendor.mishamx.yii-user.components.*',
        'bootstrap.helpers.*',
        'bootstrap.form.*',
        'bootstrap.behaviors.*',
        'bootstrap.widgets.*',
        'vendor.nordsoftware.yii-emailer.behaviors.*',
        'common.models.*',
        'common.components.*',
        'common.helpers.*',

        'vendor.crisu83.yii-auth.AuthModule',
        'vendor.boo1ean.NordCms.CmsModule',
        'vendor.mishamx.yii-user.models.*',



    ),
    // application components
    'components' => array(

        'authManager' => array(
            // 'class'=>'common.modules.auth.components.CachedDbAuthManager',
            'class' => 'CDbAuthManager',
            // 'cachingDuration'=>3600,
            'defaultRoles' => array('guest', 'guests'),

            'itemTable'=>'tbl_AuthItem',
            'itemChildTable'=>'tbl_AuthItemChild',
            'assignmentTable'=>'tbl_AuthAssignment',

            'behaviors' => array(
                'auth' => array(
                    'class' => 'auth.components.AuthBehavior',
                ),
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=u3app',
            'username' => 'root',
            'password' => '1',
            'charset' => 'utf8',
            'emulatePrepare' => true,
            'enableProfiling' => YII_DEBUG,
            'enableParamLogging' => YII_DEBUG,
            //'schemaCachingDuration' => 3600,
            'schemaCachingDuration' => 0,
            'tablePrefix' => 'tbl_',
        ),



        'email'=>array(
            'class'=>'vendor.nordsoftware.yii-emailer.components.Emailer'
        ),
    ),
    // application parameters
    'params' => array(
        'adminEmail' => 'les_csh@mail.ru',
        'languages'=>array('en'=>'English', 'ru'=>'Russian'),
    ),
);