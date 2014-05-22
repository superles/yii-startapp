<?php

class CreateadminCommand extends CConsoleCommand
{
   public function getHelp()
   {
       return <<<EOD
USAGE
  

DESCRIPTION
  

EOD;
   }
   
   public function run($args)
   {
           Yii::import('User');
           Yii::import('Profiles');
           $user=new User();
           $user->username="admin";
           $user->password=md5("admin");
            $user->superuser=1;
            $user->status=1;
            $user->email='admin@u3soft.com';
            $user->save();



}
}
