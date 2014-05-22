<?php
// web application configuration
return array(
    // path aliases
    'theme'=>'bootstrap',

    'aliases' => array(

    ),
    // application behaviors


    // application modules
    'modules' => array(

        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'1',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths' => array('bootstrap.gii'),
        ),



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
            'sendActivationMail' => true,

            # allow access for non-activated users
            'loginNotActiv' => false,

            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,

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

            'viewDir'=>'webroot.themes.bootstrap.views.user'



        ),
        'auth' => array(
            'class' => 'vendor.crisu83.yii-auth.AuthModule',
            'strictMode' => false, // when enabled authorization items cannot be assigned children of the same type.
            'userClass' => 'User', // the name of the user model class.
            'userIdColumn' => 'id', // the name of the user id column.
            'userNameColumn' => 'username', // the name of the user name column.

            'defaultLayout' => 'webroot.themes.bootstrap.views.layouts.column2',
//            'defaultLayout' => 'common.modules.auth.views.layouts.main',
            'viewDir' => 'vendor.crisu83.yii-auth.views', // the path to view files to use with this module.

        ),

        'cms'=>array(
            'class'=>'vendor.boo1ean.NordCms.CmsModule'
        ),

        ),

    // application components
    'components' => array(

        'cms'=>array(
            'class'=>'vendor.boo1ean.NordCms.components.Cms',
            // the names of the web users with access to the cms
            'users'=>array('admin'),
            // the langauges enabled for the cms
            'languages'=>array('en'=>'English','de'=>'German','ru'=>'Russian'),
            // the default language
            'defaultLanguage'=>'en_us',
            // the types of files that can uploaded as attachments
            'allowedFileTypes'=>'jpg, gif, png',
            // the maximum allowed filesize for attachments
            'allowedFileSize'=>1024,
            // the path to save the attachments
            'attachmentPath'=>'/files/cms/attachments/',
            // the template to use for node headings
            'headingTemplate'=>'<h1 class="heading">{heading}</h1>',
            // the template to use for widget headings
            'widgetHeadingTemplate'=>'<h3 class="heading">{heading}</h3>',
            // the template to use for page titles
            'pageTitleTemplate'=>'{title} | {appName}',
            // the application layout to use with the cms
            'appLayout'=>'webroot.themes.bootstrap.views.layouts.column2',
            // the name of the error flash message categories
            'pageLayout'=>'webroot.themes.bootstrap.views.layouts.cms.main',
            /*'flashError'=>'error',
            'flashInfo'=>'info',
            'flashSuccess'=>'success',
            'flashWarning'=>'warning',*/
        ),


        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
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
        'session' => array(
            'class'=>'CHttpSession',
            'sessionName' => md5('u3app'),
            //'connectionID' => 'db',
            //'cacheID'=>'memcache',
            'cookieMode' => 'allow',
            'cookieParams' => array(
                'domain' => '.startapp.com',
                'httponly' => true,
                'lifetime' => 3600,
                'path' => '/'
            ) )
        ),


);