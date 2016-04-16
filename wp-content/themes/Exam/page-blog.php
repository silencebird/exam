
<?php get_header(); ?>
<div class="after-header-img"><img src="<?php echo get_template_directory_uri(); ?>./images/blog-page/header.png" alt=""></div>

<!-- site content -->
<div class="site-content container ">
    <div class="site-content container ">

            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                    <h1 class="page-title"><?php echo get_the_content();?><h1>
                <?php endwhile;
            else:
                ?>
                <p>
                    <?php __('No content found' , 'theme_text_domain'); ?>
                </p>

            <?php endif; ?>
        </div>


    </div>


    <!--main-column-->
    <div class="main-column ">
        <div class="blog-page">
            <?php $query = new WP_Query(
                array(
                    'category_name' => 'blog',
                    'posts_per_page' => '-1'
                )
            );  ?>

            <div class="clearfix container">
                <?php  if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <img src="<?php echo get_template_directory_uri(); ?>./images/blog-page/users/1.png" alt="">
                        </div>
                        <div class="blog-post col-xs-10 col-sm-10 col-md-10 col-lg-10">

                            <h1 class="pages-title">
                                <?php echo get_the_title(); ?>
                            </h1>
                            <p class="post-info">
                                Posted by  <?php the_author();?>, <?php the_time('F j Y '); ?> </a>
                            </p>

                            <div class="blog-thumbnails">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
                            </div>
                            <p class="blog-content blog-content"> <?php echo get_the_excerpt();?> </p>
                            <div class="social">
                                <p>SHARE: </p>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    <?php }
                }?>

            </div>
        </div>
        <!--About Us-->>
    </div>
    <!--main-column-->

</div>
<!--site content-->
<?php get_footer();?>