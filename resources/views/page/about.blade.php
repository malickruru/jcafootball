@php
    function remplacerEspaces($chaine)
    {
        // Remplacer les espaces par des underscores
        $chaine = str_replace(' ', '_', $chaine);
    
        // Remplacer les caractères accentués par des caractères non accentués
        $chaine = iconv('UTF-8', 'ASCII//TRANSLIT', $chaine);
    
        // Remplacer les caractères de ponctuation par des underscores
        $chaine = preg_replace('/[^A-Za-z0-9\-]/', '_', $chaine);
    
        return $chaine;
    }
    
    function ranking($r)
    {
        switch ($r) {
            case 1:
                return [
                    'icon' => "<i class='bx bxs-trophy' ></i>",
                    'color' => 'gold',
                ];
            case 2:
                return [
                    'icon' => "<i class='bx bxs-medal' ></i>",
                    'color' => 'silver',
                ];
            case 3:
                return [
                    'icon' => "<i class='bx bxs-medal' ></i>",
                    'color' => '#fc7735',
                ];
            default:
                return [
                    'icon' => "<i class='bx bxs-star' ></i>",
                    'color' => '#60c5a6',
                ];
        }
    }
    
@endphp
@extends('layout.BaseLayout')

@section('title', 'Jeunesse Club Abidjan')

@section('content')
    {{-- <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/438937/aaronBase.css"> --}}
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/438937/tabulous.css">
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/438937/tabulous.min.js"></script>
    @include('partials.navbar')
    @component('components.hero', ['title' => 'Qui Somme nous ?'])
    @endcomponent

    <style>
        .about {
            height: 300px;
            width: 350px;
            background-image: url("image/IMG-20230330-WA0017.jpg");
            background-repeat: no-repeat;
            /* background-size: cover; */
            /* background-position: 0 30%; */
            align-items: flex-end;
            justify-content: center;
            position: relative;
        }

        .about .overlay {
            position: absolute;
            /* background-color: rgba(0, 0, 0, 0.4); */
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            filter: blur(1px)
        }

        .about .text {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 20px;
            border: 1px #fff solid
            
        }

        .about .text span {
            background-color: #fff;
            display: block;
            height: 1px;
            width: 100px;
        }

        #tabs {
            width: 100%;
        }

        #tabs ul li {
            list-style: none;
        }

        #tabs ul li a {
            background: #544f6b00;
            text-decoration: none;
            color: #000;
            font-size: 14px;
            font-weight: bold;
        }

        #tabs ul li a:hover {
            background: #544f6b00;
            color: #b71c1c;
        }

        .tabulous_active {
            color: #b71c1c !important;
            background: #544f6b00 !important;
            font-size: 18px !important;
        }

        #tabs ul {

            display: flex;
            align-items: center;
            justify-content: space-evenly;

        }

        #tabs_container {
            height: fit-content;
            overflow: unset;
        }

        .trophy-wrapper {
            min-width: 100%;
            /* width: min(60rem, 100%); */
            /* margin-inline: auto; */
            /* display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
                    justify-content: center;
                    gap: 2rem;
                    list-style: none; */
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            /* gap: 2rem; */
            margin-right: 0 !important;

        }

        .trophy-wrapper p {

            max-width: 12rem;
            justify-self: center;
            display: grid;
            grid-template:
                "icon"
                "line"
                "dot"
                "title"
                "descr"1fr;
            justify-items: center;
            align-items: flex-start;
            text-align: center;

        }

        .trophy-wrapper p .icon {
            grid-area: icon;
            width: 6rem;
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            color: white;
            font-size: 2.5rem;
            /* border: 0.4rem solid white; */
            border-radius: 50%;
            background: var(--accent-color);
            /* box-shadow: -0.5rem 0.5rem 1rem rgba(0, 0, 0, 0.45),
                    inset -0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.45); */
        }

        .trophy-wrapper p::before {
            content: "";
            grid-area: line;
            height: 2rem;
            border-right: 2px dotted currentColor;
        }

        .trophy-wrapper p::after {
            content: "";
            grid-area: dot;
            width: 1rem;
            aspect-ratio: 1;
            border-radius: 50%;
            background: var(--accent-color);
            justify-self: center;
            margin-bottom: 0.5rem;
        }

        .trophy-wrapper p .title {
            grid-area: title;
            margin-block: 0.5rem;
            font-size: 1.3rem;
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
        }

        .qui_sommes_nous p{
            font-size: 1.3rem;
            font-family: Tahoma;
        }

        @media screen and (max-width : 768px) {

            .qui_sommes_nous p{
                font-size: 1.6rem;
                font-family: Tahoma;
                text-align: left;
            }
            .qui_sommes_nous{
                padding: 0 !important;
            }

            .trophy-wrapper {
                min-width: 0;
                max-width: 760px;
                flex-wrap: wrap;
            }

            .trophy-wrapper p {
                margin: 5px;
            }

            #tabs ul li {

                list-style: circle;
            }

            #tabs ul {
                flex-wrap: wrap;
                justify-content: flex-start;
            }

            .qui_sommes_nous {
                font-size: 1rem;
            }

            #about-wrapper {
                padding: 0 !important;
            }

        }
    </style>

    <div class="container">
        {{-- a propos --}}
        <div class="row m-5">
            <div class="text-center">
                @component('components.title', ['text' => 'Notre ', 'span' => 'Club'])
                @endcomponent
            </div>
            <div data-aos="fade-right" class="qui_sommes_nous col-md-6 p-5">

                <p >
                    La Jeunesse Club d'Abidjan est un club de football ivoirien fondé le 4 janvier 1932 et basé dans la
                    ville d'Abidjan, en Côte d'Ivoire.
                   <br> <br> Le club est considéré comme le  plus ancien et l'un des plus
                    respectés du pays. La Jeunesse Club d'Abidjan a remporté plusieurs titres de coupes nationales.
                </p>
            </div>
            <div data-aos="fade-left" id="about-wrapper" class="col-md-6 flexCenter p-5">
                <div class="about">
                    <div class="overlay">

                    </div>
                    <div class="text flexColumnCenter d-none">
                        <div class="text-white flexCenter ">
                            <i class='bx bxs-quote-left mb-4 '></i>
                            <h3 class="bg-white text-center mx-2">Toujours plus fort</h3>
                            <i class='bx bxs-quote-right mb-4'></i>
                        </div>
                        <span class="my-2" data-aos="zoom-in" data-aos-delay="300"></span>
                        <h6 style="color: #fff">
                            Jeunesse Club d'Abidjan
                        </h6>
                    </div>
                </div>

            </div>
        </div>
        {{-- notre histoire --}}
        <div class="row m-5">
            <div class="text-center p-2">
                @component('components.title', ['text' => 'Notre ', 'span' => 'palmarès'])
                @endcomponent
            </div>

            <div class="col">
                @component('components.timeline',['palmares' => $palmares])
                @endcomponent
            </div>

            {{-- <div id="tabs">
                <ul>
                    @foreach ($coupe as $c)
                        <li><a href={{ '#' . remplacerEspaces($c->coupe) }}>{{ $c->coupe }}</a></li>
                    @endforeach
                </ul>
                <div id="tabs_container">
                    @foreach ($coupe as $c)
                        <div class="trophy-wrapper" id="{{ remplacerEspaces($c->coupe) }}">

                            @foreach ($palmares->palmaresPerCup($c->coupe) as $trophe)
                                <p style={{ '--accent-color:' . ranking($trophe->classement)['color'] }}>
                                    <span class="icon">{!! ranking($trophe->classement)['icon'] !!}</span>
                                    <span class="title">{{ $trophe->annee }}</span>
                                    <span class="descr">{{ $trophe->libelle_classement }}</span>
                                </p>
                            @endforeach

                        </div>
                    @endforeach

                </div>

            </div> --}}
            <!--End tabs-->
        </div>
    </div>


    @include('partials.footer')
    {{-- @include('components.message') --}}
    <script>
        $(document).ready(function() {
            $('#tabs').tabulous({
                effect: 'scale'
            });
        });
    </script>
@endsection
