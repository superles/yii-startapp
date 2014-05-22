<?php

class m140511_144739_full2_tbl_log extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_log", array(
    "id"=>"int(11) unsigned NOT NULL AUTO_INCREMENT",
    "user_id"=>"int(11) unsigned NOT NULL",
    "severity"=>"enum('info','warn','critical') NOT NULL DEFAULT 'info'",
    "event_name"=>"varchar(120) NOT NULL",
    "ip_address"=>"varchar(15) NOT NULL",
    "details"=>"varchar(255) NOT NULL",
    "dt_stamp"=>"datetime",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_log does not support migration down.\n";
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