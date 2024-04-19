<?php

$padding = get_field_object('padding');

$intro_text = get_field('half_intro_text');
$text1 = get_field('text_1');
$text2 = get_field('text_2');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_half_thirds';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_half_thirds_inner container';

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
		<div class="top">
			<?php get_template_part('components/intro'); ?>
		</div>
		<div class="bottom">
			<div class="left">
			<div class="intro_text">
				<?php echo $intro_text; ?>
			</div>
			<?php
			$intro_image = get_field('intro_image');
			$size = 'full';
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, $size, "", array( "class" => "intro_image" ) );
			} ?>
			</div>
			<div class="right">
				<?php if($text1) { ?>
					<div class="text_1">
						<?php echo $text1; ?>
					</div>
				<?php } ?>
				<?php if($text2) { ?>
					<div class="text_2">
						<?php echo $text2; ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</section>
