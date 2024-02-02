<?php
/**
 * Template Name: Appointment Page
 */
get_header(); ?>


<?php
global $post;
$page_id = $post->ID;

$banner_slider = get_field('banner_slider');

$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_description');

$location_heading = get_field('location_heading');
$location_place = get_field('location_place');

$working_heading = get_field('working_hour_heading');
$working_hour_slider = get_field('working_hour_slider');

$map_url = get_field('map_link');
$counter_repeater = get_field('banner_counter_list', 'option', true);



?>

<?php foreach ($banner_slider as $banner_slider_item): ?>

    <div class="home_banner_section inner-banner contact-banner"
        style="background-image: url('<?php echo $banner_slider_item['banner_images'] ?>');">
        <div class="wrapper">
            <div class="banner_content">
                <h1>
                    <?php echo $banner_slider_item['banner_heading']; ?>
                </h1>
                <div class="specialist">
                    <?php echo $banner_slider_item['banner_sub_heading']; ?>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>
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


<section class="appointment-section appointment-contact appointment-appointment">
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

                <div class="additional-right-row">
                    <div class="left-row">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.876" height="43.743"
                                viewBox="0 0 30.876 43.743">
                                <path id="Icon_material-location-on" data-name="Icon material-location-on"
                                    d="M21.938,3A14.427,14.427,0,0,0,7.5,17.438c0,10.828,14.438,26.813,14.438,26.813S36.376,28.266,36.376,17.438A14.427,14.427,0,0,0,21.938,3Zm0,19.594a5.156,5.156,0,1,1,5.156-5.156A5.158,5.158,0,0,1,21.938,22.594Z"
                                    transform="translate(-6.5 -2)" fill="none" stroke="#1b5c8c" stroke-width="2"></path>
                            </svg>

                        </div>
                        <h3>
                            <?php echo $location_heading; ?>
                        </h3>
                        <p>
                            <?php echo $location_place; ?>
                        </p>
                    </div>

                    <div class="left-row right-row">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                <g id="Group_294" data-name="Group 294" transform="translate(-476.089 -1529.537)">
                                    <g id="Ellipse_18" data-name="Ellipse 18" transform="translate(476.089 1529.537)"
                                        fill="#fff" stroke="#1b5c8c" stroke-width="2">
                                        <circle cx="21" cy="21" r="21" stroke="none" />
                                        <circle cx="21" cy="21" r="20" fill="none" />
                                    </g>
                                    <line id="Line_33" data-name="Line 33" x2="9.34" y2="9.34"
                                        transform="translate(497.293 1550.84)" fill="none" stroke="#1b5c8c"
                                        stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_34" data-name="Line 34" y1="10.675"
                                        transform="translate(497.293 1540.166)" fill="none" stroke="#1b5c8c"
                                        stroke-linecap="round" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                        <h3>Hours</h3>
                        <div class="appointment-time-table">

                            <?php foreach ($working_hour_slider as $slider_item): ?>
                                <p>
                                    <?php echo $slider_item['days'] ?>:
                                    <?php echo $slider_item['from_time'] ?> –
                                    <?php echo $slider_item['to_time']; ?>
                                </p>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appointment-right">
                <div class="appointment-right-box">
                    <div class="contact-form">
                        <div class="form-top">
                            <h3>Add your request here!</h3>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="cba3922" title="Appointment Page Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>










<section class="contact-map">
    <div class="map-box">
        <iframe id="iframeid" width="450" height="250" style="border:0" src="<?php echo $map_url; ?>"></iframe>
    </div>
</section>
<?php get_footer(); ?>