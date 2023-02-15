<div class="du-an-lien-quan">
<?php
/**
 * Portfolio related
 */
		echo do_shortcode('
			[title text="Dự án liên quan" tag_name="h3" color="rgb(0, 0, 0)" class="sago-title-simple center"]
		
			');

			?>
			<div class="icon-box featured-box icon-box-center text-center">
					<div class="icon-box-img" style="width: <?php the_field('chieu_dai_anh', 'option'); ?>px">
					<div class="icon">
						<div class="icon-inner">
							<img width="<?php the_field('chieu_dai_anh', 'option'); ?>" height="auto" src="<?php the_field('anh_duoi_tieu_de', 'option'); ?>" class="attachment-medium size-medium" alt="">					</div>
					</div>
					</div>
						
			</div>
		</div>
			<?php
if ( get_theme_mod( 'portfolio_related', 1 ) == 0 ) {
	return '';
}

$terms   = get_the_terms( get_the_ID(), 'featured_item_category' );
$term_id = $terms ? current( $terms )->term_id : '';
$height  = get_theme_mod( 'portfolio_height' );
$height  = $height ? $height : '';

echo do_shortcode( '<div class="portfolio-related">[ux_portfolio image_height="' . $height . '" class="portfolio-related" exclude="' . get_the_ID() . '" cat="' . $term_id . '"]</div>' );
