<?php
class IndexController extends CController {
public function actionIndex(){
Yii::import('application.extensions.file.CFile');
$form = new Files();
if(CFile::set('files/test.txt')->exists) echo 'test';
}
}