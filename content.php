<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
	$thumb_url = $thumb_url_array[0];
?>
<article itemscope itemtype="https://schema.org/CreativeWork">
<div class="my-post">
	<header>
		<div class="post-title"> <h2 itemprop="headline"> <a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?> </a> </h2> </div>
		<div class="post-meta"> 
			<i class="fa fa-clock-o" aria-hidden="true"></i> <time itemprop="datePublished"> <?php the_time(get_option('date_format')); ?> </time>
			<i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php $categories = get_the_category(); echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" rel="category tag">' . esc_html( $categories[0]->name ) . '</a>'; ?>
		</div>
		<?php echo do_shortcode("[postshare]"); ?>
	</header>
	<div class="post-featured"> <a href="<?php the_permalink() ?>"> <img src="<?php echo $thumb_url; ?>" alt="<?php echo $alt; ?>" class="img-responsive" itemprop="image"> </a> </div>
	<div class="post-body" itemprop="text"> <?php the_excerpt(); ?> </div>
</div>
</article>