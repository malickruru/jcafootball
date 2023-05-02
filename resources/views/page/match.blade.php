@extends('layout.BaseLayout')

@section('title', 'Jeunesse Club Abidjan')

@section('content')
    @include('partials.navbar')
    @component('components.hero', ['title' => 'Matchs'])
    @endcomponent


    <style>
        .vs {
            background-color: #b71c1c;
            color: #fff;
            padding: 5px;
        }

        .team {
            display: inline-flex;
            justify-content: space-around;
            align-items: center;
        }

        .match-wrapper {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        @media screen and (max-width : 768px) {
            .team {
                flex-direction: column-reverse;
                height: 120px;
            }

            .team:nth-child(1) {
                flex-direction: column;
            }

            .team img {
                width: unset !important;
                height: 100px;
            }

            .team h3 {
                font-size: 12px;
            }

            table {
                width: 200% !important;
            }

            .classement img {
                max-width: 90%;
            }

        }

        td {
            text-align: center;
            vertical-align: middle;
        }
    </style>



    <div class="container">
        <div class="row my-5">
            <div class="text-center p-2">
                @if (!$next)
                    <div></div>
                @else
                    @php
                        setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');
                        $homeTeam = [];
                        $awayTeam = [];
                        if ($next->lieu == 'domicile') {
                            $homeTeam['logo'] = '/image/logo.png';
                            $homeTeam['name'] = "Jeunesse Club d'Abidjan";
                            $awayTeam['logo'] = $next->opponent->logo;
                            $awayTeam['name'] = $next->opponent->nom;
                        } else {
                            $awayTeam['logo'] = '/image/logo.png';
                            $awayTeam['name'] = "Jeunesse Club d'Abidjan";
                            $homeTeam['logo'] = $next->opponent->logo;
                            $homeTeam['name'] = $next->opponent->nom;
                        }
                    @endphp
                    @component('components.title', ['text' => 'Prochain ', 'span' => 'match'])
                    @endcomponent
                    <div class="col">
                        <span class="d-block my-3">{{ $next->competition }}</span>
                        <div class="match-wrapper">
                            <div class="team">
                                <img src="{{ $homeTeam['logo'] }}" width="100px">
                                <h3>{{ $homeTeam['name'] }}</h3>
                            </div>
                            <h3 class="vs ">VS</h3>
                            <div class="team">
                                <h3>{{ $awayTeam['name'] }}</h3>
                                <img src="{{ $awayTeam['logo'] }}" width="100px">
                            </div>

                        </div>
                        <div class="mt-3">
                            <span>

                                {{ strftime('%e %B %Y | %H:%M', strtotime($next->date)) }}
                            </span>
                        </div>
                        <div class="my-3">
                            <span>
                                <i class="bi bi-geo-alt"></i>
                                {{ $next->lieu }}
                            </span>
                        </div>



                    </div>
                @endif


            </div>

        </div>
        <div class="row">

            <div class="text-center">
                @component('components.title', ['text' => 'Calendrier ', 'span' => ''])
                @endcomponent
            </div>
            <div class="table-responsive">
                <table class="table table-secondary table-striped table-hover">
                    <tbody>
                        @foreach ($fixtures as $game)
                            <tr>
                                <td>
                                    @component('components.date', ['date' => strftime('%e %B ', strtotime($game->date))])
                                    @endcomponent
                                </td>
                                <td>
                                    @component('components.gameInfo', ['game' => $game])
                                    @endcomponent
                                </td>
                                <td>
                                    <b>
                                        {{ $game->competition }}
                                    </b>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                @component('components.title', ['text' => 'Classement ', 'span' => ''])
                @endcomponent
            </div>
            <div class="col flexCenter my-2 classement">
                @php
                    $imageUri = 'https://jcafootball.com/administration/files/' . explode('/', json_decode($rating->image)[0]->name)[6];
                    
                @endphp

                <img src={{ $imageUri }} />
            </div>
        </div>
    </div>



    @include('partials.footer')

@endsection
