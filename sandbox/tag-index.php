<?php
/*
Template Name: Tag Index Page
*/
?>

<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>

		<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?>">
                <h2 class="entry-title"><?php the_title(); ?></h2>
								
		<div class="entry-content">
			<?php the_content() ?>

			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>

		<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>

		</div>
		</div>

		<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
				
	<?php wp_tag_cloud('smallest=100&largest=100&unit=%&number=0&orderby=name&format=list'); ?>
		
		</div>
	</div>

<?php get_sidebar() ?>
<?php get_footer() ?>

