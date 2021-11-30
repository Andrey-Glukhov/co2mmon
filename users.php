<?php
/**
*Template Name: Users Page
*/
get_header(); ?>

<div class="container-fluid" id="user_opener">
    <div class="row">
        <div class="col-12 user_opener_background">
        </div>
    </div>
</div>

<div class="container-fluid wave_row">
    <div class="row">
        <div class="col-12 user_wave">
            <img src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/wave-01.png">
        </div>
    </div>

    <?php the_content(); ?>

</div>

<?php get_footer(); ?>