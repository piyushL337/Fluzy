<footer itemscope itemtype="https://schema.org/WPFooter">
<div class="container-fluid fluzy-footer">
	<div class="row">
		<div class="col-xs-12">
			<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
		</div>
	</div>
</div>

<div class="container-fluid fluzy-footer2">
    <div class="row">
        <div class="col-xs-12">
            <div> Copyright <i class="fa fa-copyright"></i> <?php echo Date('Y'); ?> By <span class="fy-brand"> <?php wp_title(); ?> </span> (All Right Reserved) | 
            Design & Developed By <a href="https://webzer.in/fluzy" title="fluzy" target="_blank"> fluzy </a> </div>
        </div>            
    </div>
</div>
</footer>

<script type="text/javascript">
	/*
jQuery(document).ready(function($){ 
  var top = $('#recent-posts-2').offset().top;
  $(window).scroll(function (event) {
	var w=$(window).innerWidth();
    var y = $(this).scrollTop();
    if (y >= top && w >= 975)
      $('#recent-posts-2').addClass('fixed');
    else
      $('#recent-posts-2').removeClass('fixed');
    $('#recent-posts-2').width($('#recent-posts-2').parent().width());
  });
}); */
</script>

	<?php wp_footer(); ?>
</body>
</html>