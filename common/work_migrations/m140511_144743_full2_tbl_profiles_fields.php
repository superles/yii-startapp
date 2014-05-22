<?php

class m140511_144743_full2_tbl_profiles_fields extends CDbMigration
{
	public function up()
	{
	
$i=0;
$sql = 'SET foreign_key_checks = 0';
Yii::app()->db->createCommand($sql)->execute();
$sql = 'SET foreign_key_checks = 1';
Try{

/* Dumpling Structure for tbl_profiles_fields*/

$i++;
$toInsert[$i]['id'] = '1'; 
$toInsert[$i]['varname'] = 'first_name'; 
$toInsert[$i]['title'] = 'First Name'; 
$toInsert[$i]['field_type'] = 'VARCHAR'; 
$toInsert[$i]['field_size'] = '255'; 
$toInsert[$i]['field_size_min'] = '3'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = 'Incorrect First Name (length between 3 and 50 characters).'; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '10'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'contact'; 

$i++;
$toInsert[$i]['id'] = '2'; 
$toInsert[$i]['varname'] = 'last_name'; 
$toInsert[$i]['title'] = 'Last Name'; 
$toInsert[$i]['field_type'] = 'VARCHAR'; 
$toInsert[$i]['field_size'] = '255'; 
$toInsert[$i]['field_size_min'] = '3'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = 'Incorrect Last Name (length between 3 and 50 characters).'; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '20'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'contact'; 

$i++;
$toInsert[$i]['id'] = '3'; 
$toInsert[$i]['varname'] = 'middlename'; 
$toInsert[$i]['title'] = 'Middle name'; 
$toInsert[$i]['field_type'] = 'VARCHAR'; 
$toInsert[$i]['field_size'] = '255'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '30'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'contact'; 

$i++;
$toInsert[$i]['id'] = '4'; 
$toInsert[$i]['varname'] = 'age'; 
$toInsert[$i]['title'] = 'Age'; 
$toInsert[$i]['field_type'] = 'INTEGER'; 
$toInsert[$i]['field_size'] = '10'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '40'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'about'; 

$i++;
$toInsert[$i]['id'] = '6'; 
$toInsert[$i]['varname'] = 'country'; 
$toInsert[$i]['title'] = 'Country'; 
$toInsert[$i]['field_type'] = 'VARCHAR'; 
$toInsert[$i]['field_size'] = '255'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '1'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = 'Afghanistan;Åland Islands;Albania;Algeria;American Samoa;Andorra;Angola;Anguilla;Antarctica;Antigua and Barbuda;Argentina;Armenia;Aruba;Australia;Austria;Azerbaijan;Bahamas;Bahrain;Bangladesh;Barbados;Belarus;Belgium;Belize;Benin;Bermuda;Bhutan;Bolivia;Bosnia and Herzegovina;Botswana;Bouvet Island;Brazil;British Indian Ocean Territory;Brunei Darussalam;Bulgaria;Burkina Faso;Burundi;Cambodia;Cameroon;Canada;Cape Verde;Cayman Islands;Central African Republic;Chad;Chile;China;Christmas Island;Cocos (Keeling) Islands;Colombia;Comoros;Congo;Congo, The Democratic Republic of The;Cook Islands;Costa Rica;Cote Divoire;Croatia;Cuba;Cyprus;Czech Republic;Denmark;Djibouti;Dominica;Dominican Republic;Ecuador;Egypt;El Salvador;Equatorial Guinea;Eritrea;Estonia;Ethiopia;Falkland Islands (Malvinas);Faroe Islands;Fiji;Finland;France;French Guiana;French Polynesia;French Southern Territories;Gabon;Gambia;Georgia;Germany;Ghana;Gibraltar;Greece;Greenland;Grenada;Guadeloupe;Guam;Guatemala;Guernsey;Guinea;Guinea-bissau;Guyana;Haiti;Heard Island and Mcdonald Islands;Holy See (Vatican City State);Honduras;Hong Kong;Hungary;Iceland;India;Indonesia;Iran, Islamic Republic of;Iraq;Ireland;Isle of Man;Israel;Italy;Jamaica;Japan;Jersey;Jordan;Kazakhstan;Kenya;Kiribati;Korea, Democratic Peoples Republic of;Korea, Republic of;Kuwait;Kyrgyzstan;Lao Peoples Democratic Republic;Latvia;Lebanon;Lesotho;Liberia;Libyan Arab Jamahiriya;Liechtenstein;Lithuania;Luxembourg;Macao;Macedonia, The Former Yugoslav Republic of;Madagascar;Malawi;Malaysia;Maldives;Mali;Malta;Marshall Islands;Martinique;Mauritania;Mauritius;Mayotte;Mexico;Micronesia, Federated States of;Moldova, Republic of;Monaco;Mongolia;Montenegro;Montserrat;Morocco;Mozambique;Myanmar;Namibia;Nauru;Nepal;Netherlands;Netherlands Antilles;New Caledonia;New Zealand;Nicaragua;Niger;Nigeria;Niue;Norfolk Island;Northern Mariana Islands;Norway;Oman;Pakistan;Palau;Palestinian Territory, Occupied;Panama;Papua New Guinea;Paraguay;Peru;Philippines;Pitcairn;Poland;Portugal;Puerto Rico;Qatar;Reunion;Romania;Russian Federation;Rwanda;Saint Helena;Saint Kitts and Nevis;Saint Lucia;Saint Pierre and Miquelon;Saint Vincent and The Grenadines;Samoa;San Marino;Sao Tome and Principe;Saudi Arabia;Senegal;Serbia;Seychelles;Sierra Leone;Singapore;Slovakia;Slovenia;Solomon Islands;Somalia;South Africa;South Georgia and The South Sandwich Islands;Spain;Sri Lanka;Sudan;Suriname;Svalbard and Jan Mayen;Swaziland;Sweden;Switzerland;Syrian Arab Republic;Taiwan, Province of China;Tajikistan;Tanzania, United Republic of;Thailand;Timor-leste;Togo;Tokelau;Tonga;Trinidad and Tobago;Tunisia;Turkey;Turkmenistan;Turks and Caicos Islands;Tuvalu;Uganda;Ukraine;United Arab Emirates;United Kingdom;United States;United States Minor Outlying Islands;Uruguay;Uzbekistan;Vanuatu;Venezuela;Viet Nam;Virgin Islands, British;Virgin Islands, U.S.;Wallis and Futuna;Western Sahara;Yemen;Zambia;Zimbabwe'; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '60'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'contact'; 

$i++;
$toInsert[$i]['id'] = '7'; 
$toInsert[$i]['varname'] = 'mail_notify'; 
$toInsert[$i]['title'] = 'New mail notification'; 
$toInsert[$i]['field_type'] = 'BOOL'; 
$toInsert[$i]['field_size'] = '0'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = '0'; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '9'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'client'; 

$i++;
$toInsert[$i]['id'] = '8'; 
$toInsert[$i]['varname'] = 'description'; 
$toInsert[$i]['title'] = 'Description'; 
$toInsert[$i]['field_type'] = 'TEXT'; 
$toInsert[$i]['field_size'] = '0'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '2'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '80'; 
$toInsert[$i]['visible'] = '3'; 
$toInsert[$i]['category'] = 'other'; 

$i++;
$toInsert[$i]['id'] = '9'; 
$toInsert[$i]['varname'] = 'city'; 
$toInsert[$i]['title'] = 'City'; 
$toInsert[$i]['field_type'] = 'VARCHAR'; 
$toInsert[$i]['field_size'] = '255'; 
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '1'; 
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '90'; 
$toInsert[$i]['visible'] = '2'; 
$toInsert[$i]['category'] = 'contact'; 

$i++;
$toInsert[$i]['id'] = '10'; 
$toInsert[$i]['varname'] = 'ideal_wife_descr'; 
$toInsert[$i]['title'] = 'Ideal wife description'; 
$toInsert[$i]['field_type'] = 'TEXT'; 
$toInsert[$i]['field_size'] = '5000';
$toInsert[$i]['field_size_min'] = '0'; 
$toInsert[$i]['required'] = '0';
$toInsert[$i]['match'] = ''; 
$toInsert[$i]['range'] = ''; 
$toInsert[$i]['error_message'] = ''; 
$toInsert[$i]['other_validator'] = ''; 
$toInsert[$i]['default'] = ''; 
$toInsert[$i]['widget'] = ''; 
$toInsert[$i]['widgetparams'] = ''; 
$toInsert[$i]['position'] = '900'; 
$toInsert[$i]['visible'] = '2'; 
$toInsert[$i]['category'] = 'wishlist'; 

foreach($toInsert as $insertRow){ 
$this->insert('tbl_profiles_fields', $insertRow);

}


unset($toInsert);
        
}Catch(Exception $e){
Yii::app()->db->createCommand($sql)->execute();
echo 'Sorry got some error';
return false;
}
Yii::app()->db->createCommand($sql)->execute();


	}

	public function down()
	{
		echo "m140511_144743_full2_tbl_profiles_fields does not support migration down.\n";
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