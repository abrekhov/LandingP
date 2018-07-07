<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = ($title)?$title:'Виза Без Отказа';
if($meta_keywords){
	$this->registerMetaTag(['name' => 'keywords', 'content' => $meta_keywords]);
}
if($meta_description){
	$this->registerMetaTag(['name' => 'description', 'content' => $meta_description]);
}
?>
<div class="site-index">


    <div class="body-content">
            <div class="bg-slider-wrapper">
    <div class="flexslider bg-slider">
        <ul class="slides">
            <li class="slide "></li>

        </ul>
    </div>
</div><!--//bg-slider-wrapper-->
	
	
<section class="promo section section-on-bg">
    <div class="container text-center">
        
		
		<?if($header_desc){
			echo $header_desc;
		?>
		
		<?}
		else{?>
		<h1 class="title">Шенгенские визы с гарантией<br />Оплата после получения визы</h1>
        <p class="intro">Визовый центр &laquo;Виза Без Отказа&raquo; — легкое оформление шенгенских виз.<br />Быстро, при минимуме документов и с гарантией результата.</p>
		<?}?>
        <p><a class="btn btn-cta btn-cta-primary scrollto" href="#request">Заказать Визу</a></p>
        <a href="#features" class="btn-link scrollto"><i class="fa fa-arrow-circle-down"></i> Подробнее о нас</a>
    </div><!--//container-->
</section><!--//promo-->

<?if($blog_text){?>
<div class="blog blog-as-section ">
    <div class="row container">
        <div id="blog-mansonry" class="blog-list">
            <article class="post col-xs-12">
                <div class="post-inner">
                    <div class="content">
                        <?=$blog_text?>
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article><!--//post-->
        </div><!--//blog-list-->
    </div><!--//row-->
</div>
<?}?>



<div class="sections-wrapper">


<section id="features" class="features section">
    <div class="container">
        <div class="row">
            <h2 class="title text-center">Чем именно вам подойдет визовый центр &laquo;Виза Без Отказа&raquo;?</h2>
            <p class="intro text-center">Мы возьмем на себя все хлопоты связанные с визами, а Вы, тем временем, сможете заняться действительно важными вопросами.</p>
            
			<div class="item col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="icon">
                    <i class="fa fa-rocket"></i>
                </div><!--//icon-->
                <div class="content">
                    <h3 class="title">Гарантируем срок и результат</h3>
                    <p>Мы гарантируем получение выбранной вами визы в указанные сроки.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="icon">
                    <i class="fa fa-shield"></i>
                </div><!--//icon-->
                <div class="content">
                    <h3 class="title">Обеспечиваем надежность</h3>
                    <p>Более 7 лет работы. Оплата выбранной вами визы происходит только после ее получения.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-0 col-lg-offset-0 text-center">
                <div class="icon">
                    <i class="fa fa-coffee"></i>
                </div><!--//icon-->
                <div class="content">
                    <h3 class="title">Избавляем от трудностей</h3>
                    <p>Для оформления большинства виз требуется минимальный комплект документов.</p>
                </div><!--//content-->
            </div><!--//item-->
        </div><!--//row-->

    </div><!--//container-->
</section><!--//features-->








<!-- ******Steps Section****** -->
<section class="steps section">
    <div class="container">
        <h2 class="title text-center">Получить визу с нами очень просто</h2>
        <div class="row">
            <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                <h3 class="title"><span class="number">1</span><br /><span class="text">Выбираем визу</span></h3>
                <p>Оставляйте заявку на сайте, и мы свяжемся с Вами в кротчайшие сроки и подберем оптимальный вариант.</p>
            </div><!--//step-->
            <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                <h3 class="title"><span class="number">2</span><br /><span class="text">Передайте документы</span></h3>
                <p>Паспорт и фото - вот все, что нужно. Оплата только при получении визы! Привезите сами, либо вызовите нашего курьера. </p>
            </div><!--//step-->
            <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                <h3 class="title"><span class="number">3</span><br /><span class="text">Получите вашу визу</span></h3>
                <p>Оплатите полученную вами визу и отправляйтесь в путешествие по Европе!</p>
            </div><!--//step-->
        </div><!--//row-->

        <div class="text-center"><a class="btn btn-cta btn-cta-primary" href='#request'>Заказать визу</a></div>

    </div><!--//container-->
</section><!--//steps-->










<section class="section testimonials">
    <div class="container">
        <h2 class="title text-center">Что говорят клиенты о визовом центре &laquo;Виза Без Отказа&raquo;?</h2>
        <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol><!--//carousel-indicators-->
            <div class="carousel-inner">
                <div class="item active">
                    <figure class="profile"><img src="/images/opinions/vladimir.png" alt="" width='140' height='140'/></figure>
                    <div class="content">
                        <blockquote>
                            <i class="fa fa-quote-left"></i>
                            <p>В самый последний момент решили с друзьями отправиться в Европу, у всех кроме меня виза была. Нам предстояла поездка по нескольким странам на авто, сложно было понять в какое посольство обращаться. Ребята оперативно помогли сделать шенген визу сразу на 1 год. Для чистого паспорта это отличный резульат я считаю!</p>
                        </blockquote>
                        <p class="source">Гамзат<br /><span class="title">Махачкала, Россия</span></p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item">
                    <figure class="profile"><img src="/images/opinions/victoria.png" alt="" width='140' height='140'/></figure>
                    <div class="content">
                        <blockquote>
                            <i class="fa fa-quote-left"></i>
                            <p>Необходима была срочно виза Шенген на выходные. Чеченцам часто отказывают, но нас проконсультировали какие документы надо дополнительно собрать и в итоге вышла виза на полгода.  Всем друзьям теперь советую. Спасибо!</p>
                        </blockquote>
                        <p class="source">Хеда<br /><span class="title">Грозный, Россия</span></p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item">
                    <figure class="profile"><img src="/images/opinions/azat.png" alt="" width='140' height='140'/></figure>
                    <div class="content">
                        <blockquote>
                            <i class="fa fa-quote-left"></i>
                            <p>Ребята очень помогли решить вопрос с визой мне и моей семье, так кака путешествуем мы часто. Из-за места рождения получить визу проблема, но все решили, визы вышли как нам и обещали.</p>
                        </blockquote>
                        <p class="source">Азат<br /><span class="title">Москва, родом из Узбекистана</span></p>
                    </div><!--//content-->
                </div><!--//item-->
            </div><!--//carousel-inner-->

        </div><!--//carousel-->
    </div><!--//container-->
</section><!--//testimonials-->




<section id="request" class="section cta-section text-center home-cta-section">
    <div class="container">
        <h2 class="title">Готовы отправиться в Европу?</h2>
        <p class="intro">Уже более <span class="counting">1,000</span> человек отправились в поезку с помощью «Виза Без Отказа», присоединяйтесь и Вы!</p>
        
		<? $form = ActiveForm::begin([
			'enableClientValidation'=>false,
			'layout' => 'inline',
			//'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
			'fieldConfig' => [
				'horizontalCssClasses' => [
					'label' => 'col-sm-2',
					'offset' => 'col-sm-offset-4',
					'input' => 'col-sm-2',
					'wrapper' => 'col-sm-3',
					'error' => '',
					'hint' => '',
				],
			],
		]); ?>

        <?= $form->field($model, 'name', [
			'inputOptions' => [
				'placeholder' => "Введите имя",
			],]) ?>
        <?= $form->field($model, 'phone', [
			'inputOptions' => [
				'placeholder' => "Введите телефон",
			],]) ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Заказать визу'), ['class' => 'btn btn-cta btn-cta-primary']) ?>
        </div>
		<?php ActiveForm::end(); ?>
		<?if(Yii::$app->session->hasFlash('requestSended')){?>
		<div class="form-success collapse">
			<div class="alert alert-info" role="alert">
				<strong>Заявка на визу успешно отправлена!</strong><br>Наш менеджер свяжется с вами в течении <strong>30 минут</strong> в рабочие часы для уточнения деталей заказа.
			</div>
			<div class="text-center">
				<button type="reset" class="btn btn-cta btn-cta-secondary">Отлично</button>
			</div>
        </div>
		<?}?>
		<?if(Yii::$app->session->hasFlash('requestFailed')){?>
		<div class="form-success collapse">
                <div class="alert alert-info" role="alert">
                    <strong>Что-то пошло не так!</strong><br>Попробуйте ещё раз!
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-cta btn-cta-secondary">Отлично</button>
                </div>
        </div>
		<?}?>
		<!--<form id="cta-order-form" role="form" data-action="inquiryForm::onOctoMailSent" class="form-inline cta-form">
            <div class="form-groups">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <label for="phone">Ваш телефон:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите телефон">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-cta btn-cta-primary" data-loading-text="Загрузка...">Заказать Визу</button>
                </div>
            </div>
            <div class="form-success collapse">
                <div class="alert alert-info" role="alert">
                    <strong>Заявка на визу успешно отправлена!</strong><br>Наш менеджер свяжется с вами в течении <strong>30 минут</strong> в рабочеие часы для уточнения деталей заказа.
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-cta btn-cta-secondary">Отлично</button>
                </div>
            </div>
        </form>-->
     </div><!--//container-->
	 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48958601 = new Ya.Metrika({
                    id:48958601,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48958601" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</section>

    </div>
    </div>
</div>

