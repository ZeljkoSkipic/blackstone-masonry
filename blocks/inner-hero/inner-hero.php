<?php

$title = get_field('title');

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}
$class = 'st_block st_inner_hero space_2';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}


?>
<section <?php echo $anchor; ?> class="<?php echo $class ?>">
	<div class="container">
		<h1 class="title-1">
			<?php if ($title) {
				echo $title;
			} else {
				the_title();
			} ?>
		</h1>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
	</div>
</section>
