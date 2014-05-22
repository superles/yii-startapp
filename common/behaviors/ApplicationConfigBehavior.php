<?php

/**
 * ApplicationConfigBehavior is a behavior for the application.
 * It loads additional config parameters that cannot be statically
 * written in config/main
 */
class ApplicationConfigBehavior extends CBehavior
{
    /**
     * Declares events and the event handler methods
     * See yii documentation on behavior
     */
    public function events() {
        return array_merge(parent::events(), array(
            'onBeginRequest'=>'beginRequest',
        ));
    }

    public function beginRequest() {
        // or however you'd like to do it
        // $this->processOption('language', 'language', 'applicationLanguage', array_keys($availableLanguages), Yii::app()->getRequest()->getPreferredLanguage());

        if(Yii::app()->request->getParam('lang')){
        Yii::app()->setLanguage(Yii::app()->request->getParam('lang'));
        }
        return true;
    }

    public function isActive(){
        /**
         *
         */
        $c=app()->controller;
        $m=$c->module->id;
        $a=$c->action->id;
        $r=$c->route;
        $menu = explode("/",$c->route);

        //compare the first array element to the $id passed

        if(count($menu)==3){
            if(($menu[0] == $m)&&($menu[1] == $c->id)&&($menu[2] == $a))
            {
                return true;
            }else{
                return false;
            }
        }elseif(count($menu)==2){
            if(($menu[0] == $c->id)&&($menu[1] == $a))
            {
                return true;
            }else{
                return false;
            }
        }
    }
}