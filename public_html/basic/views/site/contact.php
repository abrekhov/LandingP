<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контактная информация';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

<div class="headline-bg contact-headline-bg"></div>

<section class="contact-section section section-on-bg">
    <div class="container">
    <h2 class='title text-center'><?= Html::encode($this->title) ?></h2>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

 <p class="intro text-center">Появились вопросы и Вам требуется консультация специалиста? Пишите нам не раздумывая, мы с радостью Вам поможем.</p>



                <?php $form = ActiveForm::begin(['id' => 'contact-form',
				'options' => [
						'class' => 'contact-form cta-form',
						]]); ?>
			<div class="row text-center">
                <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
					<div class="row form-groups">
                    <?= $form->field($model, 'name',
					 
						['options' => 
							['class' => 'col-md-6 col-sm-6 col-xs-12 form-group',]]					
						)->textInput(array('placeholder' => 'Введите имя', 'class'=>'form-control')) ?>

                    <?= $form->field($model, 'email', 
						['options' => [
							'placeholder' => "Введите email",
							'class' => 'col-md-6 col-sm-6 col-xs-12 form-group'
						]])->textInput(array('placeholder' => 'Введите email', 'class'=>'form-control')) ?>

                    <?= $form->field($model, 'subject',
						['options' => [
							'placeholder' => "Введите телефон",
							'class' => 'col-md-12 col-sm-12 col-xs-12 form-group',
						]])->textInput(array('placeholder' => 'Введите телефон', 'class'=>'form-control')) ?>

                    <?= $form->field($model, 'body',
						['options' => [
							'placeholder' => "Введите Ваше сообщение",
							'class' => 'col-md-12 col-sm-12 col-xs-12 form-group',
						]])->textarea(['rows' => 12,'placeholder' => 'Ваше текст Вашего сообщения']) ?>

                    <? /*=$form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) */ ?>
					
					<div class = 'col-md-12 col-sm-12 col-xs-12 form-group'>
                        <?= Html::submitButton('Отправить письмо', ['class' => 'btn btn-block btn-cta btn-cta-primary', 'name' => 'contact-button',
						]) ?>
					</div>
						

                <?php ActiveForm::end(); ?>

            </div>
            </div>
        </div>
        </div>
		</section>
		
		
		
		<section class="contact-other-section section">
    <div class="container text-center">
        <h2 class="title">Другие способы связи</h2>
        <p class="intro">Свяжитесь с нами любым удобным для вас способом — мы всегда онлайн и готовы оперативно ответить на ваши вопросы.</p>
        <div class="row">
            <ul class="other-info list-unstyled col-md-6 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 xs-offset-0" >
                <li><i class="fa fa-phone"></i><a href="tel:+79296904960">+7 (929) 690-49-60</a></li>
                <li><i class="fa fa-whatsapp"></i><a href="tel:+79296904960">+7 (929) 690-49-60</a> (WhatsApp)</li>

            </ul>
        </div><!--//row-->
    </div><!--//container-->
</section><!--//contact-other-section-->
        </div>
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
    <?php endif; ?>
</div>
