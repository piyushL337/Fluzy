<?php get_header(); ?>
<div class="container fluzy-content">
	<div class="row">
		<div class="col-md-8">
			<div class="author-info" itemprop="author" itemscope itemtype="https://schema.org/Person">
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta('user_email'), '80', '','fluzy_author'); ?>
				</div>
				<div class="author-description" itemprop="description">
					<h4> About the Author </h4>
					<p> <?php the_author_meta('description'); ?> <a href="<?php bloginfo('wpurl')?>/about-us/"> Read More >> </a> </p>
				</div>
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