<?php
	if(trim($GLOBALS['stdata214']) !== ''):
		$st_infeed = $GLOBALS['stdata214'];
	else:
		$st_infeed = '';
	endif;
	$st_infeed_count = 1;
?>

<div class="kanren-card">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="kanren-detail">
    <div class="kanren-detail-image">
		<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
			<?php get_template_part( 'st-thumbnail' ); //アイキャッチ画像 ?>
		<?php else: // サムネイルを持っていないときの処理 ?>
			<?php if(trim($GLOBALS['stdata97']) !== ''){ ?>
				<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" />
			<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" />
			<?php } ?>
		<?php endif; ?>
        <span class="category-label"></span>
    </div>
	<h3 class="kanren-detail-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="kanren-detail-text">
				<?php get_template_part( 'st-excerpt' ); //抜粋 ?>
				<?php if ( isset( $GLOBALS['stdata465']) && $GLOBALS['stdata465'] === 'yes' ) :
					echo '<div class="st-catgroup-under">';
					get_template_part( 'st-single-category' ); //カテゴリー
					echo '</div>';
				endif; //カテゴリー ?>
    </p>
  </div>
  <?php endwhile; endif;?>
</div>
