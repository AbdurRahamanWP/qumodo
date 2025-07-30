<?php 
 /**
  * Display page banner 
  */
$show_banner = qumodo_opt('page_banner_toggle', 'show');
$show_banner_in_page = qumodo_page_meta('is_banner', get_the_ID(), 1);

$banner_url = qumodo_opt('page_banner_img_upload');
$banner_url_page= qumodo_page_meta('banner_background_image', get_the_ID());  

$how_title = qumodo_opt('page_banner_title', 'show');
$show_breadcrumbs = qumodo_opt('page_banner_breadcrumb', 'show');

$banner_background_url = QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url_page && $banner_url_page != ''){
    $banner_background_url = $banner_url_page;
}elseif($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
if($show_banner == 'show') :
 if($show_banner_in_page):
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>       
        <div class="container">
            <div class="breadcrumb_content text-center">
               <?php if($how_title == 'show') : ?>
                <h1 class="page_title"><?php single_post_title(); ?></h1>
               <?php endif;
               if($show_breadcrumbs  == 'show') : 
                qumodo_breadcrumbs();
               endif; ?> 
            </div>
        </div>
</div>
<?php 
endif;
endif;
