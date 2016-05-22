<?php
/**
 * Created by PhpStorm.
 * User: hamed
 * Date: 5/22/16
 * Time: 9:15 PM
 */
get_header();
the_post();
?>
	<article class="page">
		<h3 class="page-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<section class="page-content">
			<?php
			the_content();
			?>
		</section>
	</article>
<?php
get_footer();
?>