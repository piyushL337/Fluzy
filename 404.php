<?php get_header(); ?>
<div class="container fluzy-content">
	<div class="row">
		<div class="col-md-12">
			<div class="post-body fluzy-page">
				<div id="page-404">
					<div class="pnf-err"> 404 </div>
					<div class="pnf-sub"> Sorry, Page Not Found </div>
					<div class="pnf-msg"> Looks like the page you're trying to visit doesn't exist. <br> Please check the URL and try your luck again. </div>
					<a href="<?php bloginfo('wpurl')?>"> <button type="button" class="btn btn-danger">Take Me Home Page</button> </a>
				</div>
			</div>				
		</div> 
	</div>
</div>
<?php get_footer(); ?>