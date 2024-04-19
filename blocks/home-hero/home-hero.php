<?php

$text = get_field('text');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_home_hero space_2';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
	<div class="block_bg">
		<?php
		$image = get_field('image');
		$size = 'full';
		if( $image ) {
			echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
		} ?>
	</div>
	<div class="st_home_hero_inner container">
		<div class="st_home_hero_content">
			<h1 class="prefix"><?php echo wp_kses_post( get_field('prefix') ); ?></h1>
			<h2 class="hero_title"><?php echo wp_kses_post( get_field('title') ); ?></h2>

				<?php
					if($text) { ?>
					<div class="hero_text">
						<?php echo $text; ?>
					</div>
					<?php } ?>
			</div>
			<?php get_template_part('components/buttons'); ?>
		</div>
	</div>
</section>
