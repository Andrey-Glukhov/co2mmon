<?php
/**
*Template Name: Home Page
*/
get_header(); ?>

<!-- <img id="home_phone-image" src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/screen_one.png" /> -->
<div id="top_video">
    <video id="start_video" preload="metadata" playsinline muted autoplay="autoplay" loop="true">
        <source src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/pexels-cottonbro.mp4" type="video/mp4">
    </video>
</div>

<div class="container-fluid" id="home_opener">
    <div class="row">
        <div class="col-12 home_opener_background home-typed">
            <div id="typed-strings">
                <p>BIKE TO THE FUTURE</p>
            </div>
            <span id="typed"></span>
        </div>
    </div>

    <div class="row home_about">
    
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h2>WHAT IS CO2MMON?</h2>
            <p>CO2MMON is a startup developing a green mobility loyalty app.
                It motivates your employees to use mobility solutions such as urban
                cycling and public transportation. We measure their eco-friendly acts
                and reward them with attractive offers of our partners.
            </p>
            <!-- <div class="learn_more">
                <p>Learn more about how CO2MMON works</p> <a href="http://localhost:8888/co2mmon/wordpress/for-users/">

                    <svg id="arrow_1" data-name="arrow 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15">
                        <defs>
                            <style>
                            .arw-1 {
                                fill: #ffffff;
                            }
                            </style>
                        </defs>
                        <path class="arw-1" d="M21.88,12l-7.52,6.24L15,19l9-7.52L15,4l-.65.76L21.88,11H0v1Z"
                            transform="translate(0 -4)" />
                    </svg></a>
            </div> -->
        </div>
        <div class="col-md-6">
            <img id="home_phone-image"
                src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/screen_one.png" />
        </div>
        <div class="col-md-5 int_phone" >
            <img id="home_phone-image_int" src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/screen_one.png" />
        </div>   
    </div>


    <div class="row white_background">
        <svg id="wave_3" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 845.9 108.26">
            <defs>
                <style>
                .wv-3 {
                    fill: #0587b4;
                }
                </style>
            </defs>
            <path class="wv-3"
                d="M843.89,89.49c-141.08,24.78-241.7,22.91-370.2-4.17C425.64,75.2,335.16,51.75,235.11,34.6,172.42,23.85,61.2,11.21-2,4.16V-1.35h845.9Z"
                transform="translate(2.01 1.35)" />
        </svg>
    </div>
</div>

<!-- news -->

<div class="container-fluid">
    <div class="row justify-content-center white_background">
        <div class="col-md-5 col-sm-9 col-11">
        </div>
        <div class="col-md-5 col-sm-9 col-11">
            <h2>ECO-FRIENDLINESS CAN PAY OFF</h2>
            <p> Protecting the environment requires a lot of effort, which will only benefit in the long run.
                We say no! They have to be rewarded right here and now.
                CO2MMON offers a solution to motivate your employees and convert the long-term benefits of
                environmental friendliness into short-term incentives. </p>
        </div>
        <div class="col-md-5 col-sm-9 col-11">

            <h2>GREENCENTIVIZE YOURSELF</h2>
            <p> How? Gather Greencents with urban cycling or using public transportation.
                The well-deserved Greencents can be redeemed in the shops of our partners
                offering eco-friendly products and services. It means you can decrease your
                CO2-emissions and increase the number of your GCs with purchasing these items.</p>
        </div>
        <div class="col-md-5 col-sm-9 col-11">
        </div>
    </div>
</div>


<!-- news -->
<div class="container-fluid">
    <div class="row white_background">
        <svg id="wave_2" data-name="wave_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 851.27 159.9">
            <defs>
                <style>
                .wv-1 {
                    fill: #79d3a7;
                }
                </style>
            </defs>
            <path class="wv-1"
                d="M847.08,4c-129.87.72-233.77,90.42-362.6,106.81-100.55,12.8-201.48-20-302.82-18.49-67.09,1-125.9,17.44-185.85,47.58v24H847.08Z"
                transform="translate(4.19 -3.97)" />
        </svg>
    </div>

    <div class="row home_about justify-content-center">
        <div class="col-12 news_title">
            <h2>WHO CAN BE THE CUSTOMER OF CO2MMON?</h2>
        </div>

        <div class="col-md-3 col-11  news_item">
            <img src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/companies-02.png" />
            <h3>Companies</h3>
        </div>
        <div class="col-md-3 col-11  news_item">
            <img src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/icons-04.png" />
            <h3>Universities</h3>
        </div>
        <div class="col-md-3 col-11  news_item">
            <img src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/icons-03.png" />
            <h3>Municipalities</h3>
        </div>

        <div class="col-md-7 col-11 news_title">
            <p>Our customers can easily follow the performance of their employees.
                Special type of gamification tools are included in the app to increase
                the motivation if needed.
            </p>
        </div>

        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-md-5 col-sm-11 col-11">
                </div>
                <div class="col-md-5 col-sm-11 col-11">
                    <h3>FREEMIUM VERSION FOR INDIVIDUAL USERS</h3>
                    <p>Everybody can join CO2MMON. We provide a freemium version of our app with
                        limited features to make you feel the benefits of being eco-friendly.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="row white_background">
        <svg id="wave_3" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 845.9 108.26">
            <defs>
                <style>
                .wv-3 {
                    fill: #0587b4;
                }
                </style>
            </defs>
            <path class="wv-3"
                d="M843.89,89.49c-141.08,24.78-241.7,22.91-370.2-4.17C425.64,75.2,335.16,51.75,235.11,34.6,172.42,23.85,61.2,11.21-2,4.16V-1.35h845.9Z"
                transform="translate(2.01 1.35)" />
        </svg>
    </div>

</div>

<!-- news -->

<div class="container-fluid">
    <div class="row justify-content-center white_background">
        <div class="col-12 subscribe_title">
            <h2>STAY TUNED!</h2>
        </div>
        <div class="col-md-7 col-sm-8 col-11 subscribe_body">
            <p> CO2MMON is a pre-seed phase startup.
                Development of the prototype was recently completed.
                The android version is being tested. If you would like to
                participate in the testing of our application and would like to provide
                meaningful feedback, please subscribe below. The first version is scheduled to launch in January 2022.
            </p>
        </div>
        <div class="col-md-7 col-sm-8 col-11">
            <!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
                <form
                    action="https://co2mmon.us5.list-manage.com/subscribe/post?u=923518a5225acfb34aa2b8592&amp;id=600e9638eb"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                    target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">EMAIL ADDRESS <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-FNAME">FIRST NAME</label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-LNAME">LAST NAME</label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                name="b_923518a5225acfb34aa2b8592_600e9638eb" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe"
                                id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
            <script type='text/javascript'>
            (function($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
                fnames[3] = 'ADDRESS';
                ftypes[3] = 'address';
                fnames[4] = 'PHONE';
                ftypes[4] = 'phone';
                /*
                 * Translated default messages for the $ validation plugin.
                 * Locale: HU
                 */
                $.extend($.validator.messages, {
                    required: "Kötelező megadni.",
                    maxlength: $.validator.format("Legfeljebb {0} karakter hosszú legyen."),
                    minlength: $.validator.format("Legalább {0} karakter hosszú legyen."),
                    rangelength: $.validator.format(
                        "Legalább {0} és legfeljebb {1} karakter hosszú legyen."),
                    email: "Érvényes e-mail címnek kell lennie.",
                    url: "Érvényes URL-nek kell lennie.",
                    date: "Dátumnak kell lennie.",
                    number: "Számnak kell lennie.",
                    digits: "Csak számjegyek lehetnek.",
                    equalTo: "Meg kell egyeznie a két értéknek.",
                    range: $.validator.format("{0} és {1} közé kell esnie."),
                    max: $.validator.format("Nem lehet nagyobb, mint {0}."),
                    min: $.validator.format("Nem lehet kisebb, mint {0}."),
                    creditcard: "Érvényes hitelkártyaszámnak kell lennie."
                });
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
            </script>
            <!--End mc_embed_signup-->

        </div>
    </div>
</div>

<?php get_footer(); ?>