<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="ru" />



<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/default/style.css" />

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<script type="text/javascript" src="/themes/default/accordian.pack.js"></script>
</head>

<body onload="new Accordian('tml',5,'non');">
<div id="logo">
    <a href="/"><img src="/themes/default/images/logo.png" alt="" /></a>
</div>
<?php if (Yii::app()->user->isGuest): ?>
<div id="head">
<?php
$this->widget('application.components.LoginzaWidget', array(
'params'=>array(
'return_url'=>'site/loginzalogin',
'logout_url'=>'site/logout',
'providers_set'=>array('google','vkontakte','facebook','twitter','rambler','openid','mailru','yandex','mailruapi'))
)); 
?>
</div>
<?php else: ?>
    <div id="head">
        <a href="#"><?php echo Yii::app()->user->name; ?></a>
        <a href="/site/logout">Выход</a>
    </div>
<?php endif; ?>

<div id="adv">
    <a href="#">Новый Сервис Каталогов!</a><br />
    <a href="#">Java-чат Галактика знакомств!</a><br />
    <a href="#">Альтернативная-рок музыка</a><br />
</div>


<?php echo $content; ?>


<div id="banners">
    <a href="#"><img src="http://rosban.su/20065.img?page" alt="rosban.su" /></a>
</div>

<div id="foot">
    <a href="#">&copy; waPAGE.net</a> | On: <a href="#">7/12</a>
</div>

<div id="count">
    <img src="/images/yii-powered.png" />
</div>

</body>
</html>
