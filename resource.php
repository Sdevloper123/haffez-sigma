<?php
/**
 * Template Name: Resource Page
 */
get_header();
$page_id = get_the_ID();
?>

<?php $banner_slider = get_field('banner_slider');
if (isset($banner_slider) && !empty($banner_slider)) {
	foreach ($banner_slider as $slider) {
		?>
		<div class="home_banner_section inner-banner" style="background-image: url('<?php echo $slider['banner_images']; ?>');">
			<div class="wrapper">
				<div class="banner_content">
					<h1>
						<?php echo $slider['banner_heading']; ?>
					</h1>
					<div class="specialist">
						<?php echo $slider['banner_sub_heading']; ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
} ?>

<section class="blod_main">
	<div class="wrapper">
		<div class="blog_title">
			<h2 class="common-heading">
				<?php echo get_field('blog_heading', $page_id); ?>
			</h2>
		</div>
		<div class="blog_inner">
			<form class="mobile_search">
				<div class="resources_search">
					<input type="text" name="search">
					<button class="search-btn-case-stidies" type="submit">Search</button>
				</div>
			</form>
			<div class="blog_left">
				<h3> Topics </h3>
				<ul>
					<?php
					//$categories = get_categories();
					$categories = get_categories(
						array(
						  'taxonomy' => 'category',
						  'parent' => 2
						)
					  );
               	foreach ($categories as $category) {
						?>
						<li> 
							<a class="blog_cat" data-id="<?php echo $category->term_id; ?>" href="javascript:void(0);">
								<?php echo $category->name; ?>
							</a> 
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="blog_right">
				
					<div class="resources_search">
						<input type="text" name="search" id="search">
						 <button class="search-btn-case-stidies search"  type="submit">Search</button>
					</div>
				<!-- <div class="blog_list_part" id="blog_list">
				</div> -->
				<div class="blog_list_part blog-load-list">
				<?php
            $tax_query_array = [];
			$tax_query_array[] = array('taxonomy' => 'category', 'field' => 'id', 'terms' =>2);
			//$tax_query_array['relation']='AND';
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' =>2,
				'orderby' => 'modified',
				'order' => 'DESC',
				'tax_query' => $tax_query_array,
			);
            $resource_item = new WP_Query($args);
            if ($resource_item->have_posts()):
                global $resource_item;
				$max_num_page = $resource_item->max_num_pages;
                ?>
            
                <?php while ($resource_item->have_posts()):
                    $resource_item->the_post(); 
					$permalink = get_the_permalink();
					$blog_id = get_the_ID();
					$break_title=get_the_title();
					$break_content=get_the_content();
					$categories_name = get_the_category($blog_id);
					if ( has_post_thumbnail()  ) {
						  $image_path = wp_get_attachment_url( get_post_thumbnail_id($blog_id)); 
					}
					?>
                   
				   <div class="innovation_news_deta">
							<div class="innovation_news_img">
									<img src="<?php echo $image_path; ?>" alt="">
									<span> <?php echo $categories_name[0]->name; ?></span>
							</div>
							<div class="innovation_news_deta_iner common-conetnt">
								<h2><?php echo $break_title; ?></h2>
								<h3><?php echo wp_date( __( 'jS \o\f F Y', 'textdomain' ) ); ?>/
								<?php echo get_the_author($blog_id); ?></h3>
								<p><?php echo mb_strimwidth(strip_tags($break_content), 0, 220, '...'); ?></p>
								<a href="<?php echo $permalink; ?>"> Read More </a>
							</div>
		   				</div>

						   <?php $counter++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>


				</div>
				<?php if ($resource_item->found_posts >4) { ?>
    <div class="load_more  common-btn load_more_btn ">
        <button class="loadmore-blog     theme-btn-primary" id="blog-load-more">Load More</button>
    </div>
    <?php } ?>
    <input type="hidden" class="main_max_num_page" value="<?php echo $max_num_page; ?>">
    <input type="hidden" class="get_site_url" value="<?php echo get_site_url(); ?>">
			</div>
		</div>
	</div>
	<!-- <a href="javascript:void(0);" class="load-more">load</a> -->
</section>





<section class="blod_main">
	<div class="wrapper">
		<div class="blog_title">
			<h2 class="common-heading">
			<?php echo get_field('news_heading', $page_id); ?>
			</h2>
		</div>
		<div class="blog_inner">
			<form class="mobile_search">
				<div class="resources_search">
					<input type="text" name="search">
					<button class="search-btn-case-stidies" type="submit">Search</button>
				</div>
			</form>
			<div class="blog_left">
				<h3> Topics </h3>
				<ul>
					<?php
					//$categories = get_categories();
					$categories = get_categories(
						array(
						  'taxonomy' => 'news-category',
						  'parent' => 0
						)
					  );
               	foreach ($categories as $category) {
						?>
						<li> 
							<a class="news_cat" data-id="<?php echo $category->term_id; ?>" href="javascript:void(0);">
								<?php echo $category->name; ?>
							</a> 
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="blog_right">
				
					<div class="resources_search">
						<input type="text" name="search" id="search_news">
						 <button class="search-btn-case-stidies search_news"  type="submit">Search</button>
					</div>
				<!-- <div class="blog_list_part" id="blog_list">
				</div> -->
				<div class="blog_list_part blog-load-list_news">
				<?php
            //$tax_query_array1 = [];
			//$tax_query_array1[] = array('taxonomy' => 'news-category', 'field' => 'id', 'terms' =>0);
			//$tax_query_array['relation']='AND';
			$args = array(
				'post_type' => 'news',
				'post_status' => 'publish',
				'posts_per_page' =>2,
				'orderby' => 'modified',
				'order' => 'DESC',
			//	'tax_query' => $tax_query_array1,
			);
            $resource_item = new WP_Query($args);

			
            if ($resource_item->have_posts()):
                global $resource_item;
				$max_num_page = $resource_item->max_num_pages;
                ?>
            
                <?php while ($resource_item->have_posts()):
                    $resource_item->the_post(); 
					$permalink = get_the_permalink();
					$blog_id = get_the_ID();
					$break_title=get_the_title();
					$break_content=get_the_content();
					$categories_name = get_the_category($blog_id);
					if ( has_post_thumbnail()  ) {
						  $image_path = wp_get_attachment_url( get_post_thumbnail_id($blog_id)); 
					}
					?>
                   
				   <div class="innovation_news_deta">
							<div class="innovation_news_img">
									<img src="<?php echo $image_path; ?>" alt="">
									<span> <?php echo $categories_name[0]->name; ?></span>
							</div>
							<div class="innovation_news_deta_iner common-conetnt">
								<h2><?php echo $break_title; ?></h2>
								<h3><?php echo wp_date( __( 'jS \o\f F Y', 'textdomain' ) ); ?>/
								<?php echo get_the_author($blog_id); ?></h3>
								<p><?php echo mb_strimwidth(strip_tags($break_content), 0, 220, '...'); ?></p>
								<a href="<?php echo $permalink; ?>"> Read More </a>
							</div>
		   				</div>

						   <?php $counter++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>


				</div>
				<?php if ($resource_item->found_posts >2) { ?>
    <div class="load_more_news  common-btn load_more_btn_news ">
        <button class="loadmore-blog     theme-btn-primary" id="blog-load-more_news">Load More</button>
    </div>
    <?php } ?>
    <input type="hidden" class="main_max_num_page_news" value="<?php echo $max_num_page; ?>">
    <input type="hidden" class="get_site_url_news" value="<?php echo get_site_url(); ?>">
			</div>
		</div>
	</div>
	<!-- <a href="javascript:void(0);" class="load-more">load</a> -->
</section>

<!-- <section class="blod_main">
	<div class="wrapper">
		<div class="blog_title">
			<h2 class="common-heading">
			<?php echo get_field('news_heading', $page_id); ?>
			</h2>
		</div>
		<div class="blog_inner">
			<form class="mobile_search">
				<div class="resources_search">
					<input type="text" name="">
					<button class="search-btn-case-stidies" type="submit">Search</button>
				</div>
			</form>
			<div class="blog_left">
				<h3> Topics </h3>
				<ul>
					<?php
					$categories_news = get_terms('news-category'); 
               	foreach ($categories_news as $category) {
						?>
						<li> 
							<a class="news_cat" data-id="<?php echo $category->term_id; ?>" href="javascript:void(0);">
								<?php echo $category->name; ?>
							</a> 
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="blog_right">
				
					<div class="resources_search">
						<input type="text" name="search" id="new_search">
						 <button class="search-btn-case-stidies news_search"  type="submit">Search</button>
					</div>
				<div class="blog_list_part" id="news_list">
				</div>
			</div>
		</div>
	</div>
</section> -->



<!-- <section class="blod_main blog_news">
	<div class="wrapper">
		<div class="blog_title">
			<h2 class="common-heading">
				<?php echo get_field('news_heading', $page_id); ?>
			</h2>
		</div>
		<div class="blog_inner">
			<form class="mobile_search">
				<div class="resources_search">
					<input type="text" name="">
					<button class="search-btn-case-stidies" type="submit">Search</button>
				</div>
			</form>
			<?php
			$args = array(
				'taxonomy' => 'news-category',
				'orderby' => 'name',
				'order' => 'ASC'
			);
			$cats = get_categories($args);
			?>
			<div class="blog_left">
				<h3> Topics </h3>
				<ul>
					<?php
					foreach ($cats as $cat) { ?>
						<li> <a href="#!">
								<?php echo $cat->name; ?>
							</a> </li>
					<?php } ?>
				</ul>
			</div>
			<div class="blog_right">
				<form>
					<div class="resources_search">
						<input type="text" name="">
						<button class="search-btn-case-stidies" type="submit">Search</button>
					</div>
				</form>
				<div class="blog_list_part">
					<?php
					$news = array(
						'posts_per_page' => 4,
						'post_type' => 'news',
						'post_status' => 'publish',
						'order' => 'DESC',
					);
					$news_query = new WP_Query($news);
					while ($news_query->have_posts()) {
						$news_query->the_post();
						?>
						<div class="innovation_news_deta">
							<div class="innovation_news_img">
								<?php if (has_post_thumbnail($post->ID)):
									$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
									?>
									<img src="<?php echo $image[0]; ?>" alt="">
								<?php endif; ?>
								<span> Recommend </span>
							</div>
							<div class="innovation_news_deta_iner common-conetnt">
								<h2>
									<?php echo get_the_title(); ?>
								</h2>
								<h3> 20th of Dec 2023 / Lorem ipsum </h3>
								<p>
									<?php echo get_the_content(); ?>
								</p>
								<a href="<?php echo get_the_permalink(); ?>" tabindex="0"> Read More </a>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="load_more">
					<a href="#!"> Load More </a>
				</div>
			</div>
		</div>
	</div>
</section>  -->

<section class="training-section traning_service">
	<div class="wrapper">
		<div class="training-row">
			<div class="training-left">
				<div class="training-left-box">
					<h3>
						<?php echo get_field('upcoming_events_heading'); ?>
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
					<?php echo get_field('upcoming_events_heading'); ?>
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

<section class="appointment-section blog_apoitment">
	<div class="wrapper">
		<div class="appointment-row">
			<div class="common-conetnt appointment-left">
				<div class="common-heading">
					<h2 class="common-heading">
						<?php echo get_field('appointment_heading', $page_id); ?>
					</h2>
				</div>
				<p class="common-conetnt">
					<?php echo get_field('appointment_description', $page_id); ?>
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
<!-- <input type="hidden" id="ajaxurl" value="<?php echo admin_url('admin-ajax.php');?>">-->
<input type="hidden" id="cat_id" value="">

<?php get_footer(); ?>



<script>
$(document).ready(function() {
    let currentPage = 1;
    var load_more = false;
    var max_num_page = $(".main_max_num_page").val();
    var searchVal = '';
    var catid = 2;
    
    function load_job() {
        var get_site_url = $(".get_site_url").val();
		var catid = $("#cat_id").val();
        if (!load_more) {
            currentPage = 1;
        }
        $.ajax({
            type: 'POST',
            url: get_site_url + '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'blogcategory_load_more',
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


	$(".blog_cat").click(function(){
    	var cat_id = $(this).attr("data-id");
		$("#cat_id").val(cat_id);
		$("#search").val(' ');
		searchVal = $("#search").val();
		$("#blog-load-list").empty();
		load_job();
  	});


    $('.search').on('click', function() {
        // searchVal = $("#search").val();
        // load_more = false;
        // $("#blog-load-list").empty();

		var cat_id = $(this).attr("data-id");
		searchVal = $("#search").val();
		$("#cat_id").val('');
		
		
		$("#blog-load-list").empty();


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


//// NEWS

let currentPage_news = 1;
    var load_more_news = false;
    var max_num_page_news = $(".main_max_num_page_news").val();
    var searchVal_news= '';
    var catid_news = 0;
    
    function load_news() {
        var get_site_url_news = $(".get_site_url_news").val();
		var catid_news = $("#cat_id").val();
        if (!load_more_news) {
            currentPage_news = 1;
        }
        $.ajax({
            type: 'POST',
            url: get_site_url_news + '/wp-admin/admin-ajax.php',
            dataType: 'html',
            data: {
                action: 'news_category_load_more',
                cat_id: catid_news,
                paged: currentPage_news,
                search: searchVal_news
            },
            success: function(res) {
                console.log("Ajax response>>>>>", res);
                if (res != "") {
                    $('.load_more_btn_news').show();
                    if (!load_more_news) {
                        $('.blog-load-list_news').empty();
                        $('.blog-load-list_news').html(res);
                    } else {
                        $('.blog-load-list_news').append(res);
                    }
                    var max_num_page_news = $(".max_num_page_news").val();
                    console.log("MaxPage After Response>>>>", max_num_page_news);
                    if (max_num_page_news == 1) {
                        $('.load_more_btn_news').hide();
                    }
                    if (max_num_page_news == currentPage_news) {
                        $(".load_more_btn_news").hide();
                    } //add add
                } else {
                    $('.blog-load-list_news').html('<h3>Post Not Found</h3>');
                    $('.load_more_btn_news').hide();

                }
            }
        });
    }


	$(".news_cat").click(function(){
    	var cat_id = $(this).attr("data-id");
		$("#cat_id").val(cat_id);
		$("#search_news").val('');
		searchVal_news = $("#search_news").val();
		$("#blog-load-list_news").empty();
		load_news();
  	});


    $('.search_news').on('click', function() {

		searchVal_news = $("#search_news").val();
      //  searchVal_news = false

		$("#cat_id").val('');
        $("#blog-load-list_news").empty();
        load_news();
    });
    $(document).on("click", "#blog-load-more_news", function() {
        console.log("Triger load more button >>>");
        load_more_news = true;
        currentPage_news++;
        console.log("Load More max_num_page::", max_num_page_news);
        console.log("Load More currentPage::", currentPage_news);
        load_news();
        if (max_num_page_news == currentPage_news) {
            $(".load_more_btn_news").hide();
        }
    });




});
</script>



<script>















	// jQuery(function($){ 
	// var ajaxurl = $("#ajaxurl").val();
	
	// category=0,
	// page = 1;
	//  pageNumber = 1;
	// function load_blogs(page){
	// 	pageNumber++;
	// 	category =  $("#cat_id").val();
    //     search = $("#search").val();
    // 	var request_data = {
	// 		page: page,
	// 		category: category,
	// 		search : search,
    // 		action: "blogs_list_ajax_action"
	// 	};
	// 	jQuery.ajax({
	// 		type: "POST",
	// 		url: ajaxurl,
	// 		data:request_data,
    //         success: function(data){
	// 			$("#blog_list").append(data);
    //         }
	// 	});
		
	// }
	//load_blogs(1);

	// $(".blog_cat").click(function(){
    // 	var cat_id = $(this).attr("data-id");
	// 	$("#cat_id").val(cat_id);
	// 	$("#blog_list").empty();
	// 	load_blogs(1);
  	// });

	//   $(".search-btn-case-stidies").click(function(){
	// 	$("#blog_list").empty();
   	// 	load_blogs(1);
  	// });
	  

	 // $(".load-more").click(function(){
		//$(document).on('click', '.load-more', function(event) {
    	//var page = $("#max_num_pages").val();
		//alert(page);
		//console.log(page);
		//load_blogs(2);
  	//});




	//   function load_news(page){
	// 	category =  $("#cat_id").val();
    //     search = $("#new_search").val();
    // 	var request_data = {
	// 		page: page,
	// 		category: category,
	// 		search : search,
    // 		action: "news_list_ajax_action"
	// 	};
	// 	jQuery.ajax({
	// 		type: "POST",
	// 		url: ajaxurl,
	// 		data:request_data,
    //         success: function(data){
	// 			$("#news_list").empty();
    //              $("#news_list").html(data);
    //         }
	// 	});
	// }
	// load_news(1);


// 	$(".news_cat").click(function(){
//     	var cat_id = $(this).attr("data-id");
// 		$("#cat_id").val(cat_id);
// 		load_news(1);
//   	});

// 	  $(".news_search").click(function(){
// 		load_news(1);
//   	});
	  
// });

</script>