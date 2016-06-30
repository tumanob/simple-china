<?php get_header(); ?>
 <div style="clear:both;"></div>
 <?php if(function_exists('bcn_display'))
 {
 ?>
   <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
       <?php
         bcn_display();
       ?>
   </div>
 <?php
 }?>
	<div id="container" class="row">
		<div id="content" class="col-xs-12 col-md-9 col-sm-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div  id="post-<?php the_ID(); ?>" <?php post_class(array('bgpng')); ?> >
				<div class="title bgpng row" >
					<div class="date col-md-3 col-xs-4 col-sm-3">
						<?php the_time( get_option( 'date_format' ) ); // the_time('j') ?> <strong><?php //the_time('M') ?></strong>
					</div>

					<div class="posttitle col-md-8 col-xs-8 col-sm-7">
						<h2 class=""><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					</div>

					<div class="comment-count col-md-1 hidden-xs col-sm-2"><?php comments_number('0', '1', '%'); ?> </div>

				</div>
				<div class="post-inner">
					<div class="entry">
						<?php
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							?>
						<div class="postthumb">

						 <?php the_post_thumbnail('thumbnail');  ?>
					 </div>
						 <?php
						}
						?>

						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
				</div>

			</div><!-- //post -->
			<div class="bottom bgpng">
				<div class="tags-box">

					<div class="tags-entry bgpng" >
						<ul class="">
							<li class=""><?php the_tags(__('Tags:', 'simple-china'), ', ', '<br />'); ?> </li>
							<li class=""><?php _e('Author:', 'simple-china'); ?> <?php the_author() ?></li>
							<li class=""><?php _e('Category:', 'simple-china'); ?> <?php the_category(', ');?></li>
						</ul>
					</div>


				</div>
			</div>
			<?php endwhile;?>

			<?php	if (function_exists('wp_pagenavi')) {

				wp_pagenavi();
				}
				else { ?>
					<div id="pagenav">
						<ul>
							<li class="older pull-left"><?php next_posts_link(__('&laquo; Older Entries', 'simple-china')) ?></li>
							<li class="newer pull-right"><?php previous_posts_link(__('Newer Entries &raquo;', 'simple-china')) ?></li>
						</ul>
					</div>
				<?php }
			?>



			<?php else : ?>
				<h2><?php _e('Not found', 'simple-china'); ?></h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		<div class="col-xs-12 col-md-3 col-sm-3">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- / container -->
<?php get_footer(); ?>
