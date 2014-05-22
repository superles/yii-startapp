<?php

class m140511_144743_full2_tbl_profiles extends CDbMigration
{
	public function up()
	{
	
$i=0;
$sql = 'SET foreign_key_checks = 0';
Yii::app()->db->createCommand($sql)->execute();
$sql = 'SET foreign_key_checks = 1';
Try{

/* Dumpling Structure for tbl_profiles*/

$i++;
$toInsert[$i]['user_id'] = '1'; 
$toInsert[$i]['first_name'] = 'les'; 
$toInsert[$i]['last_name'] = 'les'; 
$toInsert[$i]['middlename'] = ''; 
$toInsert[$i]['age'] = '0'; 
$toInsert[$i]['country'] = ''; 
$toInsert[$i]['mail_notify'] = '0'; 
$toInsert[$i]['description'] = ''; 
$toInsert[$i]['city'] = ''; 
$toInsert[$i]['ideal_wife_descr'] = ''; 

foreach($toInsert as $insertRow){ 
$this->insert('tbl_profiles', $insertRow);

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
		echo "m140511_144743_full2_tbl_profiles does not support migration down.\n";
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