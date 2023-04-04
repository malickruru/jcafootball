<style>
    .swiper {
        max-width: 100vw;
        height: 100vh;
        padding: 0;
        margin: 0;
        overflow: hidden;
    }

    .swiper-image {
        width: 100vw;
        height: 100vh;
    }

    .swiper-image-inner {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        padding: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: hue;
    }

    .banner-content {
        font-size: 24px;
        max-width: 600px;
        line-height: 1.4;
        color: #fff;
    }

    .banner-content h2 {
        font-size: 40px;
        margin: 0 0 10px;
    }

    .banner-content p {
        margin: 0
    }
    .swiper-button-prev,
    .swiper-button-next {
        color: #fff;
    }

    /* 

    .swiper-button-prev {
        transform: translateX(50px);
    }

    .swiper-button-next {
        transform: translateX(-50px);
    } */

    /* .swiper-container:hover .swiper-button-prev,
    .swiper-container:hover .swiper-button-next {
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
    } */
</style>

<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="swiper-image" >
                <div class="swiper-image-inner" style="background-image: url(image/IMG-20230330-WA0007.jpg);">
                    <div class="banner-content">
                        <h2 data-swiper-parallax-duration="1500" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-700"> Jeunesse club d'Abidjan</h2>
                        <p data-swiper-parallax-duration="1700" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-1000">Toujours plus fort</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-image" >
                <div class="swiper-image-inner" style="background-image: url(image/IMG-20230330-WA0014.jpg);">
                    <div class="banner-content">
                        <h2 data-swiper-parallax-duration="1500" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-700"> Slide 1</h2>
                        <p data-swiper-parallax-duration="1700" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-1000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-image" >
                <div class="swiper-image-inner" style="background-image: url(image/IMG-20230330-WA0015.jpg);">
                    <div class="banner-content">
                        <h2 data-swiper-parallax-duration="1500" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-700"> Slide 1</h2>
                        <p data-swiper-parallax-duration="1700" data-swiper-parallax-opacity="0"
                            data-swiper-parallax="-1000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- <!-- If we need pagination -->
    <div class="swiper-pagination"></div> --}}

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>

<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay : true,
        speed: 1500,
        parallax: true,
        loopAdditionalSlides: 5,
        // grabCursor: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>
