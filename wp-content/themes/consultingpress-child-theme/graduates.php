<?php
/*
 * Template name: graduates template
 */
get_header();


global $volcanno_page_style;

// Sidebar placement
$volcanno_page_style = get_post_meta( get_the_ID(), 'pg_sidebar', true ) ? : Volcanno::return_theme_option( 'default_case_studies_sidebar_position' );
$content_grid = $volcanno_page_style == 'fullwidth' ? 'col-md-12' : 'col-md-8';

// Blog style
$blog_style = rwmb_meta( 'pg_case_studies_options_style' ) ? : Volcanno::return_theme_option( 'default_case_studies_style' );

// Page title template
get_template_part( 'template-parts/page', 'title' );
?>
<!-- .page-content start -->
<div class="page-content all-graduates">
	<div class="container">
		<div class="row">
			<?php
			global $post;
			$args = array( 'post_type' => 'graduates', 'posts_per_page' => -1 ); 
			$attachments = get_posts( $args );
			if ( $attachments ) {
				foreach ( $attachments as $post ) {
					echo '<div class="col-md-3 single_member">';
					
					echo '<h3 class="graduateName">'.get_the_title().'</h3>';

					$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'full');

					if ( $thumbnail ) {
						echo 'Image ='.$thumbnail;
					} else {
						$thumbnail = get_stylesheet_directory_uri().'/images/avatar-student.png';
						echo 'AvTAR ='.$thumbnail;
					}


					$location = get_post_meta( get_the_ID(), 'branch_location',true );
					echo '<p>LOCATION ='.$location;


					$passingYear = get_post_meta( get_the_ID(), 'passing_year',true );
					echo '<p>Passing Year ='.$passingYear;

					echo '</div>';
				}
				wp_reset_postdata();
			}
			?>
		</div>
    </div><!-- .container end -->
</div><!-- .page-content end -->

<?php get_footer(); ?>	