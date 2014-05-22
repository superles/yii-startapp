<?php

class m140512_195719_full2_tbl_AuthItemChildFks extends CDbMigration
{
	public function up()
	{
	$this->addForeignKey("tbl_AuthItemChild_ibfk_1", "tbl_AuthItemChild", "parent", "tbl_AuthItem", "name","CASCADE","CASCADE");
$this->addForeignKey("tbl_AuthItemChild_ibfk_2", "tbl_AuthItemChild", "child", "tbl_AuthItem", "name");

	}

	public function down()
	{
		echo "m140512_195719_full2_tbl_AuthItemChildFks does not support migration down.\n";
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