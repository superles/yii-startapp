<?php
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require(dirname(__FILE__).'/../../common/vendor/yiisoft/yii/framework/YiiBase.php');
class Yii extends YiiBase
{
/**
* @static
* @return CWebApplication
*/
public static function app()
{

return parent::app();
}
}

$local=require(dirname(__FILE__).'/../app/config/console.php');
$base=require(dirname(__FILE__).'/../../common/config/console.php');
$config=CMap::mergeArray($base, $local);
Yii::createWebApplication($config)->run();
?>

