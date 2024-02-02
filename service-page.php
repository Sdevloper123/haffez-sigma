<?php

/**
 * Template Name: Service Page
 */
get_header(); ?>
<?php
// global $post;
// $page_id = $post->ID;
$service_banner_sliders = get_field('banner_sliders');
$counter_repeater = get_field('banner_counter_list', 'option', true);
$approch_heading = get_field('doctor_approach_heading');
$approch_sub_heading = get_field('doctor_approach_sub_heading');
$approach_description = get_field('doctor_approach_description');
$approch_image = get_field('doctor_approach_image');
$video_heading = get_field('video_heading');
$video_sub_heading = get_field('video_sub_heading');
$video_gallery = get_field('video_gallery');
$testimonial_heading = get_field('testimonial_heading');
$testimonials_list = get_field('testimonials_list');
$appointment_heading = get_field('book_an_appointment_heading');
$appointment_form_heading = get_field('appointment_form_heading');
$appointment_description = get_field('book_an_appointment_description');
?>


<!-- Banner Section Start -->
<?php foreach ($service_banner_sliders as $service_banner_item): ?>

    <!-- Banner Section End-->
    <div class="home_banner_section inner-banner"
        style="background-image: url('<?php echo $service_banner_item['banner_image']['url']; ?>">
        <div class="wrapper">
            <div class="banner_content">
                <h1>
                    <?php echo $service_banner_item['banner_image_title']; ?>
                </h1>
                <div class="specialist">
                    <?php echo $service_banner_item['banner_image_description']; ?>
                </div>
                <a href="<?php echo $service_banner_item['banner_button_link']; ?>" class="theme-btn-primary-outline">
                    <?php echo $service_banner_item['banner_button_text']; ?>
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

<?php $clinical_expertise_lists = get_field('clinical_expertise_lists');
//echo '<pre>';print_r($clinical_expertise_lists); 
if (isset($clinical_expertise_lists) && !empty($clinical_expertise_lists)) {
    ?>
    <section class="clinical-expertise">
        <div class="clinical-expertise-inner">
            <div class="clinical-expertise-title">
                <h2 class="common-heading"> Clinical Expertise </h2>
            </div>
            <div class="clinical-expertise-left">
                <?php $clinical_count = 1;
                foreach ($clinical_expertise_lists as $clinical_expertise_id) {

                    ?>

                    <div class="clinicallist <?php echo ($clinical_count > 1) ? 'hide' : ''; ?> "
                        id="urogynaecology_<?php echo $clinical_count; ?>">
                        <div class="urogynaecology_sec">
                            <div class="urogynaecology_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/urogynaecology.jpg"
                                    alt="">
                                <div class="product-title">
                                    <h2>
                                        <?php
                                        $category = get_the_terms($clinical_expertise_id, 'clinical_expertise-category');
                                        foreach ($category as $cat) {
                                            echo $cat->name;
                                        } ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="urogynaecology_deta common-conetnt">
                                <h3>
                                    <?php echo get_the_title($clinical_expertise_id); ?>
                                </h3>
                                <p>
                                    <?php $content = get_post_field('post_content', $clinical_expertise_id);
                                    $trimmed_content = wp_trim_words($content, 20, '...');
                                    echo $trimmed_content; ?>
                                </p>

                                <a href="<?php echo get_permalink($clinical_expertise_id); ?>"
                                    class="theme-btn-primary-outline"> BOOK AN APPOINTMENT </a>
                            </div>
                        </div>
                    </div>
                    <?php $clinical_count++;
                }
                ?>
            </div>
            <div class="clinical-expertise-right">
                <ul>
                    <?php $clinical_count = 1;
                    foreach ($clinical_expertise_lists as $clinical_expertise_id) { ?>
                        <li class="clinicalclick">
                            <a href="javascript:void();" data-tag="urogynaecology_<?php echo $clinical_count; ?>"
                                class="<?php echo ($clinical_count == 1) ? 'activelink' : ''; ?>">
                                <div class="urogynaecology_right">

                                    <div class="urogynaecology_icon">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50.000000pt"
                                            height="50.000000pt" viewBox="0 0 50.000000 50.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path d="M43 485 c-49 -34 -54 -142 -10 -183 48 -44 107 -23 107 39 0 16 4 29
                           8 29 13 0 40 -53 47 -93 6 -31 3 -43 -12 -60 -33 -37 -33 -53 -1 -103 16 -26
                           32 -63 35 -81 5 -28 10 -33 33 -33 24 0 28 5 33 36 3 20 17 50 30 67 37 48 40
                           70 17 100 -30 37 -27 108 5 144 l24 28 1 -30 c0 -36 8 -48 39 -65 20 -10 27
                           -9 50 7 38 29 52 62 48 110 -5 53 -29 91 -62 99 -31 8 -75 -19 -75 -46 0 -10
                           -14 -28 -30 -40 -41 -29 -70 -89 -70 -145 0 -25 -4 -45 -10 -45 -5 0 -10 21
                           -10 46 0 58 -23 108 -66 141 -19 14 -34 34 -34 44 0 20 -36 49 -60 49 -9 0
                           -25 -7 -37 -15z m75 -17 c16 -20 10 -157 -8 -168 -26 -16 -48 -11 -69 16 -26
                           33 -28 109 -5 142 17 24 65 30 82 10z m346 -10 c51 -79 -6 -201 -74 -158 -18
                           11 -24 148 -8 168 17 20 66 15 82 -10z m-286 -71 c42 -44 68 -146 42 -162 -6
                           -4 -10 10 -10 35 0 45 -17 85 -49 114 -22 20 -27 36 -13 36 5 0 18 -10 30 -23z
                           m159 -15 c-31 -33 -47 -72 -47 -118 0 -21 -4 -33 -10 -29 -29 18 7 138 51 168
                           33 24 37 11 6 -21z m-19 -174 c18 -18 15 -40 -15 -83 -14 -21 -29 -53 -33 -69
                           -8 -40 -32 -40 -40 0 -4 16 -19 48 -33 69 -47 69 -32 95 53 95 31 0 61 -5 68
                           -12z" />
                                                <path d="M80 410 c-10 -25 -10 -34 5 -56 9 -14 19 -23 23 -20 3 4 0 12 -6 18
                           -15 15 -16 55 -2 63 12 8 13 25 1 25 -5 0 -14 -13 -21 -30z" />
                                                <path d="M398 429 c15 -17 16 -61 0 -77 -6 -6 -9 -14 -6 -18 4 -3 14 6 23 20
                           19 28 10 76 -16 84 -11 4 -12 2 -1 -9z" />
                                                <path d="M190 186 c0 -3 11 -17 25 -32 14 -15 25 -35 25 -45 0 -11 5 -19 10
                           -19 6 0 10 8 10 19 0 10 11 30 26 46 33 36 25 43 -10 8 -25 -25 -29 -26 -37
                           -10 -9 16 -49 43 -49 33z" />
                                            </g>
                                        </svg>
                                    </div>

                                    <div class="title-urogynaecology-new">
                                        <h2>
                                            <?php
                                            $category = get_the_terms($clinical_expertise_id, 'clinical_expertise-category');
                                            foreach ($category as $cat) {
                                                echo $cat->name;
                                            } ?>
                                        </h2>
                                    </div>

                                    <div class="service_read">
                                        <p>
                                            <?php $content = get_post_field('post_content', $clinical_expertise_id);
                                            $trimmed_content = wp_trim_words($content, 20, '...');
                                            echo $trimmed_content; ?>
                                        </p>
                                        <!-- <a href="#!"> Read More </a> -->
                                    </div>

                                </div>
                            </a>
                        </li>
                        <?php $clinical_count++;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
<?php } ?>
<section class="doctor-approch-sec">
    <div class="doctor-approch-inner">
        <div class="doctor-approch-left"> <img src="<?php echo $approch_image['url']; ?>" alt=""> </div>
        <div class="doctor-approch-right common-conetnt">
            <h2 class="common-heading">
                <?php echo $approch_heading; ?>
            </h2>
            <h4>
                <?php echo $approch_sub_heading; ?>
            </h4>
            <p>
                <?php echo $approach_description; ?>
            </p>
        </div>
    </div>
</section>
<?php if (isset($video_gallery) && !empty($video_gallery)) {
    ?>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462"
                                            viewBox="0 0 94.462 94.462">
                                            <path id="Icon_material-play-circle-outline"
                                                data-name="Icon material-play-circle-outline"
                                                d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                                                transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3" />
                                        </svg>
                                    </a>
                                </div>
                                <img class="thumb" src="<?php echo get_the_post_thumbnail_url($video_id, 'large-small'); ?>"
                                    alt="video-image" loading="lazy" style="max-width: 100%; height: auto;">
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
                    $video_link = get_field('video_link', $video_id); ?>
                    <div class="slide-btn">
                        <div class="thum-img">
                            <img src="<?php echo get_the_post_thumbnail_url($video_id, 'large-small'); ?>" alt="video-thum"
                                srcset="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php
if (isset($testimonials_list) && !empty($testimonials_list)) { ?>
    <section class="testimonials-section service-testmonial">
        <div class="wrapper">
            <div class="common-top">
                <h2 class="common-heading">
                    <?php echo $testimonial_heading; ?>
                </h2>
            </div>
            <div class="owl-carousel testimonials-slider">


                <?php foreach ($testimonials_list as $testimonial_id):
                    $country = get_field('country', $testimonial_id);
                    $place = get_field('place', $testimonial_id); ?>

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
<?php } ?>

<section class="appointment-section service-appointment">
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
</div>
<?php get_footer(); ?>