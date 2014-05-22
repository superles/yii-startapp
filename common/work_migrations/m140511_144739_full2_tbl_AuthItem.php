<?php

class m140512_195658_full2_tbl_AuthItem extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_AuthItem", array(
    "name"=>"varchar(64) NOT NULL",
    "type"=>"int(11) NOT NULL",
    "description"=>"text",
    "bizrule"=>"text",
    "data"=>"text",
"PRIMARY KEY (name)"), " DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci");


	}

	public function down()
	{
		echo "m140512_195658_full2_tbl_AuthItem does not support migration down.\n";
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