<?php $this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
css('/css/register.css');
/**
 * @var RegistrationController $this
 */
?>
<header style="background-color:#efefef ">
    <div class="container register">
    <h1 class="text-center"><?php echo UserModule::t("Registration"); ?></h1>
<?php if (Yii::app()->user->hasFlash('registration')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('registration'); ?>
    </div>
<?php else: ?>
    <div class="form">
        <?php $form = $this->beginWidget('UActiveForm', array(
            'id' => 'registration-form',
            'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
            'enableAjaxValidation' => true,
            'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal', 'role' => 'form'),
        )); ?>
        <div class="row">
            <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
            <?php echo $form->errorSummary(array($model, $profile));
            /**
             * @var TbActiveForm $form
             * @var User $model
             * @var Profile $profile
             */
            ?>

                <div class="col-md-6 pull-left">
                    <div class="col">
                        <div class="panel panel-default">
                            <div class="panel-heading">Registration information</div>
                            <div class="panel-body">
                                <?php echo $form->textFieldControlGroup($model, 'username', array()) ?>
                                <?php echo $form->emailFieldControlGroup($model, 'email', array()) ?>
                                <?php echo $form->passwordFieldControlGroup($model, 'password', array('help' => UserModule::t("Minimal password length 4 symbols."))) ?>
                                <?php echo $form->passwordFieldControlGroup($model, 'verifyPassword', array()) ?>
                            </div>
                        </div>
                    </div></div>
<?php
            $fields=ProfileField::model()->forUserRegistration()->findAll();
            $res=array();
            foreach($fields as $field){
                $res[$field->category][]=$field;
            }

            $cats=ProfileField::model()->getCategoryReg();
            $i=1;
            foreach(array_keys(ProfileField::model()->getCategoryPosition()) as $cat){

                if(isset($res[$cat])&&count($res[$cat])>0){
                    $cl=($i%2==0)?'left':'left';
                    echo '<div class="col-md-6">
                        <div class="col">
                            <div class="panel panel-default">
                                <div class="panel-heading">'.$cats[$cat].'</div> <div class="panel-body">';



                        foreach ($res[$cat] as $field) {
                            /**
                             * @var ProfileField $field
                             */
                            if ($widgetEdit = $field->widgetEdit($profile)) {
                                echo $form->labelEx($profile, $field->varname);
                                echo $widgetEdit;
                                echo $form->error($profile, $field->varname);
                            } elseif ($field->range) {
                                echo $form->dropDownListControlGroup($profile, $field->varname, Profile::range($field->range));
                            } elseif ($field->field_type == "INTEGER") {
                                $profile->setAttribute($field->varname, null);
                                echo $form->numberFieldControlGroup($profile, $field->varname, array());
                            } elseif ($field->field_type == "TEXT") {
                                echo $form->textAreaControlGroup($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                            } elseif ($field->field_type == "BOOL") {
                                echo $form->checkBoxControlGroup($profile, $field->varname, array('labelOptions' => array('style' => 'padding-left:0px !important;padding-right:10px;'), 'formLayout' => TbHtml::FORM_LAYOUT_HORIZONTAL));
                            } else {
                                echo $form->textFieldControlGroup($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                            }
                        }

                    echo '            </div>
                            </div>
                        </div>
                    </div>';
                }

            }

            ?>




              <div class="col-md-6">
                                <div class="col">
                            <?php if (UserModule::doCaptcha('registration')): ?>
                            <div class="panel">
                            <div class="panel-heading text-center">   <?php echo $form->labelEx($model, 'verifyCode'); ?></div>
                            	<div class="panel-body">
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                    <?php echo $form->error($model, 'verifyCode'); ?>
                                    <p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
                                        <br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
                            	</div>
                            	  <div class="submit text-center">
                                      <?php echo CHtml::submitButton(UserModule::t("Register")); ?>
                            	  </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
<?php
if($i%2!=0){
    echo "</div>";
}
?>
                    <?php $this->endWidget(); ?>

                <!-- form -->

 </div>
    </div>
<?php endif; ?>
</header>