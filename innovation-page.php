<?php

/**
 * Template Name: Innovation Page
 */
get_header(); ?>
<?php
// global $post;
// $page_id = $post->ID;
$service_banner_sliders = get_field('banner_slider');
$counter_repeater = get_field('banner_counter_list', 'option', true);


$appointment_heading = get_field('appointment_heading');
$appointment_form_heading = get_field('appointment_form_heading');
$appointment_description = get_field('appointment_description');

$innovation_heading = get_field('innovation_heading');
$news_heading = get_field('news_heading');
?>

<!-- Banner Section Start -->
<?php foreach ($service_banner_sliders as $service_banner_item) : ?>

    <!-- Banner Section End-->
    <div class="home_banner_section inner-banner" style="background-image: url('<?php echo $service_banner_item['banner_images']['url']; ?>">
        <div class="wrapper">
            <div class="banner_content">
                <h1> <?php echo $service_banner_item['banner_heading']; ?></h1>
                <div class="specialist"> <?php echo $service_banner_item['banner_sub_heading']; ?> </div>
                <!-- <a href="<?php echo $service_banner_item['banner_button_link']; ?>" class="theme-btn-primary-outline"> <?php echo $service_banner_item['banner_button_text']; ?></a> -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<section class="counter_data_section">
    <div class="counter_data">
        <ul>
            <?php foreach ($counter_repeater as $counter) : ?>

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

<section class="innovation_hafeez" id="innovation-right-main">


    <?php
    $catid = 4;
    $tax_query_array[] = array('taxonomy' => 'category', 'field' => 'id', 'terms' => $catid);
    //$tax_query_array['relation']='AND';
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'modified',
        'order' => 'DESC',
        'tax_query' => $tax_query_array,
    );
    $loop = new WP_Query($args);
    $max_num_page = $loop->max_num_pages;

    ?>
    <input id="query-vars" type="hidden" value='<?php echo (json_encode($loop->query_vars)); ?>'>

    <input id="max-num-pages" type="hidden" value="<?php echo ($loop->max_num_pages); ?>">

    <input id="current-page" type="hidden" value="1">
    <?php
    if ($loop->have_posts()) :

        /* Start the Loop */
        $innovations_count = 1;
        while ($loop->have_posts()) :    $loop->the_post();
            $innovations_video_url = get_field('innovations_video_url');
            $innovations_video_thumnail = get_field('innovations_video_thumnail'); ?>
            <div class="innovation_hafeez-inner">
         
                <div class="innovation_hafeez-left">
                <?php if ($innovations_count == 1) : ?>
                    <div class="innovation-title">
                        <h2 class="common-heading"> <?php echo $innovation_heading; ?> </h2>
                    </div>
                <?php endif; ?>
                    <div class="innovation_hafeez-left_deta common-conetnt">
                        <h3><?php echo get_the_title($post->ID); ?> </h3>
                        <p> <?php $content = get_post_field('post_content',  $post->ID);
                            $trimmed_content = wp_trim_words($content, 60, '...');
                            echo $trimmed_content; ?>
                        </p>
                        <div class="btn_inovation">
                            <a href="#!"> Know More </a>
                            <a href="#!"> Download </a>
                        </div>
                    </div>
                </div>

                <div class="innovation_hafeez-right">
                    <div class="cover">
                        <iframe controls="" class="video" width="420" height="100%" src="<?php echo $innovations_video_url; ?>">
                        </iframe>
                        <div class="video-btn play_bnt">
                            <a href="javascript:void(0)" tabindex="0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="94.462" height="94.462" viewBox="0 0 94.462 94.462">
                                    <path id="Icon_material-play-circle-outline" data-name="Icon material-play-circle-outline" d="M39.585,69.31,67.024,48.731,39.585,28.152ZM48.731,3A45.731,45.731,0,1,0,94.462,48.731,45.748,45.748,0,0,0,48.731,3Z" transform="translate(-1.5 -1.5)" fill="none" stroke="--theme-white-color:" stroke-width="3"></path>
                                </svg>
                            </a>
                        </div>
                        <img class="thumb" src="<?php echo $innovations_video_thumnail; ?>" alt="" loading="lazy" style="max-width: 100%; height: auto;">
                    </div>
                </div>


            </div>

    <?php $innovations_count++;
        endwhile;
    endif; ?>

</section>

<?php if ($loop->max_num_pages > 1) { ?>
    <div class="load_more innovation-loadmore-wapper">
        <a href="javascript:void(0)" class="innovation-loadmore"> Load More </a>
    </div>
<?php } ?>

<?php
$parent_blog_cat = 3;
$sub_cat = array('taxonomy' => 'category', 'hide_empty' => false, 'parent' => $parent_blog_cat, 'exclude' => 1);
$blog_child_cats = get_terms($sub_cat);
?>

<section class="innovation_news">
    <div class="wrapper">

        <div class="innovation_news_up">
            <div class="innovation_news-title">
                <h2 class="common-heading"> <?php echo $news_heading; ?> </h2>
            </div>
            <div class="innovation_news_select">
                <select class="blog_cat_select">

                    <option value="3">Topics</option>
                    <?php foreach ($blog_child_cats as $blog_child_cat) { ?>
                        <option value="<?php echo $blog_child_cat->term_id; ?>">
                            <?php echo $blog_child_cat->name; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="innovation_bottom innovation_slider blog-load-list">
            <?php
            if (isset($_POST['catid'])) {
                $catid = $_POST['catid'];
            } else {
                $catid = 3;
            }
            $tax_query_array = [];
            $tax_query_array[] = array('taxonomy' => 'category', 'field' => 'id', 'terms' => $catid);
            //$tax_query_array['relation']='AND';
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'orderby' => 'modified',
                'order' => 'DESC',
                'tax_query' => $tax_query_array,
            );
            $loop = new WP_Query($args);
            $max_num_page = $loop->max_num_pages;

            if ($loop->have_posts()) :

                /* Start the Loop */
                while ($loop->have_posts()) :    $loop->the_post();
                    $innovations_video_url = get_field('innovations_video_url');
                    $innovations_video_thumnail = get_field('innovations_video_thumnail');
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'thumbnail');
                    $author_id = get_post_field('post_author', $post->ID);
                    $display_name = get_the_author_meta('display_name', $author_id); ?>
                    <div class="item">
                        <div class="innovation_news_deta">
                            <div class="innovation_news_img"> <img src="<?php echo $url; ?>" alt=""> </div>
                            <div class="innovation_news_deta_iner common-conetnt">
                                <h2><?php echo get_the_title($post->ID); ?></h2>
                                <h3> <?php echo wp_date(__('jS \o\f M Y', 'textdomain')); ?> / <?php
                                                                                                echo $display_name; ?></h3>

                                <p> <?php $content = get_post_field('post_content',  $post->ID);
                                    $trimmed_content = wp_trim_words($content, 30, '...');
                                    echo $trimmed_content; ?>
                                </p>

                                <a href="#!"> Read More </a>
                            </div>

                        </div>
                    </div>


            <?php endwhile;
            endif; ?>

        </div>
        <input type="hidden" class="main_max_num_page" value="<?php echo $max_num_page; ?>">
        <input type="hidden" class="get_site_url" value="<?php echo get_site_url(); ?>">

    </div>
</section>




<section class="appointment-section appointment-about">
    <div class="wrapper">

        <div class="appointment-row">
            <div class="common-conetnt appointment-left">
                <div class="common-heading">
                    <h2 class="common-heading"><?php echo $appointment_heading; ?></h2>


                </div>
                <p class="common-conetnt"><?php echo $appointment_description; ?></p>
            </div>
            <div class="appointment-right">
                <div class="appointment-right-box">
                    <div class="contact-form">
                        <div class="form-top">
                            <h3> <?php echo $appointment_form_heading; ?></h3>
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
<script>
    $(document).ready(function() {
        let currentPage = 1;
        var load_more = false;
        var max_num_page = $(".main_max_num_page").val();
        var searchVal = '';
        var catid = 3;

        function load_job() {
            var get_site_url = $(".get_site_url").val();
            if (!load_more) {
                currentPage = 1;
            }
            $.ajax({
                type: 'POST',
                url: get_site_url + '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                    action: 'newcategory_load_more',
                    cat_id: catid,
                    paged: currentPage,
                    search: searchVal
                },
                success: function(res) {
                    console.log("Ajax response>>>>>", res);
                    if (res != "") {
                        $('.load_more_btn').show();
                        if (!load_more) {
                            $('.blog-load-list').empty();
                            $('.blog-load-list').html(res);
                        } else {
                            $('.blog-load-list').append(res);
                        }
                        var max_num_page = $(".max_num_page").val();
                        console.log("MaxPage After Response>>>>", max_num_page);
                        if (max_num_page == 1) {
                            $('.load_more_btn').hide();
                        }
                        if (max_num_page == currentPage) {
                            $(".load_more_btn").hide();
                        } //add add
                    } else {
                        $('.blog-load-list').html('<h3>Post Not Found</h3>');
                        $('.load_more_btn').hide();

                    }
                }
            });
        }
        $('.blog_cat_select').on('change', function() {
            console.log("Category Change Trigger>>>>>");
            load_more = false;
            catid = $(this).val();
            load_job();
        });
        $('.search_post').on('keyup', function() {
            searchVal = $(".search_post").val();
            load_more = false;
            console.log("KeyUp search button >>>");
            load_job();
        });
        $(document).on("click", "#blog-load-more", function() {
            console.log("Triger load more button >>>");
            load_more = true;
            currentPage++;
            console.log("Load More max_num_page::", max_num_page);
            console.log("Load More currentPage::", currentPage);
            load_job();
            if (max_num_page == currentPage) {
                $(".load_more_btn").hide();
            }
        });
    });
</script>
<!-- <script src="https://devproject.in/dev/dr_hafeez/wp-content/themes/dr_hafeez/assets/js/innovation.js"></script> -->