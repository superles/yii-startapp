<?php

class m140511_144743_full2_tbl_users extends CDbMigration
{
	public function up()
	{
	
$i=0;
$sql = 'SET foreign_key_checks = 0';
Yii::app()->db->createCommand($sql)->execute();
$sql = 'SET foreign_key_checks = 1';
Try{

/* Dumpling Structure for tbl_users*/

$i++;
$toInsert[$i]['id'] = '1'; 
$toInsert[$i]['username'] = 'admin'; 
$toInsert[$i]['password'] = '21232f297a57a5a743894a0e4a801fc3'; 
$toInsert[$i]['email'] = 'admin@u3soft.com'; 
$toInsert[$i]['activkey'] = ''; 
$toInsert[$i]['superuser'] = '1'; 
$toInsert[$i]['status'] = '1'; 
$toInsert[$i]['create_at'] = '2014-05-11 17:37:14'; 
$toInsert[$i]['lastvisit_at'] = '0000-00-00 00:00:00'; 
$toInsert[$i]['category'] = 'client'; 
$toInsert[$i]['parent_id'] = ''; 

foreach($toInsert as $insertRow){ 
$this->insert('tbl_users', $insertRow);

}


unset($toInsert);
        
}Catch(Exception $e){
Yii::app()->db->createCommand($sql)->execute();
echo 'Sorry got some error';
return false;
}
Yii::app()->db->createCommand($sql)->execute();


	}

	public function down()
	{
		echo "m140511_144743_full2_tbl_users does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}