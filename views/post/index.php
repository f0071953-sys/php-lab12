<?php
/* @var $this yii\web\View */
/* @var $posts app\models\Post[] */
?>

<h1>Список статей</h1>

<?php foreach ($posts as $post): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?= $post->title ?>
            </h3>
        </div>
        <div class="panel-body">
            <p>
                <?= $post->excerpt ?>
            </p>

            <p>
                <?= $post->text ?>
            </p>

            <?php if ($post->category): ?>
            <p><b>Категория:</b> <?= $post->category->name ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>