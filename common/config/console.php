<?php
// console application configuration
return array(



    'modules' => array(
        'user'=>array(
            'class' => 'vendor.mishamx.yii-user.UserModule',
            'tableUsers' => 'tbl_users',
            'tableProfiles' => 'tbl_profiles',
            'tableProfileFields' => 'tbl_profiles_fields',


            //'class' => 'auth.components.AuthWebUser',
            //'class'=>'WebUser',
            //'allowAutoLogin'=>true,

            # encrypting method (php hash function)
            'hash' => 'md5',

            # send activation email
            'sendActivationMail' => false,

            # allow access for non-activated users
            'loginNotActiv' => true,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => true,

            # automatically login from registration
            'autoLogin' => true,

            # registration path
            'registrationUrl' => array('/user/registration'),

            # recovery password path
            'recoveryUrl' => array('/user/recovery'),

            # login form path
            'loginUrl' => array('/user/login'),

            # page after login
            'returnUrl' => array('/user/profile'),

            # page after logout
            'returnLogoutUrl' => array('/user/login'),

        ),
        'auth' => array(
            'class' => 'vendor.crisu83.yii-auth.AuthModule',
            'strictMode' => true, // when enabled authorization items cannot be assigned children of the same type.
            'userClass' => 'User', // the name of the user model class.
            'userIdColumn' => 'id', // the name of the user id column.
            'userNameColumn' => 'username', // the name of the user name column.

            'defaultLayout' => 'application.views.layouts.minimal',
//            'defaultLayout' => 'common.modules.auth.views.layouts.main',
            'viewDir' => 'vendor.crisu83.yii-auth.views', // the path to view files to use with this module.

        ),
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),

        'user' => array(
            'allowAutoLogin' => true,
            'class' => 'AuthWebUser',
            'admins' => array('admin', 'test1'), // users with full access
            'identityCookie' => array('domain' => '.app.com', 'httpOnly' => true),
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),


    ),

    'commandMap' => array(
        'dump' => array(
            'class' => 'common.commands.tools.MysqldumpCommand',
            'basePath' => __DIR__ . '/../../',
            'dumpPath' => 'common/tests/_data',
        ),
        'environment' => array(
            'class' => 'common.commands.tools.EnvironmentCommand',
            'basePath' => __DIR__ . '/../../',
            'flushPaths' => array(
                'web/assets',
                'web/css',
                'web/js',
            ),
        ),
        'maintain' => array(
            'class' => 'common.commands.tools.MaintainCommand',
            'basePath' => __DIR__ . '/../../',
            'flushPaths' => array(),
        ),
        // uncomment the following if you enable the imagemanager extension.
        /*
        'image' => array(
            'class' => 'vendor.crisu83.yii-imagemanager.commands.ImageCommand',
        ),
        */
        'migrate' => array(
            'class' => 'system.cli.commands.MigrateCommand',
            'migrationTable' => 'migration',
        ),
        'createadmin' => array(
            'class' => 'common.commands.tools.CreateadminCommand',

        ),
        'dbcreate' => array(
            'class' => 'common.commands.tools.DbcreateCommand',

        ),
        'deft' => array(
            'class' => 'common.commands.tools.DeftmigrationsCommand',

        ),
    )
);
