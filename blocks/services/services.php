<?php

$padding = get_field_object('padding');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'st_block st_services';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

?>

<section <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
        <div class="st_services_inner">
        <?php
            // Columns repeater
            if( have_rows('services') ):
                while( have_rows('services') ) : the_row();
				$title = get_sub_field('title');
                $text = get_sub_field('text');
				$service_image = get_sub_field('service_image');
                $size = 'full';
				$service_url = get_sub_field('service_url');
				$link_url = $service_url['url'];
				$link_title = $service_url['title'];
				$link_target = $service_url['target'] ? $service_url['target'] : '_self'; ?>

                <div class="st_service">
				<a class="service_url" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"></a>

					<?php
					if( $service_image ) {
						echo wp_get_attachment_image( $service_image, $size, "", array( "class" => "service_image" ) );
					} ?>
                    <div class="st_col_text">
						<h3 class="st_service_title title-3"><?php echo $title; ?></h3>
                        <?php echo $text; ?>
                    </div>
                </div>

                <?php endwhile;
            endif; ?>
        </div>
	</div>
</section>
