<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Murid */

$this->title = 'Update Murid: ' . $model->nrp;
$this->params['breadcrumbs'][] = ['label' => 'Murids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nrp, 'url' => ['view', 'id' => $model->nrp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="murid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
