<?php
/**
 * MaildownloadCommand class file.
 */
Yii::import('application.vendors.PHPExcel',true);

$cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_in_memory;
/*$cacheSettings = array( 'memcacheServer'  => 'localhost',
    'memcachePort'    => 11211,
    'cacheTime'       => 600
);*/
$cacheSettings = array( 'memoryCacheSize' => '1024MB');
PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

class MaildownloadCommand extends CConsoleCommand
{
	/**
	 * Executes the command.
	 * @param array command line parameters for this command.
	 */

	/**
	 * Provides the command description.
	 * This method may be overridden to return the actual command description.
	 * @return string the command description. Defaults to 'Usage: php entry-script.php command-name'.
	 */
    public $_importFileID;
    public $_importID;
    public $_obj;
    public $_rows;
    public $_sheetID;
    public $_sheetTitle;



    public function  actionIndex(){



            Yii::import('common.extensions.eimap.eimap',true);

            $server = '{imap.gmail.com:993/ssl}INBOX';

            $login='price@4kolesa.com.ua';

            $password='Gfhjkm6804231';

            $connection = imap_open($server, $login, $password);

            $mailboxes = imap_list($connection, $server, '*');



            foreach ($mailboxes as $mailbox){
                echo '<pre>';
                echo $mailbox;
                echo '</pre>';
                if(preg_match('/.*INBOX.*/i',$mailbox))
                    goto hop;
            }

            hop:


            $i=new EIMap($mailbox,$login,$password);

            if($i->connect()){

                $unseen = $i->searchmails( EIMap::SEARCH_UNSEEN );

                if($unseen && is_array($unseen)) // do we have any?
                {
                    // put new ones first
                    rsort($unseen);

                    foreach($unseen as $msgId)
                    {


                        $s=$i->getAttachments($msgId);

                        $mail = $i->getMail( $msgId );




                      $data['sender'][]=$mail->fromAddress;
                         $data['text'][]=$mail->toString;
                         $data['files']=$mail->attachments;
                         $data['subject'][]=$mail->subject;
                        if(is_array($data['files'])){
                        foreach($mail->attachments as $id=>$file)
                        {
                            $c=new CDbCriteria;
                            $c->compare('email',$mail->fromAddress);
                            $user=User::model()->find($c);
                            $type=PHPExcel_IOFactory::identify($file['filepath']);
                            if(isset($user)){

                                if($type=='Excel5'||$type=='Excel2007'){
                                $efile = new ImportFiles;
                                $file=Yii::app()->file->set($file['filepath']);
                                /**
                                 * @var $file CFile
                                 */
                                $file->setFilename(uniqid());
                                $file->setExtension($type=='Excel5'?'xls':'xlsx');

                                $efile->filename =  $file->getRealPath();
                                $efile->save();
                                $obj=PHPExcel_IOFactory::createReader($type)->load($file->getRealPath());

                                $redis=new ARedisList((string) $efile->_id);
                                    /**
                                     * @var $obj PHPExcel
                                     */
                                foreach ($obj->getWorksheetIterator() as $sheet){
                                    /**
                                     * @var $sheet PHPExcel_Worksheet
                                     */
                                    $redis->add(igbinary_serialize($sheet->toArray('',true,false,true)));

                                }
                                $import=new Import;
                                $import->user_id=$user->id;
                                $import->file=(string) $efile->_id;
                                $import->created_time=time();

                                $import->save();


                                }else{
                                    $efile = new ImportFiles;
                                    $efile->filename = $file['filepath'];
                                    $efile->save();
                                    $this->_importFileID=(string) $efile->_id;
                                    $import=new Import;
                                    $import->user_id=$user->id;
                                    $import->file=$this->_importFileID;
                                    $import->created_time=time();

                                    $import->save();
                                    $report=new T4mailReport();
                                    $report->wrongImportFile((string) $import->_id);
                                }

                            }

                        }
                        }


                    }

                  //  WizardArray::magicDump($data);

                }

              //  WizardArray::magicDump($i->getNumberOfMails());



            }


    }
    public function actionGet(){

    }

}