<?php get_header(); ?>
<div class="container fluzy-content">
	<div class="row">
		<div class="col-md-8">
            <?php 
                if(have_posts()) : while(have_posts()) : the_post();
            ?>
				<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
					$thumb_url = $thumb_url_array[0];
				?>    
				<article id="post-<?php the_ID(); ?>" itemscope itemtype="https://schema.org/CreativeWork">				
					<div class="my-post">
						<header>
							<div class="post-title"> <h1 itemprop="headline"> <?php the_title(); ?> </h1> </div>
							<div class="post-meta"> 
								<i class="fa fa-clock-o" aria-hidden="true"></i> <time itemprop="dateModified"> <?php the_modified_date('M j, Y'); ?> </time>
								<i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php $categories = get_the_category(); echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" rel="category tag">' . esc_html( $categories[0]->name ) . '</a>'; ?>
							</div>
							<?php echo do_shortcode("[postshare]"); ?>
						</header>
						<div class="post-featured"> <img src="<?php echo $thumb_url; ?>" alt="<?php echo $alt; ?>" class="img-responsive" itemprop="image"> </div>
						<div class="post-body" itemprop="text"> <?php the_content(); ?> </div>
					</div>				
				</article>
				<?php endwhile; endif; ?> 
				
				<div class="post-navigation">
					<div class="pn-left">
						<?php previous_post_link('<div class="pn-left-sign"> <i class="fa fa-hand-o-left" aria-hidden="true"></i> Prev Post </div> %link'); ?> 
					</div>
					<div class="pn-right">
						<?php next_post_link('<div class="pn-right-sign"> Next Post <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div> %link'); ?>
					</div>
				</div>
				
				<div class="author-info" itemprop="author" itemscope itemtype="https://schema.org/Person">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta('user_email'), '80', '','fluzy_author'); ?>
					</div>
					<div class="author-description">
						<h4> Post By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <span itemprop="name"> <?php the_author(); ?> </span> </a> </h4>
						<p itemprop="description"> <?php the_author_meta('description'); ?> <a href="<?php bloginfo('wpurl')?>/about-us/"> Read More >> </a> </p>
					</div>
				</div>				
				
					<div class="fluzy-related">
						<div class="fy-tl"> <h3> Related Posts </h3> </div>
						<div class="row">
							<div class="col-md-12">
								
Inser ad code for showing ads
								
							</div>
						</div>
					</div>						

			
			<div class="my-comments"> 
				<a href="#respond"> Leave Your Comment </a>
			</div>
			<?php
				 if(comments_open() || get_comments_number()) :
					comments_template();
				endif;  
			?>			
			
		</div> <!-- Left Side Close -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div> <!-- Right Side Close -->
	</div>
</div>
<?php get_footer(); ?>