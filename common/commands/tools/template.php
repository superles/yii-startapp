<?php

class {ClassName} extends CDbMigration
{
	public function up()
	{
	$this->addForeignKey("tbl_AuthAssignment_ibfk_1", "tbl_AuthAssignment", "itemname", "tbl_AuthItem", "name");

	}

	public function down()
	{
		echo "{ClassName} does not support migration down.\n";
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