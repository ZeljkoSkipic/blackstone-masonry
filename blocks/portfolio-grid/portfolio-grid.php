<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_portfolio_grid';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}


$inner_class = 'st_portfolio_grid_inner container';


?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
	<div class="<?php echo $inner_class ?>">
	<?php
		// WP_Query arguments for 'portfolio' post type
		$args = array(
			'post_type'      => 'portfolio', // Change to your custom post type
			'posts_per_page' => 10,          // Adjust the number of posts per page as needed
		);

		// The Query
		$portfolio_query = new WP_Query($args);

		// The Loop
		if ($portfolio_query->have_posts()) {
			while ($portfolio_query->have_posts()) {
				$portfolio_query->the_post(); ?>
				<div class="portfolio_item">
					<a href="<?php the_permalink(); ?>">
					<?php // Check if the post has a featured image and display it
					if (has_post_thumbnail()) { ?>
					<figure>
						<?php the_post_thumbnail(); ?>
					</figure>
					<?php } ?>
					<h2 class="item_title title-3"><?php the_title(); ?></h2>

					<div class="item_excerpt"><?php the_excerpt(); ?></div>
					</a>
				</div>
			<?php }
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>
	</div>
</section>
