<?php $this->need('header.php'); ?>

<div class="main">
    <article class="block">
        <p class="title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></p>
        <div>
            <?php $this->content(); ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
