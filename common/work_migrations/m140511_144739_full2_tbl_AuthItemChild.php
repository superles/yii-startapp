<?php

class m140512_195717_full2_tbl_AuthItemChild extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_AuthItemChild", array(
    "parent"=>"varchar(64) NOT NULL",
    "child"=>"varchar(64) NOT NULL",
"PRIMARY KEY (parent,child)"), " DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci");


	}

	public function down()
	{
		echo "m140512_195717_full2_tbl_AuthItemChild does not support migration down.\n";
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