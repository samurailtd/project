<?php
class Sign_upController extends CController {
    public function actionIndex(){
        $form = new User;
        if (!Yii::app()->user->isGuest) Yii::app()->request->redirect('/');
        
        if (!empty($_POST['User'])){
            $form->attributes = $_POST['User'];
            $form->verifyCode = $_POST['User']['verifyCode'];
            $form->scenario = 'sign_up';
            if ($form->validate()){
                 if ($form->model()->count("login = :login", array(':login' => $form->login))) {
                                 // Указанный логин уже занят. Создаем ошибку и передаем в форму
                                $form->addError('login', 'Логин уже занят');
                 }else{
                     $form->save();
                 }
            }
        }
        $this->render('index', array('form'=>$form));
    }
}
?>
