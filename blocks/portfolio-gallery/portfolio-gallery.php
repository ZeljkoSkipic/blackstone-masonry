<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_portfolio_gallery';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_portfolio_gallery_inner container';


?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
		<div class="top">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
		</div>
		<div class="bottom">

			<?php

			if( have_rows('portfolio_gallery') ): ?>

				<?php while( have_rows('portfolio_gallery') ) : the_row(); ?>

					<div class="pg_images_holder">
					<?php
						$image1 = get_sub_field('image1');
						$image2 = get_sub_field('image2');
						$image1cap = wp_get_attachment_caption( $image1 );
						$image2cap = wp_get_attachment_caption( $image2 );
						$size = 'full';
						if( $image1 ) { ?>
						<figure>
							<?php echo wp_get_attachment_image( $image1, $size, "", array( "class" => "image1" ) ); ?>
							<figcaption>
								<?php if($image1cap) { ?>
									<span class="name"><?php echo $image1cap; ?></span>
								<?php } ?>
								<span class="before-after">Before</span>
							</figcaption>
						</figure>
						<?php } ?>

						<?php if( $image2 ) { ?>
						<figure>
							<?php echo wp_get_attachment_image( $image2, $size, "", array( "class" => "image2" ) ); ?>
							<figcaption>
								<?php if($image2cap) { ?>
									<span class="name"><?php echo $image2cap; ?></span>
								<?php } ?>
								<span class="before-after">After</span>
							</figcaption>
						</figure>
					<?php } ?>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>


		</div>
	</div>
</section>
