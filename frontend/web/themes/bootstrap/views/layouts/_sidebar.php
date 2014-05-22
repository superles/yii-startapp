<?php

$this->widget(
    'bootstrap.widgets.TbNavbar',
    array(
        'display'=>TbHtml::NAVBAR_DISPLAY_STATICSIDE,
        'collapse' => false,

        'collapseOptions'=>array('class'=>'sidebar-collapse'),
        'wrapper'=>false,
        'brandLabel'=>false,
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'encodeLabel'=>false,
                'activateParents'=>true,
                /**
                 *
                 * @todo refactor sidebar theme
                 */
                'type'=>'sidebar',
                'items' => $menu,
                'htmlOptions'=>array('id'=>'side-menu'),
            ),
            // uncomment the following if your application is multilingual
            /*
            array(
                'class'=>'vendor.crisu83.yii-multilingual.widgets.MlLanguageMenu',
                'htmlOptions'=>array('class'=>'pull-right'),
            ),
            */
        ),
        'htmlOptions'=>array('class'=>'navbar-fixed-top')
    ));

?>