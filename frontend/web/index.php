<?php
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require(dirname(__FILE__).'/../../vendor/yiisoft/yii/framework/YiiBase.php');

class Yii extends YiiBase
{
    /**
     * @static
     * @return WebApplication
     */
    public static function app()
    {

        return parent::app();
    }
}

Yii::setPathOfAlias('webroot',realpath(__DIR__));
Yii::setPathOfAlias('ROOT', realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR));






require(dirname(__FILE__).'/../../common/helpers/ConfigHelper.php');
require(dirname(__FILE__).'/../../common/helpers/global.php');


$config = ConfigHelper::merge(
    array(
        dirname(__FILE__).'/../app/config/main.php',
        dirname(__FILE__).'/../app/config/web.php',
        dirname(__FILE__).'/../../common/config/main.php',
        dirname(__FILE__).'/../../common/config/web.php',

    )
);

Yii::createWebApplication($config)->run();
?>