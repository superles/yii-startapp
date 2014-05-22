<?php

class m140511_144740_full2_tbl_AuthAssignmentFks extends CDbMigration
{
	public function up()
	{
	$this->addForeignKey("tbl_AuthAssignment_ibfk_1", "tbl_AuthAssignment", "itemname", "tbl_AuthItem", "name");

	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_AuthAssignmentFks does not support migration down.\n";
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