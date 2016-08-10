<?php
/**
 * Template Name: HomePage
 *
 * @package WordPress
 * @subpackage Woven Wolf
 * @since 2015
 */


get_header();?>

<div class="wrapper">
<div class="slider-container">
<div class="slider">
<?php $args = array( 'post_type' => 'slides', 'posts_per_page' => 5 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="container">
<div class="tit-desc">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?></p>
</div>
<div class="thumb">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><?php
} 
?>
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endwhile;?>
<?php else:  ?>
<div>Add Slides to Slider in Backend</div>
<?php endif; ?>
</div>
<div class="navs"></div>
</div>
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>

		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?><br />

		<?php $args = array(

		'smallest'  => 8, 

		'largest'   => 22,

		'unit'      => 'pt', 

		'number'    => 45,  

		'format'    => 'flat',

		'separator' => ', ',

		'orderby'   => 'name', 

		'order'     => 'ASC',

		'link'      => 'view', 

		'taxonomy'  => 'post_tag', 

		'echo'      => true ); ?>

		<?php wp_tag_cloud( $args ); ?>

	<?php endif; ?>
</div>
<?php
get_footer();
?>