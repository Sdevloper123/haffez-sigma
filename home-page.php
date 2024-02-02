<?php

/**
 * Template Name: Home Page
 */
get_header();
global $post;
$page_id = $post->ID;
$banner_slider = get_field('banner_sliders');

$counter_repeater = get_field('banner_counter_list', 'option', true);



$professional_heading = get_field('professional_heading');
$professional_tab_text = get_field('professional_tab_text');
$professional_view_more_text = get_field('professional_view_more_text');
$professional_view_more_link = get_field('professional_view_more_link');
$professional_know_more_text = get_field('professional_know_more_text');
$professional_description = get_field('professional_description');

$award_heading = get_field('assignment_main_heading');
$assignment_tab_text = get_field('assignment_tab_text');
$assignment_view_more_text = get_field('assignment_view_more_text');
$assignment_view_more_text = get_field('assignment_view_more_text');
$assignment_know_more_text = get_field('assignment_know_more_text');
$assignment_know_more_link = get_field('assignment_know_more_link');
$assignment_description = get_field('assignment_description');

$about_image = get_field('about_image');
$about_heading = get_field('about_heading');
$about_description = get_field('about_description');
$about_button_text = get_field('about_button_text');
$about_button_link = get_field('about_button_link');
$about_name = get_field('about_name');
$about_qualification = get_field('about_qualification');
$aboutus_tab = get_field('aboutus_tab');

$award_achievements_lists = get_field('award_achievements_list');
$award_heading_relation = get_field('award_heading');

$hospitals_heading = get_field('hospitals_heading');
$hospitals_image = get_field('hospitals_image');
$hospitals_doctor_image = get_field('hospitals_doctor_image');
$hospitals_description = get_field('hospitals_description');
$hospitals_button_text_one = get_field('hospitals_button_text_one');
$hospitals_button_link_one = get_field('hospitals_button_link_one');
$hospitals_button_text_two = get_field('hospitals_button_text_two');
$hospitals_button_link_two = get_field('hospitals_button_link_two');
$hospitals_counter_list = get_field('hospitals_counter_list');

$clinical_expertise_list = get_field('clinical_expertise_list');
$clinical_heading = get_field('clinical_heading');
$clinical_description = get_field('clinical_description');
$bottom_heading = get_field('bottom_heading');
$book_appointment_link = get_field('book_appointment_link');
$book_appointment_text = get_field('book_appointment_text');


$innvoation_heading = get_field('innovations_heading');
$innvoation_description = get_field('innovations_description');
$video_url = get_field('video_url');
$video_thumnail = get_field('video_thumnail');
$informationLists = get_field('innovations_lists');


$testimonial_heading = get_field('testimonial_heading');
$testimonialsList = get_field('testimonials_list');

$appointment_heading = get_field('appointment_heading');
$appointment_form_heading = get_field('appointment_form_heading');
$appointment_description = get_field('appointment_description');

$video_heading = get_field('video_heading');
$video_sub_heading = get_field('video_sub_heading');
$video_description = get_field('video_description');
$video_gallery = get_field('video_gallery');

$blogList = get_field('blog');
$news_events = get_field('news_events');

$bottom_text = get_field('bottom_text');

$mobile_number = get_field('mobile_number', 'option');
$address = get_field('addres', 'option');
$email = get_field('email', 'option');
$facebook_link = get_field('facebook_link', 'option', true);
$instagram_link = get_field('instagram_link', 'option', true);
$twitter_link = get_field('twitter_link', 'option', true);
$youtube_link = get_field('youtube_link', 'option', true);
$counter_repeater = get_field('banner_counter_list', 'option', true);

$bottom_button_link = get_field('bottom_btn_link');
$bottom_button_text = get_field('bottom_btn_text');
$innovations_title = get_field('innovations_title');

?>

<?php $banner_slider = get_field('banner_sliders'); ?>

<?php foreach ($banner_slider as $banner): ?>
  <div class="home_banner_section home_banner" style="background-image: url('<?php echo $banner['banner_image'] ?>');">
    <div class="wrapper">
      <div class="banner_content">
        <h1><span>
            <?php echo $banner['banner_image_title_one'] ?>
          </span><br>
          <?php echo $banner['banner_image_title_two'] ?>
        </h1>
        <div class="specialist">
          <?php echo $banner['banner_image_description'] ?><br>
        </div>
        <a href="<?php echo $banner['banner_button_link'] ?>" class="theme-btn-primary-outline">
          <?php echo $banner['banner_button_text'] ?>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>


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

<section class="about_section">
  <div class="about_wrapper">
    <div class="about_img_wrapper">
      <div class="name_overlay">
        <div class="name">
          <?php echo $about_name; ?>
        </div>
        <div class="designation">
          <?php echo $about_qualification; ?>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-image/dr_hafeez.png"
        alt="Dr. Hafeez">
    </div>
    <div class="about_text_wrapper">
      <h2 class="heading">
        <?php echo $about_heading; ?>
      </h2>
      <div class="about_text">
        <?php echo $about_description; ?>
      </div>
    </div>
  </div>
</section>








<section class="professional-section">
  <div class="wrapper">
    <div class="professional-box">

      <div class="tab-menu professional-left">
        <ul>
          <li><a href="#" class="active" data-rel="tab-1">
              <div class="tab-img"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-image/professional.png">
              </div>
              <div class="tab-list">
                <?php echo $professional_heading; ?>
              </div>
            </a></li>
          <li><a href="#" data-rel="tab-2" class="">
              <div class="tab-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-image/professional.png">
              </div>
              <div class="tab-list">
                <?php echo $award_heading; ?>
              </div>
            </a></li>

        </ul>
      </div>

      <div class="tab-main-box professional-right">
        <div class="tab-box" id="tab-1" style="display:block;">
          <h2>
            <?php echo $professional_tab_text; ?>
          </h2>
          <ul>
            <li>
              <?php echo $professional_description; ?>
            </li>
          </ul>

          <div class="tab-btn">
            <a href="<?php echo $professional_view_more_link; ?>">
              <?php echo $professional_view_more_text ?>
            </a>
            <a class="theme-btn-primary" href="<?php echo get_site_url() ?>/about">
              <?php echo $professional_know_more_text; ?>
            </a>
          </div>
        </div>
        <div class="tab-box" id="tab-2">
          <h2>
            <?php echo $assignment_tab_text; ?>
          </h2>
          <ul>
            <li>
              <?php echo $assignment_description; ?>
            </li>

          </ul>
          <div class="tab-btn">
            <a class="" href="<?php echo $assignment_view_more_link; ?>">
              <?php echo $assignment_view_more_text; ?>
            </a>
            <a class="theme-btn-primary" href="<?php echo get_site_url() ?>/about">
              <?php echo $assignment_know_more_text; ?>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- awared & achivment section here -->

<section class="awards-section">
  <div class="wrapper">

    <div class="awards-top">
      <div class="owl-carousel awards-slider">

        <?php foreach ($award_achievements_lists as $award_item): ?>
          <div class="item">
            <div class="awards-box">
              <div class="awards-left">
                <h2 class="common-heading">
                  <?php echo $award_heading_relation; ?>
                </h2>

              </div>
              <div class="awards-right">
                <div class="awards-right-box">
                  <img src="<?php echo get_the_post_thumbnail_url($award_item->ID, 'large-small'); ?>"
                    alt="platform Image">
                  <div class="awards-left-box">
                    <h3>
                      <?php echo $award_item->post_title; ?>
                    </h3>
                    <p class="common-conetnt">
                      <?php echo $award_item->post_content; ?>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>






<!-- Sunrise hospital section here -->

<section class="sunrise-section">
  <div class="wrapper">
    <div class="common-top">
      <h2 class="common-heading">
        <?php echo $hospitals_heading; ?>
      </h2>
    </div>
  </div>

  <section class="sunrise-bg">
    <div class="wrapper">
      <div class="sunrise-row">
        <div class="sunrise-left">
          <div class="sunrise-left-img">
            <img src="<?php echo $hospitals_image; ?>">
          </div>
        </div>
        <div class="sunrise-right">
          <div class="common-conetnt sunrise-right-content">
            <p>
              <?php echo $hospitals_description; ?>
            </p>

            <div class="sunrise-right-btn">
              <a class="theme-btn-primary" href="<?php echo $hospitals_button_link_one; ?>">
                <?php echo $hospitals_button_text_one; ?>
              </a>
              <a class="theme-btn-primary" href="<?php echo $hospitals_button_link_two; ?>">
                <?php echo $hospitals_button_text_two; ?>
              </a>
            </div>
          </div>
          <div class="sunrise-img">
            <img src="<?php echo $hospitals_doctor_image['url']; ?>" width="200" alt="banner image">
          </div>
        </div>
      </div>
      <section class="counter_data_section sunrise-data_section">
        <div class="counter_data">
          <ul>
            <?php foreach ($hospitals_counter_list as $hospital): ?>
              <li>
                <div class="icon-img">
                  <img src="<?php echo $hospital['hospitals_icon']['url'] ?>">
                </div>
                <span class="box-number">
                  <?php echo $hospital['hospitals_number'] ?>
                </span>
                <span class="box-content">
                  <?php echo $hospital['hospitals_title'] ?>
                </span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>
    </div>
  </section>
</section>


<!-- clinical section here    -->

<section class="clinical-section">
  <div class="wrapper">
    <div class="clinical-row">
      <div class="clinical-box">
        <div class="common-conetnt clinical-content">
          <h2 class="common-heading">
            <?php echo $clinical_heading; ?>
          </h2>
          <p>
            <?php echo $clinical_description; ?>
          </p>
        </div>
      </div>


      <?php foreach ($clinical_expertise_list as $clinical_item_id): ?>
        <div class="clinical-box">
          <div class="clinical-img">
            <img src="<?php echo get_the_post_thumbnail_url($clinical_item_id, ); ?>" alt="platform Image">
            <div class="clinical-img-conten">
              <div class="clinical-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-image/professional.png"
                  alt="">
              </div>
              <h3>
                <?php echo get_the_title($clinical_item_id); ?>
              </h3>
              <p>
                <?php $content = get_post_field('post_content', $clinical_item_id);
                $trimmed_content = wp_trim_words($content, 5, '...');
                echo $trimmed_content; ?>
              </p>
              <div class="clinical-btn">
                <a class="theme-btn-primary" href="<?php echo get_permalink($clinical_item_id); ?>">KNOW MORE</a>
              </div>

            </div>

          </div>
        </div>
      <?php endforeach; ?>
      <div class="clinical-bottom">

        <h2 class="common-heading">
          <?php echo $bottom_heading; ?>
        </h2>
        <div class="clinical-btn">
          <a class="theme-btn-primary" href="<?php echo $facebook_link; ?>">
            <?php echo $book_appointment_text; ?>
          </a>
        </div>
      </div>
    </div>
</section>


<!-- Innovations Section -->

<section class="innovations-section">
  <div class="wrapper">
    <div class="top-content">
      <h3 class="common-heading">
        <?php echo $innvoation_heading; ?>
      </h3>
      <div class="top-box-content common-conetnt">
        <p class="common-conetnt">
          <?php echo $innvoation_description; ?>
        </p>
      </div>
    </div>

    <div class="tab-box-section">

      <div class="innovations-left">
        <div class="tab-box-top">
          <ol>
            <li class="active">
              <?php echo $innovations_title; ?>
            </li>
            <li><a href="http://">View More</a></li>
          </ol>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <?php foreach ($informationLists as $informationList_id):
            $pid = get_the_ID();
            ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                <div class="innovations-box">
                  <div class="innovations-img">
                    <img src="<?php echo get_the_post_thumbnail_url($informationList_id, 'large-small'); ?>"
                      alt="platform Image">

                  </div>
                  <div class="innovations-content ">
                    <span>
                      <?php echo get_the_date('d-M-Y'); ?>
                    </span>
                    <p class="clinical-content">
                      <?php $content = get_post_field('post_content', $informationList_id);
                      echo trim(strlen(strip_tags($content)) > 100 ? substr(strip_tags($content), 0, 100) . "...." : strip_tags($content)); ?>

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


<!-- Testimonial Section -->


<section class="testimonials-section">
  <div class="wrapper">
    <div class="common-top">
      <h2 class="common-heading">
        <?php echo $testimonial_heading; ?>
      </h2>
    </div>

    <div class="owl-carousel testimonials-slider">
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
                echo $trimmed_content; ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<!-- Appointment Section -->

<section class="appointment-section">
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
              <h3>
                <?php echo $appointment_form_heading; ?>
              </h3>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="d09da70" title="Home page form"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Video gallary section heree -->

<section class="video-home">
  <div class="wrapper">
    <div class="video-top-row">
      <div class=" video-left">
        <h4 class="common-heading">
          <?php echo $video_heading; ?>
        </h4>
        <strong>
          <?php echo $video_sub_heading; ?>
        </strong>
      </div>
      <div class="common-conetnt video-right">
        <p class="common-conetnt">
          <?php echo $video_description; ?>
        </p>
      </div>
    </div>
  </div>

  <div class="slider-box">
    <div class="slider-video">
      <?php foreach ($video_gallery as $video_id):
        $video_link = get_field('video_link', $video_id); ?>

        <div class="slide-container">
          <div>
            <div class="cover">
              <iframe controls="" class="video" width="420" height="100%" src="<?php echo $video_link; ?>">
              </iframe>
              <div class="video-btn play_bnt">
                <a href="javascript:void(0)" tabindex="0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462" viewBox="0 0 94.462 94.462">
                    <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline"
                      d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                      transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3" />
                  </svg>
                </a>
              </div>
              <img class="thumb" src="<?php echo get_the_post_thumbnail_url($video_id, 'large-small'); ?>" alt="11111"
                loading="lazy" style="max-width: 100%; height: auto;">
              <div class="thumb" id="thumb-content">
                <p class="common-conetnt">
                  <?php $content = get_post_field('post_content', $video_id);
                  $trimmed_content = wp_trim_words($content, 20, '...');
                  echo $trimmed_content; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>



    </div>
    <div class="video-thum">
      <?php foreach ($video_gallery as $video_id):
        $thumnail_image = get_the_post_thumbnail_url($video_id, 'large-small'); ?>
        <div class="slide-btn">
          <div class="thum-img">
            <img src="<?php echo $thumnail_image; ?>" alt="" srcset="">
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- Resources Section -->
<!-- Updated Section  -->
<section class="resources-section">
  <div class="wrapper">
    <h2 class="common-heading">Resources</h2>

    <div class="resources-slider">

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
                        <?php echo get_the_date('d-M-Y'); ?>
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
                    <li><a href="http://">View More</a></li>
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




<section class="resources-section resources-section02">
  <div class="wrapper">
    <div class="resources-slider">
      <?php foreach ($news_events as $news_events_id):
        $cat1 = get_the_category($news_events_id)[0]->name ?>
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
                        <?php echo get_the_date('d-M-Y'); ?>
                      </a></span></li>
                </ul>
                <div class="resources-bottom">
                  <h2>
                    <?php echo get_the_title($news_events_id); ?>
                  </h2>
                  <p>
                    <?php $content = get_post_field('post_content', $news_events_id);
                    $trimmed_content = wp_trim_words($content, 20, '...');
                    echo $trimmed_content; ?>
                  </p>

                  <ul>
                    <li><a href="<?php echo get_permalink($news_events_id); ?>">Read More</a></li>
                    <li><a href="http://">View More</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="resources-right">
              <div class="resources-img">
                <img src="<?php echo get_the_post_thumbnail_url($news_events_id, 'large-small'); ?>" alt="platform Image">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<section class="bottom-section">
  <div class="wrapper">
    <h2 class="common-heading">
      <?php echo $bottom_text; ?>
    </h2>
    <div class="clinical-btn">

      <a class="theme-btn-primary" href="<?php echo $bottom_button_link; ?>">
        <?php echo $book_appointment_text; ?>
      </a>
    </div>
  </div>
</section>
</div>
<?php get_footer(); ?>