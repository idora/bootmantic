<?php $this->need('header.php'); ?>

<div class="main">
    <article class="block post">
        <span class="round-date <?php $this->options->labelColor() ?>">
            <span class="month"><?php $this->date('m月'); ?></span>
            <span class="day"><?php $this->date('d'); ?></span>
        </span>
        <p class="title"><?php $this->title() ?></p>
        <p class="article-meta">本文由 <?php $this->author(); ?> <?php $this->date('发表于 Y 年 m 月 d 日'); ?></p>
        <div class="article-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><?php _e('标签：'); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>

<!--
    <div class="block page-link">
        <?php $this->thePrev('<< %s', '没有上一篇'); ?>
        <?php $this->theNext('%s >>', '没有下一篇'); ?>
    </div>
-->

    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
