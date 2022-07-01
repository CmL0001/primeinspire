<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="course-excerpt small">
					<h1 class="fs-5 fw-600"><?php echo get_the_title(); ?></h1>
					<p><?php echo get_the_excerpt(); ?></p>
					<p><span class="badge bg-primary"><strong>Course Fee:</strong> <?php echo the_field('course_fee'); ?></span> <span class="badge bg-secondary"><strong>Duration:</strong> <?php echo the_field('course_duration'); ?></span>
					</p>
				</div>
				<a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
					  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
					</svg> Sign up to Get Started
				</a>
			</div>
			<div class="col-lg-6 col-md-6">
				<?php 

				if(has_post_thumbnail() ) { ?>
					<img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title();  ?>">
				<?php } else { ?>
					<img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title();  ?>">
				<?php }

				?>
			</div>
		</div>
	</div>
</header>

<section class="course-description pt-4 pb-4">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<?php 

				$value = get_field("course_description_image");
				if($value) { ?>
					<img class="img-fluid rounded" src="<?php echo $value; ?>" alt="<?php echo get_the_title(); ?>">
				<?php }else{ ?>
					<img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title();  ?>">
				<?php }

				?>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="course-description small">
					<h2 class="fs-5 fw-600">Course Description</h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="course-description pt-4 pb-4 border-top">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="course-syllabus small">
					<h2 class="fs-5 fw-600">Course Syllabus</h2>
					<?php echo the_field('course_syllabus'); ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<?php 

				$value = get_field("course_syllabus_image");
				if($value) { ?>
					<img class="img-fluid rounded" src="<?php echo $value; ?>" alt="<?php echo get_the_title(); ?>">
				<?php }else{ ?>
					<img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title();  ?>">
				<?php }

				?>
			</div>	
		</div>
	</div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>