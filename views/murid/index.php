<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MuridSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Murids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="murid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Murid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'nrp',
            'no_hp',
            'foto',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
