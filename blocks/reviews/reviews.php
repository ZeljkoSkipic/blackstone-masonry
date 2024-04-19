<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_reviews';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_reviews_inner container';

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
	<?php get_template_part('components/intro'); ?>
	<div class="st_reviews_content">
		<?php

		if( have_rows('reviews') ): ?>

			<?php while( have_rows('reviews') ) : the_row(); ?>

				<?php
				$name = get_sub_field('name');
				$review = get_sub_field('review'); ?>
				<div class="st_review">
					<h3 class="title-3"><?php echo $name; ?></h3>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="100%" height="100%" viewBox="0 0 881 130" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(1,0,0,1,-634.728,-382.568)">
							<path d="M702.68,382.568L718.721,431.938L770.632,431.938L728.635,462.45L744.677,511.82L702.68,481.308L660.683,511.82L676.724,462.45L634.728,431.938L686.639,431.938L702.68,382.568Z" style="fill:rgb(255,216,0);"></path>
						</g>
						<g transform="matrix(1,0,0,1,-447.914,-382.568)">
							<path d="M702.68,382.568L718.721,431.938L770.632,431.938L728.635,462.45L744.677,511.82L702.68,481.308L660.683,511.82L676.724,462.45L634.728,431.938L686.639,431.938L702.68,382.568Z" style="fill:rgb(255,216,0);"></path>
						</g>
						<g transform="matrix(1,0,0,1,-261.961,-382.568)">
							<path d="M702.68,382.568L718.721,431.938L770.632,431.938L728.635,462.45L744.677,511.82L702.68,481.308L660.683,511.82L676.724,462.45L634.728,431.938L686.639,431.938L702.68,382.568Z" style="fill:rgb(255,216,0);"></path>
						</g>
						<g transform="matrix(1,0,0,1,-76.0238,-382.568)">
							<path d="M702.68,382.568L718.721,431.938L770.632,431.938L728.635,462.45L744.677,511.82L702.68,481.308L660.683,511.82L676.724,462.45L634.728,431.938L686.639,431.938L702.68,382.568Z" style="fill:rgb(255,216,0);"></path>
						</g>
						<g transform="matrix(1,0,0,1,109.853,-382.568)">
							<path d="M702.68,382.568L718.721,431.938L770.632,431.938L728.635,462.45L744.677,511.82L702.68,481.308L660.683,511.82L676.724,462.45L634.728,431.938L686.639,431.938L702.68,382.568Z" style="fill:rgb(255,216,0);"></path>
						</g>
					</svg>

					<div><?php echo $review; ?></div>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>
	</div>
</section>
