<?php

class m140511_144739_full2_tbl_cms_menu extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_cms_menu", array(
    "id"=>"int(10) unsigned NOT NULL AUTO_INCREMENT",
    "name"=>"varchar(255) NOT NULL",
    "created"=>"timestamp NOT NULL",
    "updated"=>"timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'",
    "deleted"=>"tinyint(1) unsigned NOT NULL",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_cms_menu does not support migration down.\n";
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