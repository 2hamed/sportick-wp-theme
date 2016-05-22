<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 5/21/16
 * Time: 3:24 PM
 */
get_header();
?>
	<section class="clubs">
		<?php
		$args = array(
			'post_type' => 'club',
			'posts_per_page' => 9,
		);
		$wpq = new WP_Query($args);
		$i = 1;
		while ($wpq->have_posts()) {
			$wpq->the_post();
			$link = get_post_meta(get_the_ID(), 'url', true);
			?>
			<a href="<?php echo $link; ?>">
				<article class="club" id="club-<?php the_ID(); ?>">
					<?php the_post_thumbnail('index-club'); ?>
					<div class="club-except"><?php the_excerpt(); ?></div>
					<h3 class="club-title">
						<?php the_title(); ?>
					</h3>
				</article>
			</a>
			<?php
			$i++;
		}
		?>
		<div class="clr"></div>
	</section>
<?php
get_footer();