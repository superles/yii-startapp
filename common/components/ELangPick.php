<?php
Yii::import('zii.widgets.CPortlet');

Yii::app()->getComponent('bootstrap');

/**
 * This is simple language picker
 * @author lowliet (lowliet.com)
 */
class ELangPick extends CPortlet
{
    /**
     * @var string picker type.
     * Valid values are 'buttons', 'dropdown' and 'links'.
     */
    public $pickerType = 'links';

    /**
     * @var string buttons size.
     * Valid values are 'mini', 'small' and 'large'.
     */
    public $buttonsSize = 'mini';

    /**
     * @var array list of languages to exclude from display list
     */
    public $excludeFromList = array();

    /**
     * @var string buttons color.
     * Valid values are 'primary', 'info', 'success', 'warning', 'danger' and 'inverse'.
     */
    public $buttonsColor = '';

    /**
     * @var string links separator.
     * Used when $pickerType = links.
     * HTML tags can be used, eg. <b>, <strong>, <i>
     */
    public $linksSeparator = ' <b>|</b> ';

    /**
     * @var string inline form style.
     */
    public $formStyle = 'margin:0; border: none; padding: 0; width: auto;';

    /**
     * Iterates through messages directories
     * @return array list of avaible languages
     */
    private static function getLanguages()
    {
        $translations = array();
        $dirs = new DirectoryIterator(Yii::app()->messages->basePath);
        foreach ($dirs as $dir)
            if ($dir->isDir() && !$dir->isDot())
                $translations[$dir->getFilename()] = $dir->getFilename();
        return in_array(Yii::app()->sourceLanguage, $translations) ? $translations : array_merge($translations, array(Yii::app()->sourceLanguage => Yii::app()->sourceLanguage));
    }

    /**
     * renders CPortlet content
     */
    protected function renderContent()
    {
        $translations = self::getLanguages();
        for ($i = 0; $i < count($this->excludeFromList); $i++)
            $this->excludeFromList[$i] = strtolower($this->excludeFromList[$i]);
        $translations = array_diff($translations, $this->excludeFromList);

        echo '<div id="languagePickerContainer">';
        switch ($this->pickerType) {
            case 'buttons':
                if (!isset(Yii::app()->components['bootstrap']))
                    throw new CException('Cannot find Bootstrap component');

                $buttons = array();
                $block='<form class="lang-form navbar-form navbar-right navbar-text" method="post"><div class="btn-group btn-group-xs " data-toggle="buttons">';
                foreach ($translations as $trans){
                    $class=(Yii::app()->language==$trans)?'active':'';
                    $block.='<label class="btn btn-default '.$class.'">
 <input type="radio" name="languagePicker" value="'.$trans.'" onchange="$(\'.lang-form\').submit();" id="option1"><img alt="" src="/img/flags/'.$trans.'.png">
</label>';
                }
                $block.='</div></form>';

                echo $block;
                /*'<form class="lang-form navbar-form navbar-right navbar-text" method="post"><div class="btn-group btn-group-xs " data-toggle="buttons">
                <label class="btn btn-default '.$ru.'">
                 <input type="radio" name="languagePicker" value="ru" onchange="$(\'.lang-form\').submit();" id="option1">RU
                </label>
                <label class="btn btn-default '.$en.'">
                 <input type="radio" name="languagePicker" value="en" onchange="$(\'.lang-form\').submit();" id="option2">EN
                </label>

                </div></form>',*/
                try {

                    echo TbHtml::buttonGroup($buttons);
                } catch (CException $e) {
                    try {
                        $this->widget('bootstrap.widgets.TbButtonGroup', array(
                            'toggle' => 'radio',
                            'size' => $this->buttonsSize,
                            'buttons' => $buttons,
                        ));
                    } catch (CException $e) {
                        echo 'Cannot find Bootstrap...';
                    }
                }
                echo CHtml::endForm();
                break;
            case 'dropdown':
                $translationsU = array();
                foreach ($translations as $k => $v)
                    $translationsU[$k] = '<img alt="" src="/img/flags/' . $k . '.png"/> ' . strtoupper($v);
                echo CHtml::form('', 'post', array('style' => $this->formStyle));

                //echo CHtml::dropDownList('languagePicker' , Yii::app()->getLanguage(), $translationsU, array('encode' => false,'submit'=>'', 'csrf'=>true));
                echo '<div class="navbar-text btn-group btn-group-sm">
  <button type="button" class="btn  btn-default">' . $translationsU[Yii::app()->getLanguage()] . '</button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>

  </button>
  <ul class="dropdown-menu" role="menu"  style="min-width: 92px !important;">';
                unset($translationsU[Yii::app()->getLanguage()]);
                foreach ($translationsU as $id => $lang) {
                    echo ' <li>' . CHtml::link($lang, Yii::app()->homeUrl, array('class' => (Yii::app()->getLanguage() == $id ? 'active' : 'inactive'), 'submit' => '', 'params' => array('languagePicker' => $id))) . '</li>';
                }
                echo ' </ul>
</div>';
                echo CHtml::endForm();
                break;
            case 'links':
                foreach ($translations as $trans)
                    echo CHtml::link(strtoupper($trans), Yii::app()->homeUrl, array('class' => (Yii::app()->getLanguage() == $trans ? 'active' : 'inactive'), 'submit' => '', 'params' => array('languagePicker' => $trans))) . ($trans === end($translations) ? '' : $this->linksSeparator);
                break;
        }
        echo '</div>';
    }

    /**
     * sets the language and saves to cookie
     * @param $daysExpires integer number of days which cookie will last
     */
    public static function setLanguage($daysExpires = 100)
    {
        if (Yii::app()->request->getPost('languagePicker') !== null && in_array($_POST['languagePicker'], self::getLanguages(), true)) {
            Yii::app()->setLanguage($_POST['languagePicker']);
            $cookie = new CHttpCookie('language', $_POST['languagePicker']);
            $cookie->expire = time() + 60 * 60 * 24 * $daysExpires;
            Yii::app()->request->cookies['language'] = $cookie;
        } else if (isset(Yii::app()->request->cookies['language']) && in_array(Yii::app()->request->cookies['language']->value, self::getLanguages(), true)) {
            Yii::app()->setLanguage(Yii::app()->request->cookies['language']->value);
        } else if (isset(Yii::app()->request->cookies['language'])) {
            unset(Yii::app()->request->cookies['language']);
        } else {
            $preferredLang = explode('_', Yii::app()->getRequest()->getPreferredLanguage());
            if (in_array($preferredLang[0], self::getLanguages(), true))
                Yii::app()->setLanguage($preferredLang[0]);
        }
    }
}

?>