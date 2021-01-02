<?php get_header(); ?>
<div class="container fluzy-content">
	<div class="row">
		<div class="col-md-8">
			<div class="post-body fluzy-page">
				<?php 
					if(have_posts()) : while(have_posts()) : the_post();
						the_content(); 
					endwhile; endif;
				?>
			</div>			
		</div> <!-- Left Side Close -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>	
		</div> <!-- Right Side Close -->
	</div>
</div>
<?php get_footer(); ?>