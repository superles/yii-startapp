<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/with_sidebar'); ?>


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