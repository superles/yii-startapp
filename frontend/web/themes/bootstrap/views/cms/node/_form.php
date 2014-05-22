<fieldset class="form-content">

    <?php echo $form->textField($model,'['.$model->locale.']heading',array('placeholder'=>'heading')) ?>

    <div class="clearfix">
        <?php echo $form->labelEx($model,'['.$model->locale.']body') ?>
        <?php $this->widget('cms.widgets.markitup.CmsMarkItUp',array(
            'model'=>$model,
            'attribute'=>'['.$model->locale.']body',
            'set'=>'html',

        )) ?>
        <?php echo $form->error($model,'['.$model->locale.']body') ?>
		<div class="tags well">
			<?php $this->renderPartial('cms.views.node._tags'); ?>
		</div>
    </div>

	<?php echo $form->textArea($model,'['.$model->locale.']css',array('class'=>'','rows'=>20,'placeholder'=>'css')) ?>

</fieldset>

<fieldset class="form-attachments">

    <legend><?php echo Yii::t('CmsModule.core', 'Attachments') ?></legend>

    <?php $this->widget('bootstrap.widgets.TbGridView',array(
        'id'=>'attachments_'.$model->locale,
        'dataProvider'=>$model->getAttachments(),
        'template'=>'{items} {pager}',
        'emptyText'=>Yii::t('CmsModule.core', 'No attachments found.'),
        'showTableOnEmpty'=>false,
        'columns'=>array(
			array(
				'name'=>'id',
				'header'=>'#',
				'value'=>'$data->id',
			),
			array(
                'header'=>Yii::t('CmsModule.core', 'URL'),
                'value'=>'$data->resolveName()',
				'sortable'=>false,
            ),
			array(
				'header'=>Yii::t('CmsModule.core', 'Tag'),
				'value'=>'$data->renderTag()',
				'sortable'=>false,
			),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{delete}',
                'buttons'=>array(
                    'delete'=>array(
                        'url'=>'Yii::app()->controller->createUrl("deleteAttachment", array("id"=>$data->id))',
                    ),
                ),
            ),
        ),
    )) ?>

    <?php echo $form->fileField($model,'['.$model->locale.']attachment') ?>

</fieldset>

<?php if ($node->level === CmsNode::LEVEL_PAGE): ?>

	<fieldset class="form-page-settings">

		<legend><?php echo Yii::t('CmsModule.core','Page settings') ?></legend>

		<?php echo $form->textField($model,'['.$model->locale.']url',array('class'=>'col-md-8','placeholder'=>'url')) ?>
		<?php echo $form->textField($model,'['.$model->locale.']pageTitle',array('class'=>'col-md-8','placeholder'=>'pageTitle')) ?>
		<?php echo $form->textField($model,'['.$model->locale.']breadcrumb',array('class'=>'col-md-8','placeholder'=>'breadcrumb')) ?>
		<?php echo $form->textField($model,'['.$model->locale.']metaTitle',array('class'=>'col-md-8','placeholder'=>'metaTitle')) ?>
		<?php echo $form->textArea($model,'['.$model->locale.']metaDescription',array('class'=>'col-md-8','rows'=>3,'placeholder'=>'metaDescription')) ?>
		<?php echo $form->textField($model,'['.$model->locale.']metaKeywords',array('class'=>'col-md-8','placeholder'=>'metaKeywords')) ?>

		<p><?php echo CHtml::link(Yii::t('CmsModule.core','View page'), $node->getUrl(), array('class'=>'btn')); ?></p>

	</fieldset>

<?php endif; ?>