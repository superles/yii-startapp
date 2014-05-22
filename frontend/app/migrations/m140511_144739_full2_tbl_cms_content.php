<?php

class m140511_144739_full2_tbl_cms_content extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_cms_content", array(
    "id"=>"int(10) unsigned NOT NULL AUTO_INCREMENT",
    "nodeId"=>"int(10) unsigned NOT NULL",
    "locale"=>"varchar(50) NOT NULL",
    "heading"=>"varchar(255)",
    "body"=>"longtext",
    "css"=>"longtext",
    "url"=>"varchar(255)",
    "pageTitle"=>"varchar(255)",
    "breadcrumb"=>"varchar(255)",
    "metaTitle"=>"varchar(255)",
    "metaDescription"=>"varchar(255)",
    "metaKeywords"=>"varchar(255)",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_cms_content does not support migration down.\n";
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