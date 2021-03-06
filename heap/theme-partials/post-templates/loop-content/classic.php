<?php
/**
 * Template to display the article in archives in a classic way
 */

//post format specific
$post_format = get_post_format();
if ( empty( $post_format ) || $post_format == 'standard' ) {
	$post_format = '';
}
$post_format_class = '';
if ( ! empty( $post_format ) ) {
	$post_format_class = 'article-archive--' . $post_format;
};

//post thumb specific
$has_thumb = has_post_thumbnail();

$post_class_thumb = 'has-thumbnail';
if ( ! $has_thumb && $post_format != 'image' && $post_format != 'gallery' ) {
	$post_class_thumb = 'no-thumbnail';
} ?>

<article <?php post_class( 'article-archive  article-archive--classic ' . $post_format_class . ' ' . $post_class_thumb ); ?>>
	<?php
	if ( $post_format != 'quote' ) {
		get_template_part( 'theme-partials/post-templates/loop-content/featured-classic/image', $post_format );
	}

	if ( ! in_array( $post_format, array( 'quote', 'chat', 'aside', 'link' ) ) ) { ?>
		<div class="article__body">
			<?php get_template_part( 'theme-partials/post-templates/loop-content/header-classic' ); ?>
			<section class="article__content entry-summary">
				<a href="<?php the_permalink() ?>">
					<?php echo heap_better_excerpt(); ?>
				</a>
			</section>
			<?php get_template_part( 'theme-partials/post-templates/loop-content/footer' ); ?>
		</div><!-- .article__body -->
	<?php } else {
		get_template_part( 'theme-partials/post-templates/loop-content/post-formats-classic/' . $post_format );
	} ?>
</article>