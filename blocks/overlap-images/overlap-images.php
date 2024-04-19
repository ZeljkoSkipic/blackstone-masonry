<?php

$padding = get_field_object('padding');
$layout = get_field_object('layout');
$stack = get_field_object('stack');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_overlap_images';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_overlap_images_inner container';

if ( ! empty( $layout ) ) {
    $inner_class .=  ' ' . $layout['value'];
}

if ( ! empty( $stack ) ) {
    $inner_class .=  ' ' . $stack['value'];
}

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
		<div class="left">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
			<?php
			$intro_image = get_field('intro_image');
			$size = 'full';
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, $size, "", array( "class" => "intro_image" ) );
			} ?>
		</div>
		<div class="right">
			<?php
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$size = 'full';
			if( $image1 ) { ?>
			<figure>
				<?php echo wp_get_attachment_image( $image1, $size, "", array( "class" => "image1" ) ); ?>
			</figure>
			<?php } ?>

			<?php if( $image2 ) { ?>
			<figure>
				<?php echo wp_get_attachment_image( $image2, $size, "", array( "class" => "image2" ) ); ?>
			</figure>
			<?php } ?>

		</div>
	</div>
</section>
