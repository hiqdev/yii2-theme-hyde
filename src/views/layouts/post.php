<?php $this->beginContent('@hiqdev/themes/hyde/views/layouts/main.php') ?>

<div class="post">
    <h1 class="post-title"><?= $this->title ?></h1>
    <span class="post-date"><?= Yii::$app->formatter->asDate($this->params['date']) ?></span>
    <?= $content ?>
</div>

<?php if (!empty($related_posts)) : ?>
    <div class="related">
        <h2>Related Posts</h2>
        <ul class="related-posts">
            {% for post in site.related_posts limit:3 %}
                <li>
                    <h3>
                        <a href="{{ post.url }}">
                            {{ post.title }}
                            <small>{{ post.date | date_to_string }}</small>
                        </a>
                    </h3>
                </li>
            {% endfor %}
        </ul>
    </div>
<?php endif ?>

<?php $this->endContent() ?>
