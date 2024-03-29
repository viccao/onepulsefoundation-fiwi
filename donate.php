<?php
/**
 * Template Name: Donate
 *
 * @package Smores
 * @since Smores 2.0
 */
?>
    <?php get_template_part('templates/header'); ?>

        <div class="main-wrapper">

        <div class="page-main">

                <section class="donate-main pb-11 pb-md-3 pt-sm-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="donate-hero">

                                    <h2>We will not let hate win.</h2>



                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="">
                    <div class="container">


                        <div class="row">



                            <div class="col-md-5">
                                <h3 class="mt-2 mb-1"><?php the_field('headline');?></h3>

                                <h4 class="text-left mb8">Share this</h4>
                                <ul class="socials shares">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="pop-link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/home?status=<?php the_permalink();?>" class="pop-link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>" class="pop-link" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://plus.google.com/share?url=<?php the_permalink();?>" class="pop-link" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                </ul>




                                <div class="hidden-sm hidden-xs">



                                    <?php the_field('left_column');?>
                                </div>
                                <div class="shirt-cta hidden-sm hidden-xs">
                                    <!--<img src="<?php echo get_template_directory_uri(); ?>/dist/img/shirt.svg">
                                    <a href="https://pulse-orlando-shirts.myshopify.com/collections/onepulse" class="btn shirt-btn mt0 mb8" target="_blank">Get Yours</a>-->
                                    <?php if(is_page('donate')):?>
                                        <img class="mb-1" src="/wp-content/uploads/2017/06/banners-all-1.jpg">

                                        <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_FLIER_PRESS.pdf" class="btn shirt-btn mt0 mb8" target="_blank" download="/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_FLIER_PRESS.pdf">Download 8 1/2' x 11' Flyer Kit</a>
                                        <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_4X8_BANNER_PRESS.pdf" class="btn shirt-btn mt0 mb32" target="_blank" download="/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_4X8_BANNER_PRESS.pdf">Download 4"x 8" Banner Kit</a>
                                        <?php endif;?>
                                </div>
                            </div>



                            <div class="col-md-6 ml-auto pl-0 pr-0 pt-sm-5 pt-sm-16 p-xs-0">
                                <?php if(is_page('donate')):?>

                                <script type="text/javascript" id="bloomerangForm247808"></script>

                                <?php else: the_field('right_column'); endif;?>

                                    <div class="shirt-cta visible-sm visible-xs">
                                        <?php if(is_page('donate')):?>
                                            <img src="/wp-content/uploads/2017/06/banners-all-1.jpg">

                                            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_FLIER_PRESS.pdf" class="btn shirt-btn mt0 mb8" target="_blank" download="/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_FLIER_PRESS.pdf">Download 8 1/2' x 11' Flyer Kit</a>
                                            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_4X8_BANNER_PRESS.pdf" class="btn shirt-btn mt0 mb8" target="_blank" download="/wp-content/uploads/2017/06/We_Will_Not_Let_Hate_Win_4X8_BANNER_PRESS.pdf">Download 4"x 8" Banner Kit</a>
                                            <?php endif;?>
                                    </div>
                            </div>


                        </div>
                    </div>

                </section>




            </div>

            <?php get_template_part('templates/footer'); ?>
