<?php $this->breadcrumbs = array(
	Yii::t('CmsModule.core','Cms')=>array('admin/index'),
	Yii::t('CmsModule.core', 'Nodes')=>array('/cms/node'),
	Yii::t('CmsModule.core','Create')
) ?>

<div class="node-create">

    <h1><?php echo Yii::t('CmsModule.core','Create node') ?></h1>

	<?php $form = $this->beginWidget('TbActiveForm',array(
		'id'=>'cmsCreateNodeForm',
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)) ?>

		<fieldset class="form-node">

			<?php echo $form->textField($model,'name',array('hint'=>Yii::t('CmsModule.core','Node name cannot be changed afterwards.'))) ?>
			<?php echo $form->dropDownList($model,'parentId',$model->getParentOptionTree()) ?>
			<?php echo $form->inlineRadioButtonList($model,'level',$model->getLevelOptions()) ?>

		</fieldset>

		<div class="form-actions">
			<?php echo CHtml::htmlButton(Yii::t('CmsModule.core','Create'),array(
				'class'=>'btn btn-primary',
				'type'=>'submit',
			)) ?>
		</div>

	<?php $this->endWidget() ?>

</div>
