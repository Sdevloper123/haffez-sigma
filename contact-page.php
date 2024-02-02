<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>


<?php
global $post;
$page_id = $post->ID;

$banner_slider = get_field('banner_slider');

$contact_heading = get_field('contact_heading');
$contact_description = get_field('contact_description');

$information_heading = get_field('information_heading');
$information_description = get_field('information_description');
$doctor_image = get_field('doctor_image');


$location_heading = get_field('location_heading');
$location_place = get_field('location_place');

$working_heading = get_field('hour_heading');
$working_hour_slider = get_field('working_hour_slider');

$map_url = get_field('map_link');
$counter_repeater = get_field('banner_counter_list', 'option', true);


$mobile_number = get_field('mobile_number', 'option');
$address = get_field('addres', 'option');
$email = get_field('email', 'option');
$facebook_link = get_field('facebook_link', 'option', true);
$instagram_link = get_field('instagram_link', 'option', true);
$twitter_link = get_field('twitter_link', 'option', true);
$youtube_link = get_field('youtube_link', 'option', true);

?>

<?php foreach ($banner_slider as $banner_slider_item): ?>
    <div class="home_banner_section inner-banner contact-banner"
        style="background-image: url('<?php echo $banner_slider_item['banner_images']; ?>');">
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


<section class="appointment-section appointment-contact">
    <div class="wrapper">

        <div class="appointment-row">
            <div class="common-conetnt appointment-left">
                <div class="common-heading">
                    <h2 class="common-heading">
                        <?php echo $contact_heading; ?>
                    </h2>
                </div>

                <p class="common-conetnt">
                    <?php echo $contact_description; ?>
                </p>

            </div>
            <div class="appointment-right">
                <div class="appointment-right-box">
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="c37e697" title="Contact Page Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="additional-section">
    <div class="wrapper">
        <div class="additional-row">
            <div class="additional-left">
                <div class="additional-left-img">
                    <img src="<?php echo $doctor_image; ?>" alt="" srcset="">
                </div>
            </div>
            <div class="common-conetnt additional-right">
                <div class="common-heading">
                    <h2 class="common-heading">
                        <?php echo $information_heading; ?>
                    </h2>
                </div>
                <p>
                    <?php echo $information_description; ?>
                </p>

                <div class="additional-right-row">
                    <div class="left-row">
                        <div class="icon-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.876" height="43.743"
                                viewBox="0 0 30.876 43.743">
                                <path id="Icon_material-location-on" data-name="Icon material-location-on"
                                    d="M21.938,3A14.427,14.427,0,0,0,7.5,17.438c0,10.828,14.438,26.813,14.438,26.813S36.376,28.266,36.376,17.438A14.427,14.427,0,0,0,21.938,3Zm0,19.594a5.156,5.156,0,1,1,5.156-5.156A5.158,5.158,0,0,1,21.938,22.594Z"
                                    transform="translate(-6.5 -2)" fill="none" stroke="#1b5c8c" stroke-width="2" />
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
                        <h3>
                            <?php echo $working_heading; ?>
                        </h3>
                        <?php foreach ($working_hour_slider as $slider_item): ?>
                            <p>
                                <?php echo $slider_item['days'] ?>:
                                <?php echo $slider_item['from_time'] ?> –
                                <?php echo $slider_item['to_time']; ?>
                            </p>
                        <?php endforeach; ?>
                    </div>




                </div>
                <ul class="call-icon">
                    <li><a href="<?php echo $email; ?>"><span><svg xmlns="http://www.w3.org/2000/svg" width="36"
                                    height="36" viewBox="0 0 36 36">
                                    <path id="Icon_material-call" data-name="Icon material-call"
                                        d="M11.338,19.214A28.614,28.614,0,0,0,23.786,31.662l4.156-4.156a1.878,1.878,0,0,1,1.927-.453,21.547,21.547,0,0,0,6.743,1.077A1.894,1.894,0,0,1,38.5,30.019v6.592A1.894,1.894,0,0,1,36.611,38.5,32.108,32.108,0,0,1,4.5,6.389,1.894,1.894,0,0,1,6.389,4.5H13a1.894,1.894,0,0,1,1.889,1.889,21.458,21.458,0,0,0,1.077,6.743,1.9,1.9,0,0,1-.472,1.927l-4.156,4.156Z"
                                        transform="translate(-3.5 -3.5)" fill="none" stroke="#1b5c8c"
                                        stroke-width="2" />
                                </svg></span>
                            <?php echo $email; ?>
                        </a></li>
                    <li><a href="http://"><span><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 36 36">
                                    <path id="Icon_material-call" data-name="Icon material-call"
                                        d="M11.338,19.214A28.614,28.614,0,0,0,23.786,31.662l4.156-4.156a1.878,1.878,0,0,1,1.927-.453,21.547,21.547,0,0,0,6.743,1.077A1.894,1.894,0,0,1,38.5,30.019v6.592A1.894,1.894,0,0,1,36.611,38.5,32.108,32.108,0,0,1,4.5,6.389,1.894,1.894,0,0,1,6.389,4.5H13a1.894,1.894,0,0,1,1.889,1.889,21.458,21.458,0,0,0,1.077,6.743,1.9,1.9,0,0,1-.472,1.927l-4.156,4.156Z"
                                        transform="translate(-3.5 -3.5)" fill="none" stroke="#1b5c8c"
                                        stroke-width="2" />
                                </svg>
                            </span>
                            <?php echo $mobile_number; ?>
                        </a></li>
                </ul>



                <ul class="social-media">
                    <li class="social-color">
                        <a href="http://"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                viewBox="0 0 48 48">
                                <g id="Group_299" data-name="Group 299" transform="translate(-1486 -6008)">
                                    <g id="Group_233" data-name="Group 233" transform="translate(1285.354 5615.554)">
                                        <g id="Group_232" data-name="Group 232" transform="translate(212.646 404.446)">
                                            <path id="Union_1" data-name="Union 1"
                                                d="M-4323.106-8671v-10.4c0-2.853-1.083-4.447-3.338-4.447-2.457,0-3.74,1.66-3.74,4.447v10.4h-5.885v-19.819h5.885v2.67a6.911,6.911,0,0,1,5.972-3.272c4.2,0,7.211,2.565,7.211,7.874V-8671Zm-23.3,0v-19.819h6.136V-8671Zm-.59-26.343a3.642,3.642,0,0,1,3.628-3.657,3.642,3.642,0,0,1,3.627,3.657,3.642,3.642,0,0,1-3.627,3.657A3.642,3.642,0,0,1-4347-8697.343Z"
                                                transform="translate(4344 8698)" fill="#1b5c8c" />
                                        </g>
                                    </g>
                                    <rect id="Rectangle_130" data-name="Rectangle 130" width="48" height="48"
                                        transform="translate(1486 6008)" fill="none" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="social-color">
                        <a href="<?php echo $instagram_link; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="48"
                                height="48" viewBox="0 0 48 48">
                                <g id="Group_298" data-name="Group 298" transform="translate(-1385 -6009)">
                                    <g id="Group_235" data-name="Group 235">
                                        <g id="Group_228" data-name="Group 228"
                                            transform="translate(1386.686 5662.861)">
                                            <path id="Subtraction_6" data-name="Subtraction 6"
                                                d="M23.436,30H6.557A6.57,6.57,0,0,1-.005,23.44V6.566A6.57,6.57,0,0,1,6.557,0H23.436A6.57,6.57,0,0,1,30,6.566V23.44A6.57,6.57,0,0,1,23.436,30ZM15,7.957A7.046,7.046,0,1,0,22.044,15,7.055,7.055,0,0,0,15,7.957Zm8.442-3.885a1.675,1.675,0,1,0,1.676,1.676A1.678,1.678,0,0,0,23.439,4.072Z"
                                                transform="translate(7.314 355.138)" fill="#1b5c8c" />
                                        </g>
                                        <rect id="Rectangle_128" data-name="Rectangle 128" width="48" height="48"
                                            transform="translate(1385 6009)" fill="none" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li class="social-color">
                        <a href="<?php echo $youtube_link; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g id="Group_295" data-name="Group 295" transform="translate(-1540 -6009)">
                                    <path id="Path_137" data-name="Path 137"
                                        d="M289.085,407.671a3.863,3.863,0,0,0-2.718-2.736c-2.4-.646-12.01-.646-12.01-.646s-9.612,0-12.009.646a3.862,3.862,0,0,0-2.718,2.736,43.5,43.5,0,0,0,0,14.893,3.862,3.862,0,0,0,2.718,2.736c2.4.646,12.009.646,12.009.646s9.613,0,12.01-.646a3.863,3.863,0,0,0,2.718-2.736,43.5,43.5,0,0,0,0-14.893Zm-17.872,12.018v-9.142l8.035,4.571Z"
                                        transform="translate(1290.212 5618.294)" fill="#1b5c8c" />
                                    <rect id="Rectangle_131" data-name="Rectangle 131" width="48" height="48"
                                        transform="translate(1540 6009)" fill="none" />
                                </g>
                            </svg>

                        </a>
                    </li>

                    <li class="social-color">
                        <a href="<?php echo $twitter_link; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g id="Group_296" data-name="Group 296" transform="translate(-1438 -6008)">
                                    <g id="Group_230" data-name="Group 230" transform="translate(1293.49 5663.081)">
                                        <path id="Path_134" data-name="Path 134"
                                            d="M153.515,378.094a17.413,17.413,0,0,0,9.432,2.764c11.423,0,17.877-9.649,17.488-18.3a12.46,12.46,0,0,0,3.07-3.185,12.235,12.235,0,0,1-3.533.968,6.159,6.159,0,0,0,2.7-3.4,12.323,12.323,0,0,1-3.907,1.494,6.157,6.157,0,0,0-10.485,5.613,17.459,17.459,0,0,1-12.681-6.43,6.161,6.161,0,0,0,1.9,8.217,6.134,6.134,0,0,1-2.788-.77,6.16,6.16,0,0,0,4.935,6.111,6.14,6.14,0,0,1-2.777.1,6.154,6.154,0,0,0,5.747,4.274A12.369,12.369,0,0,1,153.515,378.094Z"
                                            transform="translate(0)" fill="#1b5c8c" stroke="#fff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                    <rect id="Rectangle_129" data-name="Rectangle 129" width="48" height="48"
                                        transform="translate(1438 6008)" fill="none" />
                                </g>
                            </svg>

                        </a>
                    </li>
                    <li class="social-color">
                        <a href="<?php echo $facebook_link; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                <g id="Group_297" data-name="Group 297" transform="translate(-1350 -6071)">
                                    <g id="Group_229" data-name="Group 229" transform="translate(1322.937 5727.58)">
                                        <path id="Path_133" data-name="Path 133"
                                            d="M47.089,382.42h5.816V367.292h4.058l.433-5.065H52.905v-2.884c0-1.194.231-1.666,1.343-1.666H57.4V352.42H53.369c-4.329,0-6.28,1.979-6.28,5.768v4.038H44.063v5.129h3.026Z"
                                            transform="translate(0 0)" fill="#1b5c8c" stroke="none"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                    </g>
                                    <rect id="Rectangle_127" data-name="Rectangle 127" width="48" height="48"
                                        transform="translate(1350 6071)" fill="none" />
                                </g>
                            </svg>


                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </div>

</section>



<section class="contact-map">
    <div class="map-box">
        <iframe id="iframeid" width="450" height="250" style="border:0" src="<?php echo $map_url; ?>"></iframe>

    </div>
</section>

</div>






<?php get_footer(); ?>