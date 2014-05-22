<?php
/**
 * Simple Yii CKEditor widget
 * @property string $configJS
 * @property string $assetsPath
 * @property string $assetsUrl
 * @author Yuriy Firs <firs.yura@gmail.com>
 * @version 0.1.1
 */ 
class CKEditorWidget extends CInputWidget {
    /**
     * Assets package ID.
     */
    const PACKAGE_ID = 'ckeditor-widget';

    /**
     * @var array Default config
     */
    public $config = array(
        // You can set your default config
        //'language' => 'ru',
    );

    public $package = array();

    public $_id;

    /**
     * Init widget.
     */
    public function init()
    {
        parent::init();

        CHtml::resolveNameID($this->model,$this->attribute,$htmlOptions);

        $this->_id=$htmlOptions['id'];

        $this->htmlOptions['id']=$this->_id;

        $this->package = array(
            'baseUrl' => $this->assetsUrl,
            'js' => array(
                'ckeditor.js',
            )
        );

        $this->registerClientScript();
    }

    /**
     * Register CSS and Script.
     */
    protected function registerClientScript()
    {
        /**
         * @var CmsNode $model
         */
        clientScript()->registerScriptFile($this->getAssetsUrl().'/ckeditor.js',CClientScript::POS_HEAD)->registerScript(
                $this->_id,"

                CKEDITOR.replace( '".$this->_id."',{
                ".$this->getConfigJS()."

                });",
                CClientScript::POS_END
            );
    }

    /**
     * Get the assets path.
     * @return string
     */
    public function getAssetsPath()
    {
        return __DIR__ . '/assets';
    }

    /**
     * Print activeTextArea
     */
    public function run()
    {
        // add class ckeditor
        if (array_key_exists('class', $this->htmlOptions) && strpos($this->htmlOptions['class'], 'ckeditor') === false) {
            $this->htmlOptions['class'] .= ' ckeditor';
        } elseif (!array_key_exists('class', $this->htmlOptions))
            $this->htmlOptions['class'] = 'ckeditor';
        echo CHtml::activeTextArea($this->model,$this->attribute,$this->htmlOptions);
    }

    /**
     * Publish assets and return url.
     * @return string
     */
    public function getAssetsUrl()
    {
        return Yii::app()->assetManager->publish($this->assetsPath);
    }

    /**
     * Convert config array to config string
     * @return string
     */
    public function getConfigJS()
    {
        $return = '';
        foreach ($this->config as $key=>$value) {
            $return .= "config.".$key." = ".json_encode($value)."; ";
        }
        return $return;
    }
}
