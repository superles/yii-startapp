<?php

class m140511_144739_full2_tbl_YiiSession extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_YiiSession", array(
    "id"=>"char(32) NOT NULL",
    "expire"=>"int(11)",
    "data"=>"blob",
    "user_id"=>"int(11)",
    "user_token"=>"varchar(255)",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_YiiSession does not support migration down.\n";
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