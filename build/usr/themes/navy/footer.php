        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        &copy; <?php echo date('Y'); ?> &nbsp;&nbsp; 粤ICP备18004964号 &nbsp;&nbsp;<a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255994723'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1255994723%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</footer>
</div>
<div class="site-search">
<script type="text/javascript" src="<?php $this->options->themeUrl('index.js'); ?>"></script>
<script type="text/javascript">
　　if (window!=top){top.location.href = window.location.href;}
</script>
</div>
<p class="link-back2top"><a href="#" title="Back to top">Back to top</a></p>

<script>
$(".link-back2top").hide();
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $(".link-back2top").fadeIn();
    } else {
        $(".link-back2top").fadeOut();
    }
});
$(".link-back2top a").click(function() {
    $("body,html").animate({
        scrollTop: 0
    },
    800);
    return false;
});
</script>
<?php $this->footer(); ?>
</body>
</html>
