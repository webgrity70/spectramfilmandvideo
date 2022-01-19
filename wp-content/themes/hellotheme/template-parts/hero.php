<?php
$heroimg = '';
if( get_the_post_thumbnail_url() && !is_cart() && !is_checkout() && !is_account_page() && !is_woocommerce() ){
	$heroimg = get_the_post_thumbnail_url(get_the_Id(), 'full');
}
else {$heroimg = get_home_url().'/wp-content/uploads/2021/12/hero.jpg';}

?>

<section class="hero container-fluid bgNoRepeat bgCover d-flex flex-column justify-content-center" style="background-image: linear-gradient(rgba(32,32,32,.65),rgba(32,32,32,.65)), url(<?php echo $heroimg; ?>)">
	<div class="container text-white text-center">
		<?php
		
			if( is_shop() ):
				echo '<h1 class="text-white title">'.get_theme_mod( 'shop_hero_title' ).'</h1>';

			elseif(is_search()):
				echo '<h1 class="text-white title">Search</h1>';
			else:
			the_title( '<h1 class="text-white title">', '</h1>', true ); 
			endif;
		?>
		<?php echo do_shortcode( '[flexy_breadcrumb]'); ?> 
	</div>
</section>
