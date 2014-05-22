<?php
// shared application configuration
return array(
    'basePath' => realpath(__DIR__ . '/..'),
    // application name


    // path aliases

    // components to preload
    'preload' => array('log'),
    // paths to import
    'import' => array(

        'application.helpers.*',
        'application.models.*',
        'application.components.*',




    ),
    // application components
    'components' => array(

        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),



        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages

            ),
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
