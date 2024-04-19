<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_contact';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$inner_class = 'st_contact_inner container';

?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="<?php echo $inner_class ?>">
		<div class="left">
			<?php get_template_part('components/intro'); ?>
			<?php

			if( have_rows('information') ): ?>

				<?php while( have_rows('information') ) : the_row(); ?>

					<?php
					$icon = get_sub_field('icon'); ?>

					<div class="info_row">

						<?php
						$info_text = get_sub_field('info_text');
						if( $info_text ):
							$link_url = $info_text['url'];
							$link_title = $info_text['title'];
							$link_target = $info_text['target'] ? $info_text['target'] : '_self';
							?>
							<a class="info_text" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo $icon; ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>
		</div>
		<div class="right">
			<?php echo do_shortcode(get_field('form_shortcode')); ?>
		</div>
	</div>
</section>
