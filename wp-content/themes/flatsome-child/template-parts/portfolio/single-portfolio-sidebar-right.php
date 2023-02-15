<?php get_template_part('template-parts/portfolio/portfolio-title', flatsome_option('portfolio_title')); ?>

<div class="portfolio-top">
	<div class="row">

	<div class="large-3 col">
	<div class="portfolio-summary entry-summary">
		<?php if ( is_active_sidebar( 'sidebar-portfolio' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-portfolio' ); ?>
		<?php endif; ?>
	</div><!-- .portfolio-summary .entry-summary -->

	</div><!-- .large-3 -->

	<div id="portfolio-content" class="large-9 col col-first col-divided"  role="main">
		<div class="portfolio-inner">
			<div class="row">
				<div class="col medium-6 small-12 large-6">
					<div class="col-inner">
						<?php $featuredID = get_post_thumbnail_id();?>
						
						
						<?php echo do_shortcode('
					[ux_image id="'.$featuredID.'" image_size="large" height="75%" lightbox="true"]
						'); ?>


					</div>
					
				</div>
				<div class="col medium-6 small-12 large-6">
					<div class="col-inner">
						<table class="attributes">
							<tbody>
								<?php if(get_post_meta(get_the_id(),'dia_chi',true)){?>	
								<tr class="option-item">
									<td class="op_name">Địa điểm</td>
									
									<td class="op_value"><?php the_field('dia_chi'); ?></td>
								</tr>
								<?php }?>

								<?php if(get_post_meta(get_the_id(),'chu_dau_tu',true)){?>	
								<tr class="option-item">
									<td class="op_name">Chủ nhân</td>
									
									<td class="op_value"><?php the_field('chu_dau_tu'); ?></td>
								</tr>
								<?php }?>

								<?php if(get_post_meta(get_the_id(),'tien_do',true)){?>	
								<tr class="option-item">
									<td class="op_name">Thời gian/Tiến độ</td>
									>
									<td class="op_value"><?php the_field('tien_do'); ?></td>
								</tr>
								<?php }?>

								<?php if(get_post_meta(get_the_id(),'hang_muc',true)){?>	
								<tr class="option-item">
									<td class="op_name">Hạng mục thi công</td>
									
									<td class="op_value"><?php the_field('hang_muc'); ?></td>
								</tr>
								<?php }?>

								
								<tr class="item-cat">
									<td class="op_name">Công trình</td>
								
									<td class="op_value"><?php echo get_the_term_list( get_the_ID(), 'featured_item_category', '', '<span class="divider">,</span>', '' ); ?></td>
								</tr>
								

								
								<tr class="item-cat">
									<td class="op_name">Tag</td>
								
									<td class="op_value"><?php echo strip_tags (get_the_term_list( get_the_ID(), 'featured_item_tag', '', ' , ', '' )); ?></td>
								</tr>
								
							</tbody>
						</table>

					<?php if ( get_theme_mod( 'portfolio_share', 1 ) ) : ?>
						<div class="portfolio-share">
							<strong style="color:#2BB670">Share bài viết:</strong> <?php echo do_shortcode( '[share style="small"]' ) ?>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<div class="col medium-12 small-12 large-12">
					<h3 class="mo-ta-du-an">MÔ TẢ CHI TIẾT</h3>
					<?php get_template_part('template-parts/portfolio/portfolio-content'); ?>
				</div>
			</div>

			
		</div><!-- .page-inner -->
	</div><!-- #portfolio-content -->

	</div><!-- .row -->
</div><!-- .portfolio-top -->

<div class="portfolio-bottom">
	<?php get_template_part('template-parts/portfolio/portfolio-next-prev'); ?>
	<?php get_template_part('template-parts/portfolio/portfolio-related'); ?>
</div>