<?php /* @var $this Controller */ ?>
<?php
$this->menu=array(
    array('label'=>'<i class="fa fa-home"></i> Home', 'url'=>array('/site/index')),
    array('label'=>'<i class="fa fa-files-o"></i> Pages', 'url'=>'#','items'=>array(
        array('label'=>'<i class="fa fa-list"></i> Profile ', 'url'=>array('/user/profile', 'view'=>'about')),
        array('label'=>'<i class="fa fa-comment"></i> Contact', 'url'=>array('/site/contact')),
    )),

    array('label'=>'<i class="fa fa-sign-in"></i>  Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
    array('label'=>'<i class="fa fa-sign-out"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)

);

$this->beginContent('//layouts/with_sidebar'); ?>


    <div id="page-wrapper">
        <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
            'encodeLabel'=>false,
            'homeLabel'=>'<i class="fa fa-home"></i> '. t('main','Home'),
            'homeUrl'=>'/',
            'links' => $this->breadcrumbs,
        )); ?>
        <?php echo $content; ?>
    </div>

<?php $this->endContent(); ?>