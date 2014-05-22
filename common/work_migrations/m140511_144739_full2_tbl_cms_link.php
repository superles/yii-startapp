<?php

class m140511_144739_full2_tbl_cms_link extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_cms_link", array(
    "id"=>"int(10) unsigned NOT NULL AUTO_INCREMENT",
    "menuId"=>"int(10) unsigned NOT NULL",
    "label"=>"varchar(255) NOT NULL",
    "url"=>"varchar(255) NOT NULL",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_cms_link does not support migration down.\n";
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