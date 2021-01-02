<?php get_header(); ?>
<div class="container fluzy-content">
	<div class="row">
		<div class="col-md-8">
			<div class="my-category">
				<div class="category-title"> <h1> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <?php echo $ctname=single_cat_title(); ?> <i class="fa fa-hand-o-left" aria-hidden="true"></i> </h1> </div>
				<div class="category-description"> <?php echo $ctdesc=category_description($ctname); ?> </div>
			</div>
            <?php 
                if(have_posts()) : while(have_posts()) : the_post();
                    get_template_part('content',get_post_format()); 
            ?>
            <?php endwhile; ?> 
			<div class="wp-pagenavi"> <?php wplift_pagination(); ?> </div> 
			<?php else: echo "<div class='post-not-found'> No Post Found...! </div>"; endif; ?>	
		</div> <!-- Left Side Close -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div> <!-- Right Side Close -->
	</div>
</div>
<?php get_footer(); ?>