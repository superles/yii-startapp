<?php

class DbcreateCommand extends CConsoleCommand
{
   public function getHelp()
   {
       return <<<EOD
USAGE

dbcreate [OPTIONS] to create database from config

OPTIONS

-f  : drop existing database and create new


EOD;
   }
    
    const CONF_ALIAS='common.config.main';
   
   public function run($args)
   {

       $dbname=self::getDbName();
       var_dump($dbname);
       $db=self::getDbConf();
       Yii::trace("DBNAME=".$dbname."\n");
       if(isset($args)){
       $first=isset($args)?$args[0]:"";
       switch ($first) {
           case '-f':
               echo(self::dropDB($db->username,$db->password,$dbname));
               echo(self::createDB($db->username,$db->password,$dbname));
               break;
           case 'force':
               echo(self::dropDB($db->username,$db->password,$dbname));
               echo(self::createDB($db->username,$db->password,$dbname));
               break;
           default:
               echo(self::createDB($db->username,$db->password,$dbname));

       }
       }else{
           echo(self::createDB($db->username,$db->password,$dbname));
       }




   }
   



    public static function getDbName(){



        $dbname=preg_match('/dbname\=(.*)/',self::getDbConf()->connectionString,$match);
        return $match[1];

    }

    public static function getDbConf($name='db'){
        $db=include(Yii::getPathOfAlias(self::CONF_ALIAS).'.php');
        $db= new CAttributeCollection($db['components'][$name]);
        return $db;
    }

    public static function createDB($dbuser,$dbpass,$dbname){
        $cmd= "mysql -u".$dbuser." -p".$dbpass." -e 'create database ".$dbname."'";
        system(escapeshellcmd($cmd),$res);
        return $res;
    }
    public static function dropDB($dbuser,$dbpass,$dbname){
        $cmd= "mysql -u".$dbuser." -p".$dbpass." -e 'drop database ".$dbname."'";
        system(escapeshellcmd($cmd),$res);
        return $res;
    }
    public static function SqlDB($dbuser,$dbpass,$sql){
        $cmd= "mysql -u".$dbuser." -p".$dbpass." -e '".mysql_real_escape_string($sql)."'";
        system(escapeshellcmd($cmd),$res);
        return $res;
    }
}
