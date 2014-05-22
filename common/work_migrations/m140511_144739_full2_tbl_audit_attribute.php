<?php

class m140511_144739_full2_tbl_audit_attribute extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_audit_attribute", array(
    "id"=>"int(10) unsigned NOT NULL AUTO_INCREMENT",
    "changer"=>"varchar(255) NOT NULL",
    "changerId"=>"int(10) unsigned NOT NULL",
    "model"=>"varchar(255) NOT NULL",
    "modelId"=>"int(10) unsigned NOT NULL",
    "attribute"=>"varchar(255) NOT NULL",
    "oldValue"=>"longtext NOT NULL",
    "newValue"=>"longtext NOT NULL",
    "created"=>"datetime NOT NULL",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_audit_attribute does not support migration down.\n";
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