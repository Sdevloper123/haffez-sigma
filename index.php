<?php
/**
 * The main template file
 */
get_header(); ?>

<!-- <main id="main" role="main">
	<div class="container">
		<?php
		$tabib_hospital_layout_setting = get_theme_mod('tabib_hospital_layout_settings', __('Right Sidebar', 'tabib-hospital'));
		if ($tabib_hospital_layout_setting == 'Left Sidebar') { ?>
			<div class="row">
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
					if (have_posts()):

						/* Start the Loop */
						while (have_posts()):
							the_post();

							get_template_part('template-parts/post/content', get_post_format());

						endwhile;

					else:

						get_template_part('template-parts/post/content', 'none');

					endif;
					?>
					<?php if (get_theme_mod('tabib_hospital_show_post_pagination', true) != '') { ?>
						<div class="navigation">
							<?php tabib_hospital_pagination_type(); ?>
							</div>
						<?php } ?>
				</div>
			</div>
		<?php } else if ($tabib_hospital_layout_setting == 'Right Sidebar') { ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
					if (have_posts()):

						/* Start the Loop */
						while (have_posts()):
							the_post();

							get_template_part('template-parts/post/content', get_post_format());

						endwhile;

					else:

						get_template_part('template-parts/post/content', 'none');

					endif;
					?>
					<?php if (get_theme_mod('tabib_hospital_show_post_pagination', true) != '') { ?>
						<div class="navigation">
							<?php tabib_hospital_pagination_type(); ?>
							</div>
						<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php } else if ($tabib_hospital_layout_setting == 'One Column') { ?>
			<div class="col-lg-12 col-md-12">
				<?php
				if (have_posts()):

					/* Start the Loop */
					while (have_posts()):
						the_post();

						get_template_part('template-parts/post/content', get_post_format());

					endwhile;

				else:

					get_template_part('template-parts/post/content', 'none');

				endif;
				?>
				<?php if (get_theme_mod('tabib_hospital_show_post_pagination', true) != '') { ?>
					<div class="navigation">
						<?php tabib_hospital_pagination_type(); ?>
						</div>
					<?php } ?>
			</div>
		<?php } else if ($tabib_hospital_layout_setting == 'Grid Layout') { ?>
			<div class="row">
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<?php
						if (have_posts()):

							/* Start the Loop */
							while (have_posts()):
								the_post();

								get_template_part('template-parts/post/gridlayout');

							endwhile;

						else:

							get_template_part('template-parts/post/content', 'none');

						endif;
						?>
						<?php if (get_theme_mod('tabib_hospital_show_post_pagination', true) != '') { ?>
							<div class="navigation">
								<?php tabib_hospital_pagination_type(); ?>
								</div>
							<?php } ?>
						</div>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php } else { ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
					if (have_posts()):

						/* Start the Loop */
						while (have_posts()):
							the_post();

							get_template_part('template-parts/post/content', get_post_format());

						endwhile;

					else:

						get_template_part('template-parts/post/content', 'none');

					endif;
					?>
					<?php if (get_theme_mod('tabib_hospital_show_post_pagination', true) != '') { ?>
						<div class="navigation">
							<?php tabib_hospital_pagination_type(); ?>
							</div>
						<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</main> -->

<h1>Blog List</h1>Blog List
<?php
$bannerSlider = get_field('banner_slider');

$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_description');

?>


<?php foreach ($blog_child_cats as $blog_child_cat) { ?>
	<?php echo $blog_child_cat->term_id; ?>
	<?php echo $blog_child_cat->name; ?>
<?php } ?>

<?php get_footer();