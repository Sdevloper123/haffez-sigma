<?php
/**
 * Template Name: Gallery Page
 */
get_header(); ?>


<?php

global $post;
$page_id = $post->ID;

$bannerSlider = get_field('banner_slider');

$testimonial_heading = get_field('testimonial_heading');
$testimonials_list = get_field('testimonials_list');

$videoGallery = get_field('video_gallery');
// print_r($videoGallery);

$gallery_heading = get_field('gallery_heading');
$gallery_description = get_field('gallery_description');
$gallary_slider = get_field('gallery_slider');
$gallary_image_1 = get_field('image_1');
$gallary_image_2 = get_field('image_2');
$gallary_title = get_field('galler_title');
$appointment_heading = get_field('appointment_heading');

$appointment_description = get_field('appointment_description');


// @get the Category
$cats = get_terms([
  'taxonomy' => 'video_gallery-category',
  'hide_empty' => 'false',
  'orderby' => 'name',
  'order' => 'DESC',
  'parent' => 0

]);
?>




<?php foreach ($bannerSlider as $banner_item): ?>
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
        <a href=" <?php echo $banner_item['banner_link']; ?>" class="theme-btn-primary-outline">
          <?php echo $banner_item['banner_text']; ?>
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<section class="gallery-section">
  <div class="wrapper">
    <div class="gallery-row">
      <div class="gallery-left">
        <div class="slick-carousel slider-gallery">
          <?php foreach ($gallary_slider as $gallery_item):
            if (!empty($gallery_item['gallery_images'])) {


              ?>

              <div>
                <div class="slider-gallery-box">
                  <img src="<?php echo $gallery_item['gallery_images']; ?>" alt="">
                </div>
              </div>
              <?php

            }
          endforeach; ?>


        </div>
      </div>
      <div class="gallery-right">
        <div class="common-conetnt gallery-right-top">
          <h3 class="common-heading">
            <?php echo $gallery_heading; ?>
          </h3>
          <h5>
            <?php echo $gallary_title; ?>
          </h5>
          <p>
            <?php echo $gallery_description; ?>
          </p>
        </div>
        <div class="gallery-right-bootom">
          <div class="gallery-right-img">
            <img src="<?php echo $gallary_image_1; ?>" alt="" srcset="">
          </div>
          <div class="gallery-right-img">
            <img src="<?php echo $gallary_image_1; ?>" alt="" srcset="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="surgeries-section">
  <div class="wrapper">

    <h3 class="common-heading">Video Gallery</h3>

    <ul class="top-tab">
      <?php foreach ($cats as $key => $cat_item): ?>
        <li class="surgeries"><a href="javascript:void(0)" <?php if ($key == 0) { ?> class="active" <?php } ?>
            data-tag="tab_<?php echo $cat_item->term_id; ?>" data-toggle="tab">
            <?php echo $cat_item->name; ?>
          </a></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="">
    <?php foreach ($cats as $key => $cat_item): ?>
      <div class="tab-slider <?php if ($key > 0) { ?> hide <?php } ?>" id="tab_<?php echo $cat_item->term_id; ?>">
        <section class="video-home">
          <div class="slider-box">
            <div class="slider-video">

              <?php
              $args = array(
                'post_type' => 'video_gallery',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'post',
                'order' => 'ASC',
                'Category' => $cat_item->term_id
              );
              $video_item = new WP_Query($args);
              ?>

              <?php foreach ($videoGallery as $video_id):
                $video_link = get_field('video_link', $video_id);
                $feat_image = wp_get_attachment_url(get_post_thumbnail_id($video_id));

                ?>
                <div class="slide-container">
                  <div>
                    <div class="cover">
                      <iframe controls="" class="video" width="420" height="100%" src="<?php echo $video_link; ?>">
                      </iframe>
                      <div class="video-btn play_bnt">
                        <a href="javascript:void(0)" tabindex="0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462"
                            viewBox="0 0 94.462 94.462">
                            <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline"
                              d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                              transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3" />
                          </svg>
                        </a>
                      </div>
                      <img class="thumb" src="<?php echo get_the_post_thumbnail_url($video_id, 'large-small'); ?>"
                        alt="11111" loading="lazy" style="max-width: 100%; height: auto;">
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

              <?php foreach ($videoGallery as $video_id):
                $video_link = get_field('video_link', $video_id);
                $feat_image = wp_get_attachment_url(get_post_thumbnail_id($video_id));

                ?>
                <div class="slide-btn">
                  <div class="thum-img">
                    <img src="<?php echo $feat_image; ?>" alt="" srcset="">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      </div>
    <?php endforeach; ?>
  </div>
</section>






<section class="testimonials-section gallery-testimonials">
  <div class="wrapper">
    <div class="common-top">
      <h2 class="common-heading">
        <?php echo $testimonial_heading; ?>
      </h2>
    </div>

    <div class="testimonials-slider">
      <?php
      foreach ($testimonials_list as $testimonial_id):
        $country = get_field('country', $testimonial_id);
        $place = get_field('place', $testimonial_id); ?>
        <div class="item">
          <div class="testimonials-box">
            <div class="testimonials-img">
              <img src="<?php echo get_the_post_thumbnail_url($testimonial_id, 'large-small'); ?>" width="200"
                alt="platform Image">
              <div class="testimonials-img-content">
                <h3>
                  <?php echo $testimonial_id->post_title; ?>
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


<section class="appointment-section appointment-about appointment-gallery">
  <div class="wrapper">
    <div class="appointment-row">
      <div class="common-conetnt appointment-left">
        <div class="common-heading">
          <h2 class="common-heading">
            <?php echo $appointment_heading ?>
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