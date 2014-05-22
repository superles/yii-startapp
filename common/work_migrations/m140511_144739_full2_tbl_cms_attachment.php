<?php

class m140511_144739_full2_tbl_cms_attachment extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_cms_attachment", array(
    "id"=>"int(10) unsigned NOT NULL AUTO_INCREMENT",
    "created"=>"timestamp NOT NULL",
    "contentId"=>"int(10) unsigned NOT NULL",
    "filename"=>"varchar(255) NOT NULL",
    "extension"=>"varchar(50) NOT NULL",
    "mimeType"=>"varchar(255) NOT NULL",
    "byteSize"=>"int(10) unsigned NOT NULL",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_cms_attachment does not support migration down.\n";
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