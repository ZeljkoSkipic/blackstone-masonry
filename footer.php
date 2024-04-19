<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$fb = get_field('facebook_link', 'option');
?>


	<footer id="colophon" class="site-footer">
		<div class="footer_inner container space_2_4">
			<div class="footer_left">
				<?php
				$footer_logo = get_field('footer_logo', 'option');
				$size = 'full';
				if( $footer_logo ) {
					echo wp_get_attachment_image( $footer_logo, $size, "", array( "class" => "footer_logo" ) );
				} ?>
			</div>
			<div class="footer_mid">
				<h4 class="footer_title"><?php echo wp_kses_post( get_field('col_2_title', 'option') ); ?></h4>
				<div><?php echo wp_kses_post( get_field('text', 'option') ); ?></div>
				<a class="phone" href="tel:<?php echo $phone ;?>"><?php echo $phone ;?></a>
				<a class="email" href="<?php echo $email ;?>"><?php echo $email ;?></a>
			</div>
			<div class="footer_right">
			<h4 class="footer_title"><?php echo wp_kses_post( get_field('col_3_title', 'option') ); ?></h4>
			<a class="fb" target="_blank" href="<?php echo $fb ;?>"></a>
			</div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
		</div>
		<div class="footer_bottom">
			<div class="container">
				<p><?php echo wp_kses_post( get_field('copy', 'option') ); ?></p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>
