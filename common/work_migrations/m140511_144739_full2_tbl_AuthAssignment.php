<?php

class m140512_195728_full2_tbl_AuthAssignment extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_AuthAssignment", array(
    "itemname"=>"varchar(64) NOT NULL",
    "userid"=>"varchar(64) NOT NULL",
    "bizrule"=>"text",
    "data"=>"text",
"PRIMARY KEY (itemname,userid)"), " DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci");


	}

	public function down()
	{
		echo "m140512_195728_full2_tbl_AuthAssignment does not support migration down.\n";
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