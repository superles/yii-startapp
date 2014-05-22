<?php
/* @var $this AdminController */
/* @var $model User */
/* @var $form TbActiveForm */
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo t('main',$this->pageHeader)?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>
            <div class="panel-body">



    <?php $form=$this->beginWidget('\TbActiveForm', array(
	'id'=>'user-form',
        'layout'=>TbHtml::FORM_LAYOUT_HORIZONTAL,
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
                <div class="row">
                        <div class="col-lg-6">
            <?php echo $form->textFieldControlGroup($model,'username'); ?>

            <?php echo $form->passwordFieldControlGroup($model,'password'); ?>

            <?php echo $form->textFieldControlGroup($model,'email'); ?>

            <?php echo $form->textFieldControlGroup($model,'activkey'); ?>

            <?php echo $form->textFieldControlGroup($model,'superuser'); ?>

            <?php echo $form->textFieldControlGroup($model,'status'); ?>

            <?php echo $form->textFieldControlGroup($model,'create_at'); ?>

            <?php echo $form->textFieldControlGroup($model,'lastvisit_at'); ?>

            <?php echo $form->dropDownListControlGroup($model,'category',User::getCategoryForReg(),array('empty'=>t('main','Type of user'))); ?>

            <?php echo $form->dropDownListControlGroup($model,'parent_id',CHtml::listData($model->byCategory('agency')->findAll(),'id','username'),array('empty'=>t('main','Select your agency'))); ?>
                            </div><div class="col-lg-6">
    <?php
    $profileFields=Profile::getFields();
    if ($profileFields) {
        foreach($profileFields as $field) {
            /**
             * @var ProfileField $field
             */
            ?>
            <div class="form-group">
                <?php echo $form->labelEx($profile,$field->varname,array('class'=>'col-sm-4 control-label')); ?>
                <div class="col-sm-8">
                <?php
                if ($widgetEdit = $field->widgetEdit($profile)) {
                    echo $widgetEdit;
                } elseif ($field->field_type=='BOOL') {
                    echo $form->dropDownList($profile,$field->varname,array('On','Off'));
                }elseif ($field->range) {
                    echo $form->dropDownList($profile,$field->varname,Profile::range($field->range),array('class'=>'form-control'));
                }  elseif ($field->field_type=="TEXT") {
                    echo CHtml::activeTextArea($profile,$field->varname,array('class'=>'form-control'));
                } else {
                    echo $form->textField($profile,$field->varname,array('class'=>'form-control'));
                }
                ?>
                <?php echo $form->error($profile,$field->varname); ?>
                </div>
            </div>
        <?php
        }
    }
    ?>
</div>
                    <div class="row"> <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div> </div>
                    </div>

    <?php $this->endWidget(); ?>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>