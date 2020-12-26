<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
*/
get_header(); ?>
<?php $layout = oneline_lite_get_layout(); 
$oneline_plx = get_theme_mod('parallax_opt');
if($oneline_plx =='' || $oneline_plx =='0'){  
$prlx_class = 'parallax-lite';
$prlx_data_center = 'background-position: 50% 0px';
$prlx_top_bottom = 'background-position: 50% -100px;';
}else{
$prlx_class = ''; 
$prlx_data_center = '';
$prlx_top_bottom =''; 
}  ?>
<div class="page-title <?php echo svg_active();?> <?php echo $prlx_class;?>">
<?php echo oneline_lite_page_svg_top_enable(); ?>
<div data-center="<?php echo $prlx_data_center;?>" data-top-bottom="<?php echo $prlx_top_bottom;?>" class="demo-image">
    <div class="overlay-demo"></div>
    <div class="full-fs-caption">
        <div class="caption-container">
        <h2 class="title overtext"><?php _e('Blog','oneline-lite')?></h2>
        </div>
    </div>
</div>
<?php echo oneline_lite_page_svg_bottom_enable(); ?>
<?php echo oneline_lite_page_svg_top_enable(); ?>
</div>
<div id="page" class="clearfix <?php echo $layout; ?> <?php echo svg_active();?>">
<div class="content-wrapper">
<div class="content">
<div class="page-content blog-content">
    <ul class="load_post standard-layout">
        <?php get_template_part('loop', 'blog'); ?>
        <div class="clear"></div>
    </ul>
</div>
</div>
</div>
<?php if ( $layout != 'no-sidebar' ) { ?>
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
<?php } ?>
</div> <!--page class end -->
<div class="clear"></div>
<?php get_footer(); ?>