<?php
/**
 * Template Name: Patient Testimonial Page
 */
get_header(); ?>


<?php
global $post;
$page_id = $post->ID;

$bannerSlider = get_field('banner_sliders');

$video_heading = get_field('video_heading');
$video_description = get_field('video_description');
$videoGallery = get_field('video_lists');


$client_say_heading = get_field('client_says_heading');
$testimonialsList = get_field('testimonials_list');

$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_sub_heading');

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
            </div>
        </div>

    </div>
<?php endforeach; ?>



<section class="services-slider">
    <div class="wrapper">
        <div class="common-conetnt common-top ">
            <h2 class="common-heading">
                <?php echo $video_heading; ?>
            </h2>
            <p>
                <?php echo $video_description; ?>
            </p>
        </div>



        <div class="services-row">
            <div class="main-services">
                <div class="slider slider-main-nav">
                    <?php foreach ($videoGallery as $video_list):
                        $video_link = get_field('video_link', $video_list);
                        ?>
                        <div>
                            <div class="slider-main">
                                <div class="cover">
                                    <iframe controls="" class="video" width="420" height="100%"
                                        src="<?php echo $video_link; ?>">
                                    </iframe>
                                    <div class="video-btn play_bnt">
                                        <a href="javascript:void(0)" tabindex="0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462"
                                                viewBox="0 0 94.462 94.462">
                                                <path id="Icon_material-play-circle-outline"
                                                    data-name="Icon material-play-circle-outline"
                                                    d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                                                    transform="translate(-1.5 -1.5)" fill="none" stroke="#fff"
                                                    stroke-width="3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <img class="thumb"
                                        src="<?php echo get_the_post_thumbnail_url($video_list, 'large-small'); ?>"
                                        alt="11111" loading="lazy" style="max-width: 100%; height: auto;">
                                    <div class="thumb slider-main-content" loading="lazy">
                                        <h3>
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <p>
                                            <?php echo $video_list->post_content; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="nav-services">
                <div class="slider-nav">
                    <?php foreach ($videoGallery as $video_list):
                        $thumnail_image = get_the_post_thumbnail_url($video_list->ID, 'large-small'); ?>

                        <div>
                            <div class="nav-main">
                                <img src="<?php echo $thumnail_image; ?>">
                                <div class="video-btn">
                                    <a href="javascript:void(0)" tabindex="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462"
                                            viewBox="0 0 94.462 94.462">
                                            <path id="Icon_material-play-circle-outline"
                                                data-name="Icon material-play-circle-outline"
                                                d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z"
                                                transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-width="3">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="client-say-sec client-say-testimonial">
    <div class="client-say-title">
        <h2 class="common-heading">
            <?php echo $client_say_heading; ?>
        </h2>
    </div>


    <div class="client-say-slider">
        <?php
        if (isset($testimonialsList) && !empty($testimonialsList)): ?>
            <?php
            foreach ($testimonialsList as $testimonial_id): ?>
                <div class="item">
                    <div class="client-say-inner">
                        <div class="client-say-left"> <img
                                src="<?php echo get_the_post_thumbnail_url($testimonial_id, 'large-small'); ?>" alt="">
                        </div>
                        <div class="client-say-right common-conetnt">
                            <h3>
                                <?php echo get_the_title($testimonial_id); ?>
                            </h3>
                            <h5> Suffering From - Urogynaecology </h5>
                            <p>
                                <?php $content = get_post_field('post_content', $testimonial_id);
                                $trimmed_content = wp_trim_words($content, 20, '...');
                                echo $trimmed_content; ?>
                            </p>
                            <div class="rating-client">
                                <ul>
                                    <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                                    <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                                    <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                                    <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                                    <li> <i class="fa fa-star" aria-hidden="true"></i> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>



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