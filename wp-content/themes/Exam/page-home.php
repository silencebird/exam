
<?php get_header(); ?>

<!--First flexslider-->
        <?php $query = new WP_Query(
            array(
                'category_name' => 'slider-head'
//                'posts_per_page' =>
            )
        );
        ?>
        <div class="flexslider clearfix " id="flexslider1">
        <ul class="slides clearfix ">

            <?php  if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                            <li class="flex-item" >
                                <div class="thumbnail-container" "> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" /></div>
                                <div class="flex-content">
                                     <h1 class="flex-caption">
                                        <?php the_title(); ?>
                                     </h1>
                                    <p class="flex-text">
                                        <?php echo get_the_content();?>
                                    </p>
                                </div>

                            </li>
                        <?php } ?>

              <?php }  }
                        else {  ?>

            <p>
                <?php __('No content found' , 'theme_text_domain'); ?>
            </p>

        <?php } ?>
        </ul>
    </div>
<!--First flexslider-->


<!-- site content -->
<div class="site-content home-page">
    <!--main-column-->
    <div class="main-column">

<!--About Us-->
<div class="about-us">
                <?php $query = new WP_Query(
                    array(
                        'category_name' => 'about-us',
                        'posts_per_page' => '-1'
                    )
                );  ?>

                <div class="clearfix container">
                    <?php  if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <div class="about-us-post ">
                                 <h1 class="pages-title col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <?php echo get_the_title(get_page_by_path('about-us')); ?>
                                </h1>
                                <p class="about-us-content home-content col-xs-12 col-sm-6 col-md-6 col-lg-6"> <?php echo get_the_content();?> </p>

                            </div>
                        <?php }
                    }?>

                </div>
</div>
<!--About Us-->



<!--Servces-->
        <div class="services clearfix">
            <div class="container">
                <h1 class="pages-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php echo get_the_title(get_page_by_path('services')); ?>
                </h1>
                <ul>
                <?php $query = new WP_Query(
                    array(
                        'category_name' => 'services',
                        'posts_per_page' => '4'
                    )
                );  ?>

                <div class="clearfix services">
                    <?php  if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <li class="servises-post col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="services-icon col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
                                </div>
                                <div class="services-content col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <h1 class="post-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <?php echo get_the_title(); ?>
                                    </h1>
                                    <p class="about-us-content home-contents"> <?php echo get_the_content();?> </p>
                                </div>

                            </li>
                        <?php }
                    }?>

                </div>
                </ul>
            </div>
</div>
<!--Servces-->

<!--Clients-->
        <div class="clients clearfix">
            <div class="container">
                <h1 class="pages-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php echo get_the_title(get_page_by_path('clients')); ?>
                </h1>
                <ul>
                    <?php $query = new WP_Query(
                        array(
                            'category_name' => 'clients',
                            'posts_per_page' => '3'
                        )
                    );  ?>

                    <div class="clearfix ">
                        <?php  if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                ?>
                                <li class="servises-post col-xs-6 col-sm-4 col-md-4 col-lg-4 clearfix">
                                    <div class="services-content clearfix">
                                        <p class="about-us-content home-contents"> <?php echo get_the_content();?> </p>
                                    </div>
                                    <div class="client-title clear clearfix">
                                        <div class="client-thumbnails col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
                                        </div>
                                        <h1 class="post-title col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <?php echo get_the_title(); ?>
                                        </h1>

                                    </div>

                                </li>
                            <?php }
                        }?>

                    </div>
                </ul>
            </div>
        </div>

<!--Clients-->

<!--News-->
        <div class="news clearfix">
            <div class="container">
                <h1 class="pages-title col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php echo get_the_title(get_page_by_path('news')); ?>
                </h1>
                <ul>
                    <?php $query = new WP_Query(
                        array(
                            'category_name' => 'news',
                            'posts_per_page' => '3'
                        )
                    );  ?>

                    <div class="clearfix">
                        <?php $i=0; if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                $i++; ?>
                                <?php if ($i == 1){?>
                                 <li class="first-news-post col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
                                    <div class="date-column col-xs-3 col-sm-3 col-md-3 col-lg-3 clearfix">
                                        <h2  class="clear date-news"><?php the_time('d'); ?></h2>
                                        <p class="clear month-year-news"><?php the_time( 'M-Y'); ?></p>
                                    </div>
                                    <div class="news-column col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                            <div class="news-thumbnails ">
                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" />
                                            </div>
                                            <h1 class="post-title news-post-title clear">
                                                 <?php echo get_the_title(); ?>
                                             </h1>
                                    <div class="news-content clearfix">
                                        <p class="news-content home-contents"> <?php echo get_the_excerpt();?> </p>
                                    </div>

                                <?php }

                                 else{ ?>
                                <li class="news-post col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">

                                    <div class="news-title clear">
                                        <h1 class="post-title">
                                            <?php echo get_the_title(); ?>
                                        </h1>

                                        <div class="news-date">
                                            <?php the_date('d - M - Y', '<h2>', '</h2>'); ?>
                                        </div>

                                        <div class="news-content clearfix">
                                            <p class="news-content home-contents"> <?php echo get_the_excerpt();?> </p>
                                        </div>

                                    </div>

                                </li>
                            <?php } }
                        }?>

                    </div>
                </ul>
            </div>
        </div>
<!--News-->


<!--Partners-->
        <div class="partners clearfix">
            <div class="container clearfix">
                <h1 class="pages-title  ">
                    <?php echo get_the_title(get_page_by_path('partners')); ?>
                </h1>

        <!--Second flexslider-->
            <?php $query = new WP_Query(
                array(
                    'category_name' => 'partners',
                    'posts_per_page' => '-1'
                )
            );  ?>

    <!--        <h2 class="flexslider2-title"><a href="--><?php //echo  esc_url(get_permalink(get_page_by_path('products'))); ?><!--"> --><?php //echo (get_the_title(get_page_by_path('products'))); ?><!-- </a></h2>-->
            <div class="flexslider clearfix" id="flexslider2">
                <ul class="slides clearfix">

                    <?php  if ( $query->have_posts() ) {?>



                        <?php while ( $query->have_posts() ) {
                            $query->the_post();
                            ?>
                            <?php if ( has_post_thumbnail() ) { ?>
                                <li class="flex2-item">
    <!--                                <a class="thumbnail-container" href="--><?php //the_permalink(); ?><!--"> <img src="--><?php //echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?><!--" /></a>-->
                                    <?php the_post_thumbnail('thumbnail');?>
                                </li>
                            <?php } ?>

                        <?php }  }
                    else {  ?>

                        <p>
                            <?php __('No content found' , 'theme_text_domain'); ?>
                        </p>

                    <?php } ?>
                </ul>
            </div>
                 </div>
        </div>
        <!--Second flexslider-->
<!--partners-->



    </div>
    <!--main-column-->

</div>
<!--site content-->
<?php get_footer();?>