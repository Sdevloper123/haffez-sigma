<?php
/**
 * Template Name: About Page
 */
get_header(); ?>


<?php

global $post;
$page_id = $post->ID;

$banner_slider = get_field('banner_slider');

$about_image = get_field('about_image');
$about_heading = get_field('about_heading');
$about_sub_heading = get_field('about_sub_heading');
$about_description = get_field('about_description');
$about_qoute_heading = get_field('about_quotes_heading');
$about_qoute_description = get_field('about_quotes_description');

$why_us_heading = get_field('why_us_heading');
$why_us_list = get_field('why_us_list');

$innvoation_heading = get_field('innovation_heading');
$innvoation_description = get_field('innovation_description');
$informationLists = get_field('innovations_lists');


$video_url = get_field('video_url');
$video_thumnail = get_field('video_thumnail');


$researh_paper_list = get_field('research_paper');

$blogList = get_field('blog');

$newsEvents = get_field('news_events');

$testimonial_heading = get_field('testimonial_heading');
$testimonialsList = get_field('testimonials_list');


$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_description');

$counter_repeater = get_field('banner_counter_list', 'option', true);

$upcoming_heading = get_field('upcoming_event__heading');
$upcomingEventSlider = get_field('upcoming_event_slider');

$know_more_text = get_field('know_more_text');

$traningProgramSlider = get_field('training_program_lists', $page_id, true);
$training_program_heading = get_field('training_program_heading');
$innovations_title = get_field('innovations_title');

// echo $traningProgramSlider['fess_rs'];
// print_r($traningProgramSlider);

?>
<?php foreach ($banner_slider as $banner_item): ?>

  <div class="home_banner_section inner-banner"
    style="background-image: url('<?php echo $banner_item['banner_images']; ?>');">
    <div class="wrapper">
      <div class="banner_content">
        <h1>
          <?php echo $banner_item['banner_heading']; ?>
        </h1>
        <div class="specialist">
          <?php echo $banner_item['banner_sub_heading']; ?>
        </div>
        <a href="<?php echo $banner_item['button_url']; ?>" class="theme-btn-primary-outline">
          <?php echo $banner_item['button_text']; ?>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<section class="about-page-section">
  <div class="about-page-row">
    <div class="about-page-left">
      <div class="about-left-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-doctor.png" alt="">
      </div>
    </div>
    <div class="common-conetnt about-page-right ">
      <h2 class="common-heading">
        <?php echo $about_heading; ?>
      </h2>
      <h3>
        <?php echo $about_sub_heading; ?>
      </h3>
      <p>
        <?php echo $about_description; ?></span>
      </p>

      <div class="common-conetnt about-effect">
        <div class="effect-box">
          <div class="effect-quote">
            <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83.909"
                height="85.4" viewBox="0 0 83.909 85.4">
                <defs>
                  <clipPath id="clip-path">
                    <rect id="Rectangle_127" data-name="Rectangle 127" width="83.909" height="85.4" fill="currentColor">
                    </rect>
                  </clipPath>
                </defs>
                <g id="Group_12024" data-name="Group 12024" opacity="0.17">
                  <g id="Group_561" data-name="Group 561" clip-path="url(#clip-path)">
                    <path id="Path_477" data-name="Path 477"
                      d="M16.022,57.659H42.153a1.913,1.913,0,0,0,1.912-1.912V27.1a1.91,1.91,0,0,0-1.912-1.912H30c1.6-7.036,5.315-11.315,9.988-11.315a1.91,1.91,0,0,0,1.874-2.29L39.829,1.533A1.908,1.908,0,0,0,37.955,0a21.467,21.467,0,0,0-10.5,3.17,22.028,22.028,0,0,0-7.487,6.948,31.777,31.777,0,0,0-4.416,10.435A55.862,55.862,0,0,0,14.11,33.641V55.747a1.913,1.913,0,0,0,1.912,1.912"
                      transform="translate(-14.11 27.741)" fill="currentColor"></path>
                    <path id="Path_478" data-name="Path 478"
                      d="M1.912,85.4H41.5a1.913,1.913,0,0,0,1.912-1.912V40.073A1.91,1.91,0,0,0,41.5,38.161H21.88C24.243,26.307,30.4,19.046,38.23,19.046a1.91,1.91,0,0,0,1.874-2.29L37.022,1.533A1.915,1.915,0,0,0,35.144,0C28.873,0,23.6,2.5,19.715,4.68A32.309,32.309,0,0,0,8.7,14.9a47.057,47.057,0,0,0-6.554,15.49A83.929,83.929,0,0,0,0,50V83.488A1.913,1.913,0,0,0,1.912,85.4"
                      transform="translate(40.494 0)" fill="currentColor"></path>
                  </g>
                </g>
              </svg></span>
            <h5>
              <?php echo $about_qoute_heading ?>
              <h5>
                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83.909"
                    height="85.4" viewBox="0 0 83.909 85.4">
                    <defs>
                      <clipPath id="clip-path">
                        <rect id="Rectangle_127" data-name="Rectangle 127" width="83.909" height="85.4"
                          fill="currentColor">
                        </rect>
                      </clipPath>
                    </defs>
                    <g id="Group_12024" data-name="Group 12024" opacity="0.17">
                      <g id="Group_561" data-name="Group 561" clip-path="url(#clip-path)">
                        <path id="Path_477" data-name="Path 477"
                          d="M16.022,57.659H42.153a1.913,1.913,0,0,0,1.912-1.912V27.1a1.91,1.91,0,0,0-1.912-1.912H30c1.6-7.036,5.315-11.315,9.988-11.315a1.91,1.91,0,0,0,1.874-2.29L39.829,1.533A1.908,1.908,0,0,0,37.955,0a21.467,21.467,0,0,0-10.5,3.17,22.028,22.028,0,0,0-7.487,6.948,31.777,31.777,0,0,0-4.416,10.435A55.862,55.862,0,0,0,14.11,33.641V55.747a1.913,1.913,0,0,0,1.912,1.912"
                          transform="translate(-14.11 27.741)" fill="currentColor"></path>
                        <path id="Path_478" data-name="Path 478"
                          d="M1.912,85.4H41.5a1.913,1.913,0,0,0,1.912-1.912V40.073A1.91,1.91,0,0,0,41.5,38.161H21.88C24.243,26.307,30.4,19.046,38.23,19.046a1.91,1.91,0,0,0,1.874-2.29L37.022,1.533A1.915,1.915,0,0,0,35.144,0C28.873,0,23.6,2.5,19.715,4.68A32.309,32.309,0,0,0,8.7,14.9a47.057,47.057,0,0,0-6.554,15.49A83.929,83.929,0,0,0,0,50V83.488A1.913,1.913,0,0,0,1.912,85.4"
                          transform="translate(40.494 0)" fill="currentColor"></path>
                      </g>
                    </g>
                  </svg></span>
          </div>



          <p>
            <?php echo $about_qoute_description; ?>
          </p>
        </div>
      </div>
    </div>
  </div>

</section>


<section class="why-section">
  <div class="wrapper">
    <div class="why-row">
      <div class="why-top">
        <div class="why-data-top">
          <section class="counter_data_section">
            <div class="counter_data">
              <ul>
                <?php foreach ($counter_repeater as $counter): ?>
                  <li>
                    <span>
                      <?php echo $counter['banner_counter_number'] ?>
                    </span>
                    <span>
                      <?php echo $counter['banner_counter_title'] ?>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </section>
        </div>
        <div class="why-top-content">
          <h2 class="common-heading">
            <?php echo $why_us_heading; ?>
          </h2>
        </div>
      </div>

      <div class="why-bootom">
        <div class="why-bootom-row">
          <?php foreach ($why_us_list as $why_us_item): ?>
            <div class="why-bootom-box">

              <div class="why-bootom-box-content">
                <h4>
                  <?php echo $why_us_item['why_us_heading']; ?>
                </h4>
              </div>
              <div class="why-bootom-gap">
                <div class="why-bootom-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/visualization.png" alt=""
                    srcset="">
                </div>
                <div class="common-conetnt why-bootom-content">
                  <p>
                    <?php echo $why_us_item['why_us_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>






<section class="innovations-section">
  <div class="wrapper">
    <div class="top-content">
      <h3 class="common-heading">
        <?php echo $innvoation_heading ?>
      </h3>
      <div class="top-box-content common-conetnt">
        <p class="">
          <?php echo $innvoation_description; ?>
        </p>
      </div>
    </div>

    <div class="tab-box-section">
      <div class="innovations-left">
        <div class="tab-box-top">
          <ol>
            <li class="active">
              <?php echo $innovations_title ?>

            </li>
            <li><a href="http://">View More</a></li>
          </ol>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <?php foreach ($informationLists as $informationList_id): ?>

            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                <div class="innovations-box">
                  <div class="innovations-img">
                    <img src="<?php echo get_the_post_thumbnail_url($informationList_id, 'large-small'); ?>"
                      alt="platform Image">

                  </div>
                  <div class="innovations-content ">
                    <span>20 Sept 23</span>
                    <p class="clinical-content">
                      <?php $content = get_post_field('post_content', $informationList_id);
                      echo trim(strlen(strip_tags($content)) > 100 ? substr(strip_tags($content), 0, 100) . "...." : strip_tags($content)); ?>

                    </p>
                    </p>
                    <a href="<?php echo get_permalink($informationList_id); ?>">Read More</a>
                  </div>

                </div>
              </button>
              <button class="theme-btn-primary">DOWNLOAD NOW</button>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="innovations-right">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="innovations-right-box">
              <div class="cover">
                <iframe controls="" class="video" width="420" height="100%" src="<?php echo $video_url; ?>">
                </iframe>
                <div class="video-btn play_bnt">
                  <a href="javascript:void(0)" tabindex="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462" viewBox="0 0 94.462 94.462">
                      <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline"
                        d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                        transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3"></path>
                    </svg>
                  </a>
                </div>
                <img class="thumb" src="<?php echo $video_thumnail; ?>" alt="11111" loading="lazy"
                  style="max-width: 100%; height: auto;">

              </div>
            </div>

          </div>

        </div>
      </div>


    </div>
  </div>
</section>

<section class="training-section traning_service">
  <div class="wrapper">
    <div class="training-row">
      <div class="training-left">
        <div class="training-left-box">
          <h3>
            <?php echo $upcoming_heading; ?>
          </h3>
          <?php
          $events = array(
            'posts_per_page' => 4,
            'post_type' => 'events',
            'post_status' => 'publish',
            'order' => 'DESC',
            'meta_query' => array(
              array(
                'key' => 'left_event',
                'value' => 1,
                'compare' => '='
              )
            )
          );
          $events_query = new WP_Query($events);
          while ($events_query->have_posts()) {
            $events_query->the_post();
            $id = get_the_ID();
            ?>
            <div class="training-box">
              <span>
                <?php echo get_field('event_date', $id); ?>
              </span>
              <ul>
                <li>
                  <?php echo get_field('event_day', $id); ?>
                </li>
                <li>
                  <?php echo get_field('event_time', $id); ?>
                </li>
                <li><a href="http://">Book Now</a></li>
              </ul>
              <p>
                <?php echo get_the_title(); ?>
              </p>
            </div>
          <?php } ?>
          <div class="common-btn">
            <a class="theme-btn-primary" href="http://">KNOW MORE</a>
          </div>
        </div>
      </div>
      <div class="training-right">
        <h3 class="common-heading">
          <?php echo $training_program_heading; ?>
        </h3>
        <div class="slider training-slider">
          <?php
          $events = array(
            'posts_per_page' => -1,
            'post_type' => 'events',
            'post_status' => 'publish',
            'order' => 'DESC',
            'meta_query' => array(
              array(
                'key' => 'left_event',
                'value' => 0,
                'compare' => '='
              )
            )
          );
          $events_query = new WP_Query($events);
          while ($events_query->have_posts()) {
            $events_query->the_post();
            $id = get_the_ID();
            ?>
            <div>
              <div class="training-box-slider">
                <div class="training-img">
                  <?php if (has_post_thumbnail($post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="" srcset="">
                  <?php endif; ?>
                </div>
                <div class="common-conetnt training-content">
                  <span>
                    <?php echo get_the_title(); ?>
                  </span>
                  <div class="training-slider-content">
                    <p>
                      <?php echo get_the_content(); ?>
                    </p>
                    <ol>
                      <li>
                        <?php echo get_field('event_fees_with_gst', $id); ?>
                      </li>
                      <li>
                        <?php echo get_field('total_fees', $id); ?>
                      </li>
                    </ol>
                    <a href="http://">Enrol Now</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>







<section class="resources-section resources-about">
  <div class="wrapper">
    <h2 class="common-heading">Resources</h2>

    <div class="resources-about-slider">
      <?php foreach ($blogList as $blog_id):
        $cat = get_the_category($blog_id)[0]->name ?>

        <div class="item">
          <div class="resources-box">
            <div class="resources-left">
              <div class="resources-content">
                <ul class="resources-top">


                  <li class="active"><a href="http://">
                      <?php echo $cat; ?>
                    </a></li>


                  <li><span><a href="http://">
                        <?php echo get_the_date('d-M-y'); ?>
                      </a></span></li>
                </ul>
                <div class="resources-bottom">
                  <h2>
                    <?php echo get_the_title($blog_id); ?>
                  </h2>
                  <p>
                    <?php $content = get_post_field('post_content', $blog_id);
                    $trimmed_content = wp_trim_words($content, 20, '...');
                    echo $trimmed_content; ?>
                  </p>

                  <ul>
                    <li><a href="<?php echo get_permalink($blog_id); ?>">Read More</a></li>
                    <li><a href="">View More</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/faq-page">FAQ's</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="resources-right">
              <div class="resources-img">
                <img src="<?php echo get_the_post_thumbnail_url($blog_id, 'large-small'); ?>" alt="platform Image">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="resources-section resources-section02 resources-about1">
  <div class="wrapper">
    <div class="resources-about-slider1">

      <?php foreach ($newsEvents as $news_id):
        $cat1 = get_the_category($news_id)[0]->name ?>
        ?>

        <div class="item">
          <div class="resources-box">
            <div class="resources-left">
              <div class="resources-content">
                <ul class="resources-top">
                  <li class="active"><a href="http://">
                      <?php echo $cat1; ?>
                    </a></li>
                  <li><span><a href="http://">
                        <?php echo get_the_date('d-M-y'); ?>
                      </a></span></li>
                </ul>
                <div class="resources-bottom">
                  <h2>
                    <?php echo get_the_title($news_id); ?>
                  </h2>
                  <p>
                    <?php $content = get_post_field('post_content', $news_id);
                    $trimmed_content = wp_trim_words($content, 20, '...');
                    echo $trimmed_content; ?>
                  </p>
                  <ul>
                    <li><a href="<?php echo get_permalink($blog_id); ?>">Read More</a></li>
                    <li><a href="http://">View More</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/faq-page">FAQ's</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="resources-right">
              <div class="resources-img">
                <img src="<?php echo get_the_post_thumbnail_url($news_id, 'large-small'); ?>" alt="platform Image">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<section class="testimonials-section">
  <div class="wrapper">
    <div class="common-top">
      <h2 class="common-heading">
        <?php echo $testimonial_heading; ?>
      </h2>
    </div>

    <div class="testimonials-slider">
      <?php foreach ($testimonialsList as $testimonial_id):
        $country = get_field('country', $testimonial_id);
        $place = get_field('place', $testimonial_id);
        ?>
        <div class="item">
          <div class="testimonials-box">
            <div class="testimonials-img">
              <img src="<?php echo get_the_post_thumbnail_url($testimonial_id, 'large-small'); ?>" width="200"
                alt="platform Image">
              <div class="testimonials-img-content">
                <h3>
                  <?php echo get_the_title($testimonial_id); ?>
                </h3>
                <p>
                  <?php echo $place; ?>/
                  <?php echo $country; ?>
                </p>
              </div>
            </div>
            <div class="testimonials-content common-conetnt">
              <p>
                <?php $content = get_post_field('post_content', $testimonial_id);
                $trimmed_content = wp_trim_words($content, 20, '...');
                echo $trimmed_content;
                ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<section class="appointment-section appointment-about">
  <div class="wrapper">

    <div class="appointment-row">
      <div class="common-conetnt appointment-left">
        <div class="common-heading">
          <h2 class="common-heading">
            <?php echo $appointment_heading; ?>
          </h2>
        </div>

        <p class="common-conetnt">
          <?php echo $appointment_description; ?>
        </p>
      </div>
      <div class="appointment-right">
        <div class="appointment-right-box">
          <div class="contact-form">
            <div class="form-top">
              <h3>Book your appointment here!</h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="d09da70" title="Home page form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>



</div>
<?php get_footer(); ?>