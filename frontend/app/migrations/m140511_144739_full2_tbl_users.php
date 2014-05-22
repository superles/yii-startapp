<?php

class m140511_144739_full2_tbl_users extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_users", array(
    "id"=>"int(11) NOT NULL AUTO_INCREMENT",
    "username"=>"varchar(20) NOT NULL",
    "password"=>"varchar(128) NOT NULL",
    "email"=>"varchar(128) NOT NULL",
    "activkey"=>"varchar(128) NOT NULL",
    "superuser"=>"int(1) NOT NULL",
    "status"=>"int(1) NOT NULL",
    "create_at"=>"timestamp NOT NULL",
    "lastvisit_at"=>"timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'",
    "category"=>"varchar(50) NOT NULL DEFAULT 'client'",
    "parent_id"=>"int(11)",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_users does not support migration down.\n";
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