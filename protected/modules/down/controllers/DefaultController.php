<?php

class DefaultController extends Controller
{
public function actionTest()
{
Yii::import('application.extensions.file.CFile');
$form = new Files;

if ($_POST){
$upload = CFile::set('Files[upload]');
$upload->copy('files/'.$upload->basename);
$form->orig_name = $upload->basename;
$form->view_name = $_POST['Files']['view_name'];
$form->cat = $_POST['Files']['cat'];
$form->about = $_POST['Files']['about'];
$form->time = time();
$form->save();
}

$this->render('index',array('form'=>$form));
}
}





