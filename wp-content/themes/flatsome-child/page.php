

<?php
/**
 * The template for displaying all pages.
 *
 * @package flatsome
 */


if(flatsome_option('pages_template') != 'default') {
	
	// Get default template from theme options.
	get_template_part('page', flatsome_option('pages_template'));
	return;

} else {

get_header();
do_action( 'flatsome_before_page' ); ?>
<?php get_template_part('page-title-breadcrumbs'); ?> <!-- breadcrumbs -->
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
				
				<?php if(get_theme_mod('default_title', 0)){ ?>
				<header class="entry-header">
					<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>

				
			<div class="icon-box featured-box icon-box-center text-center">
					<div class="icon-box-img" style="width: <?php the_field('chieu_dai_anh', 'option'); ?>px">
					<div class="icon">
						<div class="icon-inner">
							<img width="<?php the_field('chieu_dai_anh', 'option'); ?>" height="auto" src="<?php the_field('anh_duoi_tieu_de', 'option'); ?>" class="attachment-medium size-medium" alt="">					</div>
					</div>
					</div>
						
			</div>
				</header><!-- .entry-header -->
				<?php } ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php do_action( 'flatsome_before_page_content' ); ?>
					
						<?php the_content(); ?>

						<?php if ( comments_open() || '0' != get_comments_number() ){
							comments_template(); } ?>

					<?php do_action( 'flatsome_after_page_content' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>

<?php
do_action( 'flatsome_after_page' );
get_footer();

}

?>