

@if (!$match)
    <div></div>
@else
@php
    setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');
    $homeTeam = [];
    $awayTeam = [];
    if ($match->lieu == 'domicile') {
        $homeTeam['logo'] = '/image/logo.png';
        $homeTeam['name'] = "Jeunesse Club d'Abidjan";
        $awayTeam['logo'] = $match->opponent->logo;
        $awayTeam['name'] = $match->opponent->nom;
    } else {
        $awayTeam['logo'] = '/image/logo.png';
        $awayTeam['name'] = "Jeunesse Club d'Abidjan";
        $homeTeam['logo'] = $match->opponent->logo;
        $homeTeam['name'] = $match->opponent->nom;
    }
@endphp

<style>
    .vs {
        background-color: #b71c1c;
        color: #fff;
        padding: 5px;
    }
    .team{
        display : inline-flex;
        justify-content: space-around;
        align-items: center;
    }
    .match-wrapper{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    @media screen and (max-width : 768px){
    .team{
        flex-direction: column-reverse;
        height: 120px;
    }
    .team:nth-child(1){
        flex-direction: column;
    }
    .team img{
        width: unset !important;
        height: 100px;
    }
    .team h3{
        font-size: 12px;
    }
    
}
</style>
<hr id='prochainMatch'>
<div class="container">
    <div class="row my-5">
        <div class="text-center p-2">
            @component('components.title', ['text' => 'Prochain ', 'span' => 'match'])
            @endcomponent
            <div class="col">
                <span class="d-block my-3">{{$match->competition}}</span>
                <div class="match-wrapper">
                    <div class="team">
                        <img src="{{ $homeTeam['logo'] }}" width="100px">
                        <h3 >{{ $homeTeam['name'] }}</h3>
                    </div>
                    <h3 class="vs ">VS</h3>
                    <div class="team">
                        <h3 >{{ $awayTeam['name'] }}</h3>
                        <img src="{{ $awayTeam['logo'] }}" width="100px">
                    </div>

                </div>
                <div class="mt-3">
                    <span>
                        
                        {{ strftime('%e %B %Y | %H:%M', strtotime($match->date)) }}
                    </span>
                </div>
                <div class="my-3">
                    <span>
                        <i class="bi bi-geo-alt"></i>
                        {{ $match->lieu }}
                    </span>
                </div>


                <a href="/match" class="btn btn-outline-primary">
                    Voir le classement
                </a>
            </div>
        </div>

    </div>
</div>
@endif


