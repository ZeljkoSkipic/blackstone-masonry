<?php
$prefix = get_field('prefix');
$intro_text = get_field('intro_text');
?>

<div class="st_intro">
	<?php if($prefix) { ?>
		<h2 class="prefix"><?php echo $prefix; ?></h2>
	<?php } ?>
	<h3 class="title-1"><?php echo wp_kses_post( get_field('title') ); ?></h3>
<?php if( $intro_text ) { ?>
	<div class="intro_text">
		<?php echo $intro_text; ?>
	</div>
<?php } ?>

</div>
