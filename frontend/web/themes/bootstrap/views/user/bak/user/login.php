<?php
/**
 * @var User $model
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">

<div class="site-login">



    <div class="login-form">

        <?php $form = $this->beginWidget(
            'bootstrap.widgets.TbActiveForm',
            array(
                'id' => 'login-form',
            )
        );
        /**
         * @var TbActiveForm $form
         */
        ?>

        <fieldset>
            <?php echo $form->textFieldControlGroup(
                $model,
                'username',
                array('block' => true, 'label' => false, 'placeholder' => 'Username')
            ); ?>
            <?php echo $form->passwordFieldControlGroup(
                $model,
                'password',
                array('block' => true, 'label' => false, 'placeholder' => 'Password')
            ); ?>
            <?php echo $form->checkBoxControlGroup(
                $model,
                'rememberMe',
                array('block' => true)
            ); ?>


        </fieldset>

        <?php echo TbHtml::submitButton(
            'Login',
            array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'block' => true)
        ); ?>

        <?php $this->endWidget(); ?>
    </div>
</div>
                </div>
            </div>
        </div>
