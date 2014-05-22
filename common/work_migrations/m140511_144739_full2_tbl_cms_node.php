<?php

class m140511_144739_full2_tbl_cms_node extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_cms_node", array(
    "id"=>"int(10) NOT NULL AUTO_INCREMENT",
    "created"=>"timestamp NOT NULL",
    "updated"=>"timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'",
    "parentId"=>"int(10) NOT NULL",
    "name"=>"varchar(255) NOT NULL",
    "level"=>"varchar(255) NOT NULL DEFAULT 'page'",
    "published"=>"tinyint(1) NOT NULL",
    "deleted"=>"tinyint(1) NOT NULL",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_cms_node does not support migration down.\n";
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