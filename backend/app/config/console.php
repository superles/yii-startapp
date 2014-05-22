<?php
// console application configuration
return array(

    'commandMap' => array(
        'dump' => array(
            'class' => 'app.commands.tools.MysqldumpCommand',
            'basePath' => __DIR__ . '/../../',
            'dumpPath' => 'app/tests/_data',
        ),
        'environment' => array(
            'class' => 'app.commands.tools.EnvironmentCommand',
            'basePath' => __DIR__ . '/../../',
            'flushPaths' => array(
                'web/assets',
                'web/css',
                'web/js',
            ),
        ),
        'maintain' => array(
            'class' => 'app.commands.tools.MaintainCommand',
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
            'class' => 'app.commands.tools.CreateadminCommand',

        ),
        'dbcreate' => array(
            'class' => 'app.commands.tools.DbcreateCommand',

        ),
        'deft' => array(
            'class' => 'app.commands.tools.DeftmigrationsCommand',

        ),
    )
);
