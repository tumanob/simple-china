<?php get_header(); ?>
 <div style="clear:both;"></div>
	<div id="container" class="row">
		<div id="content" class="col-xs-12 col-md-9 col-sm-9">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div  id="post-<?php the_ID(); ?>" <?php post_class(array('bgpng')); ?> >
				<div class="title bgpng row" >
					<div class="date col-md-2 .col-xs-6">

						<?php the_time( get_option( 'date_format' ) ); // the_time('j') ?> <strong><?php //the_time('M') ?></strong>

				</div>
					<h2 class="col-md-8"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

					<div class="comment-count col-md-2"><?php comments_number('0', '1', '%'); ?> </div>
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
				<div class="bottom bgpng">
					<div class="tags-box">

						<div class="tags-entry bgpng" >
							<ul>
								<li class="pull-left"><?php the_tags(__('Tags:', 'china-theme'), ', ', '<br />'); ?> </li>
								<li class="pull-left"><?php _e('Author:', 'china-theme'); ?> <?php the_author() ?></li>
								<li class="pull-left"><?php _e('Category:', 'china-theme'); ?> <?php the_category(', ');?></li>
							</ul>
						</div>


					</div>
				</div>
			</div><!-- //post -->
			<?php endwhile;?>
				<div id="nav">
					<ul>
						<li><?php next_posts_link(__('&laquo; Older Entries', 'china-theme')) ?></li>
						<li><?php previous_posts_link(__('Newer Entries &raquo;', 'china-theme')) ?></li>
					</ul>
				</div>
			<?php else : ?>
				<h2>Not found</h2>
			<?php  endif; ?>
		</div><!-- / Content -->
		<div class="col-xs-12 col-md-3 col-sm-3">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- / container -->
<?php get_footer(); ?>
