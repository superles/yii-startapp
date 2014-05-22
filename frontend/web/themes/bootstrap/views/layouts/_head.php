<?php
/* @var Controller $this */
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <title><?php echo e($this->pageTitle); ?></title>

    <!-- Core CSS - Include with every page -->


    <?php css('css/bootstrap.css'); ?>
    <?php css('css/u3app.css'); ?>

    <?php css('font-awesome/css/font-awesome.css'); ?>


    <?php clientScript()->registerCoreScript('jquery'); ?>
    <?php js('js/bootstrap.min.js',CClientScript::POS_END); ?>
    <?php js('js/plugins/metisMenu/jquery.metisMenu.js',CClientScript::POS_END); ?>
    <?php js('js/sb-admin.js',CClientScript::POS_END); ?>
    <?php //app()->bootstrap->registerAllScripts(); ?>
    <?php //app()->bootstrap->registerYiistrapCss(); ?>
    <?php css('css/yiistrap.css');?>

</head>