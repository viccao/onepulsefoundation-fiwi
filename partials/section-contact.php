<?php ;?>



<section class="contact-form pb120 hidden-xs">
    <div class="container container-fluid">


        <div class="row">
        <div class="col-md-12">

                <?php if (!$count): ?>
                    <h1><span>Contact onePULSE Foundation</span>Contact Us</h1><?php else:?>
                    <h2><span>Contact onePULSE Foundation</span>Contact Us</h2><?php endif;?>
            </div>


        </div>
        <div class="row">
            <div class="col-md-8">

                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact Form"]');?>

            </div>
            <div class="col-md-4">

                <div class="line mt-xs-32 mb-xs-32"></div>

                <div class="contact-info">
                <h3>onePULSE Foundation</h3>
                <p class="mt0 mb8">PO Box 530036<br>Orlando Fl 32853-0036</p>

                <!--<p class="mt0 mb0"><span>office</span> <a href="tel":><?php the_field('contact_office','options');?></a></p>-->
                    <p class="mt0 mb8"><a class="" href="mailto:info@onePULSEFoundation.org"><b>email</b> info@onePULSEfoundation.org</a></p>
                <p class="mt0 mb16"><a href="tel:407-775-2437"><span>office</span> 407-775-2437</a></p>

                <p class="mt0 mb0"><span>Media Inquiries Only:</span></p>
                <h4 class="mb8">Sara Brady</h4>

                <p class="mt0 mb0"><span>office</span> <a href="tel:407-702-6632">407-702-6632</a></p>
                <p class="mt0 mb8"><span>mobile</span> <a href="tel">407-408-4000</a></p>

                </div>





            </div>
        </div>
    </div>

</section>
