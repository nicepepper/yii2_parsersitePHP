<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MagazineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Magazines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="magazine-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Magazine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
