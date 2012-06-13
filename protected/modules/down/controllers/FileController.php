<?php
class FileController extends CController 
{
public function actionIndex()
{
$this->createUrl('down/file/index/name');
Yii::import('application.extensions.file.CFile');
Yii::import('application.extensions.time.Time');
$file = Files::model()->findByAttributes(array('view_name'=>$_GET['name']));
$size = CFile::set('files/'.$file->orig_name)->size;
$time = Time::timeAgoInWords($file->time);
$this->render('index',array('size'=>$size, 'file'=>$file, 'time'=>$time));
}
}