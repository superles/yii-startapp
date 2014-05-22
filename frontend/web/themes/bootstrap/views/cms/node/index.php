<?php $this->breadcrumbs = array(
	Yii::t('CmsModule.core','Cms')=>array('admin/index'),
	Yii::t('CmsModule.core','Nodes'),
) ?>

<div class="node-index">

	<h1><?php echo Yii::t('CmsModule.core','Nodes'); ?></h1>

	<p><?php echo CHtml::link('<i class="icon-file"></i> '.Yii::t('CmsModule.core','Create a new node'),array('node/create'),array('class'=>'btn')) ?></p>

	<?php
    /**
     * @var CmsNode $data
     */
    $this->widget('bootstrap.widgets.TbGridView',array(
		'dataProvider'=>$model->search(),

        'columns'=>array(
			'id',
            array(
                'name'=>'name',
                'type'=>'raw',
                'value'=>'CHtml::link($data->name,array(\'/cms/node/update\',\'id\'=>$data->id,\'name\'=>$data->name))',
            ),
			array(
				'name'=>'parentId',
				'value'=>'$data->parent !== null ? $data->parent->name : ""',
			),
			array(
				'class'=>'TbButtonColumn',
				'viewButtonUrl'=>'Yii::app()->cms->createUrl($data->name)',
			),
		),
	)) ?>

</div>