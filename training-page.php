<?php
/**
 * Template Name: Training Program Page
 */
get_header(); ?>

<?php
$Id = get_the_ID();
$bannerSlider = get_field('banner_slider');

$counter_repeater = get_field('banner_counter_list', 'option', true);

$upcomingSlider = get_field('upcoming_slider');
$upcoming_heading = get_field('upcoming_heading');
$training_heading = get_field('training_program_heading');
$know_more = get_field('know_more_text');

$training_program = get_field('training_program_post');


$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_description');
// @get the Category


?>

<?php foreach ($bannerSlider as $banner_item): ?>
    <div class="home_banner_section inner-banner"
        style="background-image: url('<?php echo $banner_item['banner_images']; ?>');">
        <div class="wrapper">
            <div class="banner_content">
                <h1>'
                    <?php echo $banner_item['banner_heading']; ?>
                </h1>
                <div class="specialist">
                    <?php echo $banner_item['banner_sub_heading']; ?>
                </div>
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


<section class="training-courses">
    <div class="wrapper">
        <div class="training-courses-inner">

            <div class="training-courses-left">
                <div class="training_title-left">
                    <h2> Training Courses </h2>
                </div>

                <?php
                $args = array(
                    'post_type' => 'traning_program',
                    'post_status' => 'publish',
                    'orderby' => 'post',
                    'order' => 'ASC',


                );
                $tarining_item = new WP_Query($args); ?>
                <ul>
                    <?php if ($tarining_item->have_posts()): ?>
                        <?php
                        $cnt1 = 1;
                        while ($tarining_item->have_posts()):
                            $tarining_item->the_post();

                            if ($cnt1 == 1)
                                $hide1 = "activelink";
                            else
                                $hide1 = "";

                            ?>
                            <li class="traningclick"><a href="javascript:void();" data-tag="training<?php echo get_the_ID(); ?>"
                                    class="<?php echo $hide1; ?>">
                                    <?php echo get_the_title(); ?>
                                </a></li>
                            <?php $cnt1++; endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="training-courses-right">
                <?php
                $argss = array(
                    'post_type' => 'traning_program',
                    'post_status' => 'publish',
                    'orderby' => 'post',
                    'order' => 'ASC',


                );
                $tarining_items = new WP_Query($argss);
                // echo "<pre>";print_r($tarining_items->posts);echo "</pre>";die();
                $cnt = 1;
                while ($tarining_items->have_posts()):
                    $tarining_items->the_post();
                    $pId = get_the_ID();
                    $scheduleLists = get_field('schedule_slideer', $pId);
                    if ($cnt == 1)
                        $hide = "";
                    else
                        $hide = "hide";
                    ?>
                    <div class="traninglist <?php echo $hide; ?> " id="training<?php echo get_the_ID(); ?>">
                        <div class="right-traning-inner common-conetnt">
                            <div class="traning_tab_img">
                                <img src="<?php echo get_the_post_thumbnail_url($pId, 'large-small'); ?>" alt="">
                            </div>
                            <h2>
                                <?php echo get_the_title(); ?>
                            </h2>
                            <p>
                                <?php echo get_the_content(); ?>
                            </p>
                            <div class="training-left-box">
                                <h3>Schedule - 2023</h3>
                                <?php
                                foreach ($scheduleLists as $schedule_item): ?>
                                    <div class="training-box">
                                        <span> 20th of Dec 2023</span>
                                        <ul>
                                            <li>
                                                <?php echo $schedule_item['days']; ?>
                                            </li>
                                            <li>
                                                <?php echo $schedule_item['from_time']; ?>
                                                <?php echo $schedule_item['to_time']; ?>
                                            </li>
                                            <li> Fees:
                                                <?php echo $schedule_item['fees']; ?>/- +
                                                <?php echo $schedule_item['minus_gst']; ?>% GST
                                            </li>
                                            <li><a href="http://">
                                                    <?php echo $schedule_item['enroll_text']; ?>
                                                </a></li>
                                        </ul>
                                        <p>
                                            <?php echo $schedule_item['schedule_description'] ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                    <?php $cnt = $cnt + 1; endwhile; ?>
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
                    <?php echo $upcoming_heading; ?>
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