<?php
/**
 * Template Name: FAQ Page
 */
get_header(); ?>


<?php
global $post;
$page_id = $post->ID;

$bannerSlider = get_field('banner_slider');

$appointment_heading = get_field('appointment_heading');
$appointment_description = get_field('appointment_description');

$form_heading = get_field('form_heading');

$blogList = get_field('blog_lists');

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
<section class="service-faq">
    <div class="wrapper">
        <div class="service-faq-top">
            <div class="service-faq-top-left">
                <h3>Service</h3>
            </div>
            <div class="service-faq-top-right">
                <div class="resources_search">
                    <input type="text" name="">
                    <button class="search-btn-case-stidies" type="submit">Search</button>
                </div>
            </div>
        </div>

        <div class="service-faq-row">
            <div class="service-faq-left">

                <?php
                $cats = get_terms([
                    'taxonomy' => 'service-category',
                    'hide_empty' => 'false',
                    'orderby' => 'name',
                    'order' => 'DESC',
                ]);
                $active = 'active';
                $cat_cnt = 1;
                ?>
                <ul class="top-tab">
                    <?php foreach ($cats as $cats_item):
                        if ($cat_cnt == 1)
                            $active = 'active';
                        else
                            $active = '';
                        ?>
                        <li class="faq-tab"><a href="javascript:void(0)" class="<?php echo $active; ?>"
                                data-tag="tab_<?php echo $cats_item->term_id; ?>" data-toggle="tab ">
                                <?php echo $cats_item->name; ?>
                            </a></li>
                        <?php $cat_cnt = $cat_cnt + 1; endforeach; ?>
                </ul>
            </div>

            <div class="common-conetnt  service-faq-right">
                <?php
                $cnt = 1;
                foreach ($cats as $cats_item):
                    if ($cnt == 1) {
                        $hide = '';
                    } else {
                        $hide = 'hide';
                    }

                    $argss = array(
                        'post_type' => 'faq',
                        'post_status' => 'publish',
                        'orderby' => 'post',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'service-category',
                                'field' => 'term_id',
                                'terms' => array($cats_item->term_id)
                            )
                        )
                    );
                    $faq_items = new WP_Query($argss);
                    ?>
                    <div class="tab-content  <?php echo $hide; ?>" id="tab_<?php echo $cats_item->term_id; ?>">
                        <h3>
                            <?php echo $cats_item->name; ?>
                        </h3>
                        <ul class="faq-accordion">

                            <?php $cnt3 = 1;
                            while ($faq_items->have_posts()):
                                $faq_items->the_post(); ?>
                                <li class="active" style="display:block;">
                                    <a class="toggle" href=#> <?php echo get_the_title(); ?></a>
                                    <p class="inner <?php if ($cnt3 == 1)
                                        echo 'show' ?>" <?php if ($cnt3 == 1)
                                        echo 'style="display:block;"' ?>>
                                        <?php echo get_the_content(); ?>
                                    </p>

                                </li>
                                <?php $cnt3++; endwhile; ?>


                        </ul>
                    </div>
                    <?php
                    $cnt = $cnt + 1;
                endforeach; ?>
            </div>
        </div>
    </div>

</section>


<section class="resources-section">
    <div class="wrapper">

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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="resources-right">
                            <div class="resources-img">
                                <img src="<?php echo get_the_post_thumbnail_url($blog_id, 'large-small'); ?>"
                                    alt="platform Image">
                            </div>
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
                            <h3>
                                <?php echo $form_heading; ?>
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