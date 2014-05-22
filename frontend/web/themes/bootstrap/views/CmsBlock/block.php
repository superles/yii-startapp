<?php echo $content ?>
	<?php if (Yii::app()->cms->checkAccess()): ?>
		<?php echo CHtml::link('<i class="icon-pencil"></i> '.Yii::t('CmsModule.core','Update'),
				array('/cms/node/update', 'id'=>$model->id), array('class'=>'btn small update-link', 'title'=>Yii::t('CmsModule.core', 'Update'))) ?>
	<?php endif ?>

