<?php
/**
 * @var CmsController $this
 */



?>



<?php $this->breadcrumbs = array(
	Yii::t('CmsModule.core', 'Cms')=>array('/cms'),
	Yii::t('CmsModule.core', 'Nodes')=>array('/cms/node'),
	ucfirst($model->name),
) ?>

<div class="node-update">

    <h1><?php echo Yii::t('CmsModule.core','Update :name',array(':name'=>ucfirst($model->name))) ?></h1>

	<?php $form = $this->beginWidget('TbActiveForm',array(
		'id'=>'cmsUpdateNodeForm',
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	))
    /**
     * @var TbActiveForm $form
     */
    ?>
        <?php

        ?>
		<fieldset class="form-node">

			<?php echo $form->uneditableField($model,'name') ?>
			<?php echo $form->dropDownList($model,'parentId',$model->getParentOptionTree()) ?>
			<?php echo $form->inlineRadioButtonList($model,'level',$model->getLevelOptions()) ?>
			<?php echo $form->checkBox($model,'published') ?>

		</fieldset>

		<?php
        $id=1;

        $tabs = array();
        $menuItem=array();
		foreach ($translations as $locale => $content) {
           /**
             * var CmsContent $content
             */

            if($locale==Yii::app()->language)
            {
                $active=true;

                clientScript()->registerScript('tab_cms','


                id = \'#tab_'.$id.'\';
                console.log(id);
                $(id).removeClass("fade");
                $(id).addClass("active");
                $(id).parent().addClass("active");


       ',CClientScript::POS_READY);

            }else{
                $active=false;

            }
            $language = Yii::app()->cms->languages[$locale];
            $menuItem[]=array('label'=>$language, 'url'=>'#tab_'.$id,'linkOptions'=>array('data-toggle'=>'tab'),'active'=>$active);

            $tabs[] = array(
                'label'=>$language,
                'content'=>$this->renderPartial('_form',array(
				        'model'=>$content,
				        'form'=>$form,
				        'node'=>$model,
				        'language'=>$language,
			            ), true),
                array(
                    'class'=>$active?"active":""
                ),
                );
            $id++;
		}
        $this->menu[]=TbHtml::menuDivider();
        $this->menu[]=array('label'=>'Page translations','items'=>$menuItem);
        ?>

        <?php

        ?>




		<?php $this->widget('bootstrap.widgets.TbTabs',array(
			'tabs'=>$tabs,
		)); ?>

		<div class="form-actions col-md-12">
			<div class="pull-left">
				<?php echo CHtml::htmlButton(Yii::t('CmsModule.core','Save'),array(
					'class'=>'btn btn-primary',
					'type'=>'submit',
				)) ?>
			</div>
			<div class="pull-right">
				<?php echo CHtml::link(Yii::t('CmsModule.core','Delete'),array('delete','id'=>$model->id),array(
					'class'=>'btn',
					'confirm'=>Yii::t('CmsModule.core','Are you sure you want to delete this node?'),
				)) ?>
			</div>
		</div>

	<?php $this->endWidget() ?>

</div>