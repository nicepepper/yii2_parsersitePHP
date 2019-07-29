<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php  $this->beginPage() ?>
<!DOCTYPE    html>
<html lang="ru">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</header>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <il role="" class="presentation"><?= Html::a('Главную', ['/post/test'])?></il>
                <il role="presentation"><?= Html::a('Магазины', ['/post/show-shop/'])?></il>
                <il role="presentation"><?= Html::a('Товары', ['/post/show'])?></il>
            </ul>
<!--            --><?php //debug($this->blocks); ?>
<!--            --><?php //if ( isset($this->blocks['block1']) ): ?>
<!--                --><?php //echo $this->blocks['block1'] ?>
<!--            --><?php //endif; ?>
            <?= $content ?>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>