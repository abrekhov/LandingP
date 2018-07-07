<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Main */

$this->title = Yii::t('app', 'Create Main');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
