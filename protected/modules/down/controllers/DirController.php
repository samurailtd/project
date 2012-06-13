<?php
class DirController extends CController 
{
public function actionIndex(){

if (!empty($_GET['name'])){
    $this->createUrl('down/dir/index/name', array('name'=>$_GET['name']));
$dir = Cats::model()->findByAttributes(array('name'=>$_GET['name']));
$dirs = Cats::model()->findAllByAttributes(array('extend_id'=>$dir->id));
$files = Files::model()->findAllByAttributes(array('cat'=>$dir->id));
}else{
$this->createUrl('down/dir/index');
$dirs = Cats::model()->findAllByAttributes(array('extend_id'=>'0'));
$files = Files::model()->findAllByAttributes(array('cat'=>'0'));
}
$this->render('index', array('dirs'=>$dirs, 'files'=>$files));
}
}