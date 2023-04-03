@extends('layout.BaseLayout')

@section('title', 'Site en maintance')

@section('content')

   
    <style>
        .maintenance {
            height: 100vh;
            width: 100vw;
            background-image: url('image/IMG-20230330-WA0019.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            filter: grayscale(70%);

        }

        .maintenance-filter {
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #000000;
            opacity: 0.8;
            position: absolute;
            z-index: 1;
        }

        .maintenance-content{
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: 2;
            /* filter: grayscale(0%); */
        }
    </style>
    <div class='maintenance '>
    </div>
        <div class="maintenance-filter">

        </div>
           
        <div class="maintenance-content flexColumnSpaceAround">
            <div class="flexColumnCenter">
                <x-logo :width=150></x-logo>
                <h2 class="text-primary p-2">
                    Jeunesse Club d'Abidjan
                </h2>
            </div>

            <div class="text-white">
                <H1>SITE EN MAINTENANCE</H1>
            </div>

            <x-social></x-social>
        </div>
        
    
@endsection
