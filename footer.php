    </div>
</div>

<footer>
    <div class="container">
        <p>
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('Theme By <a href="http://blog.sloger.info" target="_blank">Sloger</a>. '); ?>
            <?php _e('由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动'); ?>
        </p>
        <p>部分代码和设计风格参考<a href="http://www.dandyweng.com" target="_blank">Dandy Weng</a> 和 <a href="http://blog.dandyweng.com" target="_blank">Dandy's Blog</a></p>
    </div>
</footer>

<script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/comments.js'); ?>"></script>

<?php $this->footer(); ?>

<script>
    $(document).ready(function() {
        var anchor = window.location.hash;
        if( anchor != '') {
            $('html, body').animate({
                scrollTop: $('#' + anchor.split("=")[1]).offset().top - $('.navbar').height() - 10}, 'slow');
        }
    });
</script>

    </body>
</html>
