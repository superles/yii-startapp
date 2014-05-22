<?php

class m140511_144739_full2_tbl_profiles extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_profiles", array(
    "user_id"=>"int(11) NOT NULL AUTO_INCREMENT",
    "first_name"=>"varchar(255)",
    "last_name"=>"varchar(255)",
    "middlename"=>"varchar(255) NOT NULL",
    "age"=>"int(10) NOT NULL",
    "country"=>"varchar(255) NOT NULL",
    "mail_notify"=>"tinyint(1) NOT NULL",
    "description"=>"text NOT NULL",
    "city"=>"varchar(255) NOT NULL",
    "ideal_wife_descr"=>"text NOT NULL",
"PRIMARY KEY (user_id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_profiles does not support migration down.\n";
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