<?php
class DownloadController extends CController
{
public function actionIndex()
{
Yii::import('application.extensions.file.CFile');
$file = Files::model()->findByAttributes(array('id'=>$_GET['id']));
$mfile = CFile::set('files/'.$file['orig_name'], true);
$mfile->download($file['orig_name'], true);
}
}