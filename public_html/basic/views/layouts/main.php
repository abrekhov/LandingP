<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use app\models\Main;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"> 
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	 
	 <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
	 <link rel="stylesheet" href="/images/flag-icon-css-master/css/flag-icon.min.css">
	 <link rel="stylesheet" href="/roboto/roboto.css">
	 <link rel="stylesheet" href="/roboto/robotoslab.css">
	 <?if(Yii::$app->controller->id=='site'&&Yii::$app->controller->action->id!='login'){?>
	 <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <?}?>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
	
	$countries = Main::findAll(['menu_num'=>1]);
	$i=0;
	
	foreach($countries as $model){
		$i++;
		$country_items[] = ['label'=>'<span class="flag-icon flag-icon-'.$model->iconurl.'"></span>'.$model->full_name, 'url'=>['/'.$model->name]];
		
		$str = "<li class=''><a href='/{$model->name}' tabindex='-1'><span class='flag-icon flag-icon-{$model->iconurl}'></span>{$model->full_name}</a></li>";
		if($i<11){
			$country_items1.=$str;
		}
		if($i<21&&$i>10){
			$country_items2.=$str;
		}
		if($i<31&&$i>20){
			$country_items3.=$str;
		}
	}
	
	$visas = Main::findAll(['menu_num'=>2]);
	foreach($visas as $model){
		$visa_items[] = ['label'=>$model->full_name, 'url'=>['/'.$model->name]];
	}
	
	$kavkaz = Main::findAll(['menu_num'=>3]);
	foreach($kavkaz as $model){
		$kavkaz_items[] = ['label'=>$model->full_name, 'url'=>['/'.$model->name]];
	}
    NavBar::begin([
        'brandLabel' => 'Виза Без Отказа',
        'brandUrl' => Yii::$app->homeUrl,
		'screenReaderToggleText'=>'',
        'options' => [
            'class' => 'navbar-fixed-top navbar',
        ],
    ]);
	$tel = "<span class='fa fa-phone fa-lg'></span> 8(909)909-90-90";
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
		'encodeLabels'=>false,
		
        'items' => [
            [	'label' => 'Визы по странам',
				'dropDownOptions'=>['class'=>'dropdown-menu dropdown-menu-left'],
				'items' => ['<li><div class="row" style="width: 570px;">
			<ul class="list-unstyled col-md-4">'.$country_items1.'</ul>',
			'<ul class="list-unstyled col-md-4">'.$country_items2.'</ul>',
			'<ul class="list-unstyled col-md-4">'.$country_items3.'</ul></div></li>'],
			'options'=>['class' => 'dropdown-menu-left'],
			], 
            ['label' => 'Шенгенские визы','items' => $visa_items
			], 
            ['label' => 'Визы жителям <br> северного Кавказа', 'items'=>$kavkaz_items
			], 
            ['label' => 'Контакты', 'url' => ['/site/contact'], 'options'=>['class'=>'btn-cnct'] ],
			['label' => 'Оставить заявку','options'=>['class'=>'visa-btn'],'url'=>'#request'],
//visa-btn-invers			

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
       <div class="pull-left">&copy; Vizabezotkaza <?= date('Y') ?></div>

        <ul class='footer-navbar pull-right'>
		<li class='col-md-4 col-sm-4 col-xs-12 sm-break'><a href="http://vizabezotkaza.ru/about">О нас</a></li>
		<li class='col-md-4 col-sm-4 col-xs-12 sm-break'><a href="http://vizabezotkaza.ru/contact">Контакты</a><div class='tel'><i class="fa fa-phone"></i><a href="tel:+79296904960">+7 (929) 690-49-60</a></div></li>
		<li class='col-md-4 col-sm-4 col-xs-12 sm-break'><a href="http://vizabezotkaza.ru/basic/web/sitemap.xml">Карта сайта</a></li></ul>
		
		 
    </div>
	
</footer>

<?php $this->endBody() ?>
<script>
if($(window).width()>770){
jQuery('ul.nav > li').hover(function() {
jQuery(this).find('.dropdown-menu').stop(true, true).css("display","block");
}, function() {
jQuery(this).find('.dropdown-menu').stop(true, true).css("display","none");
})
}
</script>

<script>

 $(document).ready(function(){
	var body = $(".slides .slide"); 
	var current = 0;
	var backgrounds = [
	"url('../images/bg-header-1.jpg')",	"url('../images/bg-header-2.jpg')",	"url('../images/bg-header-3.jpg')"];

function nextBackground() {
  body.css(
   'background',
    backgrounds[current = ++current % backgrounds.length]+' center top'
 );

 setTimeout(nextBackground, 7000);
 }
 setTimeout(nextBackground, 7000);
   body.css('background', backgrounds[0]);
   
   
$(window).scroll(function() {

    if ($(this).scrollTop() > 1){  

        $('nav.navbar').addClass("sticky");

    }  else{

        $('nav.navbar').removeClass("sticky");
    }

});
 });
</script>
</body>
</html>
<?php $this->endPage() ?>
