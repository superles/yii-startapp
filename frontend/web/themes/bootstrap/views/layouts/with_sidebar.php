<?php /* @var $this Controller */ ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php $this->renderPartial('webroot.themes.bootstrap.views.layouts._head'); ?>

    <body>


    <?php $this->renderPartial('webroot.themes.bootstrap.views.layouts._topbar',array('menu'=>$this->menu))?>
    <?php $this->renderPartial('webroot.themes.bootstrap.views.layouts._sidebar',array('menu'=>$this->menu))?>
    <div id="wrapper">




        <?php echo $content; ?>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->


    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

    </body>

    </html>


