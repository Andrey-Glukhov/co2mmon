<?php
/**
*Template Name: Home Page
*/
get_header(); ?>

<img id="home_phone-image" src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/screen_one.png" />
<div id="top_video">
                <video id="start_video" preload="metadata" playsinline muted autoplay="autoplay" loop="true">
                    <source src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/pexels-cottonbro.mp4"
                        type="video/mp4">
                </video>
</div>

<div class="container-fluid" id="home_opener">
    <div class="row">
        <div class="col-12 home_opener_background home-typed">
            <div id="typed-strings">
                <p>WE BELIEVE IN</br>
                    THE GREEN FUTURE</p>
            </div>
            <span id="typed"></span>
        </div>
    </div>

    <div class="row home_about">
    
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h2>WHAT IS CO2MMON?</h2>
            <p>
                Common is a new generation loyalty system app measuring, rewarding and reporting reductions of
                CO2emissions resulting from activities
                performed by individuals for the benefit of organisations who can thus demonstrate that they contribute
                to the fight against climate change.
                Common allocates GreenCents to users according to the principle “1 GreenCent = reward for 1kg of
                non-emitted CO2”
            </p>
            <div class="learn_more">
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
            </div>
        </div>
        <div class="col-md-5 int_phone" >
            <img id="home_phone-image_int" src="<?php echo get_site_url();?>/wp-content/themes/co2mmon/img/screen_one.png" />
        </div>   
    </div>


    <div class="row">
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

<!-- roadmap -->

<div class="grid">
    <div class="gtig__item">
        <div class="event_block">Event1</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event2</div>
    </div>
    <div class="gtig__item"></div>
    <div class="gtig__item"></div>
    <div class="gtig__item">
        <div class="event_block">Event3</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event4</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event5</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event6</div>
    </div>
    <div class="gtig__item">

    </div>
    <div class="gtig__item">

    </div>
    <div class="gtig__item">
        <div class="event_block">Event7</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event7</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event7</div>
    </div>
    <div class="gtig__item">
        <div class="event_block">Event8</div>
    </div>
    <div class="gtig__item"></div>
    <div id="svgwrap">
        <svg id="picsvg" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">

            <path id="cur_line" d="M0 0" stroke="#79D3A7" stroke-width="10" stroke-linecap="round" />

        </svg>
    </div>
</div>
<!-- news -->
<div class="container-fluid">
    <div class="row">
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
            <h2>WHAT'S NEW?</h2>
        </div>
        <div class="col-md-3 col-sm-6 col-11  news_item">
            <img src=""/>
            <h3></h3>
        </div>
        <div class="col-md-3 col-sm-6 col-11  news_item">
            <img src=""/>
            <h3></h3>
        </div>
        <div class="col-md-3 col-sm-6 col-11  news_item">
            <img src=""/>
            <h3></h3>
        </div>
        <div class="col-md-3 col-sm-6 col-11  news_item">
            <img src=""/>
            <h3></h3>
        </div>
        <div class="col-md-3 col-sm-6 col-11  news_item">
            <img src=""/>
            <h3></h3>
        </div>
    </div>
    <div>
        <div>
    </div>
</div>

<?php get_footer(); ?>