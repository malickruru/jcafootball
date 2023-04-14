<style>
    .hero-section{
        height: 300px;
        margin: 0;
        background-image: url("/image/IMG-20230330-WA0027.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        
        align-items: flex-end;
        justify-content: center;
        position: relative;
        /* background-attachment: fixed; */

        background-position: 0 30%;
    }

    .hero-section .overlay{
        position: absolute;
        background-color: rgba(0, 0, 0, 0.6);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .hero-section h1{
        z-index: 1;
    }
</style>
<div class="hero-section d-flex">
    <div class="overlay"></div>
    <h1 class="text-center text-white ">{{ $title }}</h1>
</div>
