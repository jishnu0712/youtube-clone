<?php

/** @var \yii\web\View $this */


/** @var string $content */
?>

<aside class="shadow">
    <?php echo yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/videos/index']
            ]
        ]
    ]); ?>
</aside>