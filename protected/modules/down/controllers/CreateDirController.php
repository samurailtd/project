<?php

class CreateDirController extends CController
{
public function actionIndex()
{
$form = new Cats;
if ($_POST){
$id = Yii::app()->db->lastInsertId;
@mkdir('/var/www/samurai/data/www/files/'.$id);
@chmod('/var/www/samurai/data/www/files/'.$id, 0777);
$form->attributes = $_POST['Cats'];
$form->scenario = 'create';
$form->save();
}
$this->render('index', array('form'=>$form));
}
}





