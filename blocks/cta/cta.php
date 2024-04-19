<?php

$padding = get_field_object('padding');

$text = get_field('text');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_cta';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_cta_inner container';

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
		<div class="left">
			<h2 class="title-2" style="<?php if( get_field('title_color') ) {?> color: #fff <?php } ?>" ><?php echo $text; ?></h2>
		</div>
		<div class="right">
			<?php
			$cta_btn = get_field('cta_btn');
			if( $cta_btn ):
				$link_url = $cta_btn['url'];
				$link_title = $cta_btn['title'];
				$link_target = $cta_btn['target'] ? cta_btn['target'] : '_self';
				?>
				<a class="btn-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
		</div>

	</div>
</section>
