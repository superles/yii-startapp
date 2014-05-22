<?php

class m140511_144739_full2_tbl_profiles_fields extends CDbMigration
{
	public function up()
	{
	$this->createTable("tbl_profiles_fields", array(
    "id"=>"int(11) NOT NULL AUTO_INCREMENT",
    "varname"=>"varchar(50) NOT NULL",
    "title"=>"varchar(255) NOT NULL",
    "field_type"=>"varchar(50) NOT NULL",
    "field_size"=>"int(3) NOT NULL",
    "field_size_min"=>"int(3) NOT NULL",
    "required"=>"int(1) NOT NULL",
    "match"=>"varchar(255) NOT NULL",
    "range"=>"text NOT NULL",
    "error_message"=>"varchar(255) NOT NULL",
    "other_validator"=>"text",
    "default"=>"varchar(255)",
    "widget"=>"varchar(255) NOT NULL",
    "widgetparams"=>"text",
    "position"=>"int(3) NOT NULL",
    "visible"=>"int(1) NOT NULL",
    "category"=>"varchar(250)",
"PRIMARY KEY (id)"), " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");


	}

	public function down()
	{
		echo "m140511_144739_full2_tbl_profiles_fields does not support migration down.\n";
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