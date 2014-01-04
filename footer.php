    </div>
</div>

<footer>
    <div class="container">
        <p>
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('Themes By <a href="http://blog.sloger.info" target="_blank">Sloger</a>. '); ?>
            <?php _e('由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动'); ?>
<!--
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000201732'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000201732%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
-->
        </p>
        <p>部分代码和设计风格抄袭于<a href="http://www.dandyweng.com" target="_blank">Dandy Weng</a> 和 <a href="http://blog.dandyweng.com" target="_blank">Dandy's Blog</a></p>
    </div>
</footer>

<?php $this->footer(); ?>
<script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>

    </body>
</html>
