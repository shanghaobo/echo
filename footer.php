<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="footer">
    <div class="layui-col-md12 t-copy">
        <span class="layui-breadcrumb">
            <span>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?>.个人博客</a></span>
            <span class="layui-hide-xs">Poweed by <a href="http://typecho.org/" target="_blank" rel="nofollow">Typecho</a></span>
            <span>Theme by <a href="https://www.echo.so" target="_blank">Echo</a></span>
        </span>
    </div>
</div>

<?php $this->footer(); ?>

<script type="text/javascript" src="https://cdn.bootcss.com/highlight.js/9.15.6/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
$(document).on('pjax:complete', function() {
    document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
    });
});
</script>
</body>
</html>
