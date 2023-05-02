@php
    $homeTeam = [];
        $awayTeam = [];
        if ($game->lieu == 'domicile') {
            $homeTeam['logo'] = '/image/logo.png';
            $homeTeam['name'] = "Jeunesse Club d'Abidjan";
            $homeTeam['goal'] = $game->nb_but_jca;
            $awayTeam['logo'] = $game->opponent->logo;
            $awayTeam['name'] = $game->opponent->nom;
            $awayTeam['goal'] = $game->nb_but_adversaire;
        } else {
            $awayTeam['logo'] = '/image/logo.png';
            $awayTeam['name'] = "Jeunesse Club d'Abidjan";
            $homeTeam['logo'] = $game->opponent->logo;
            $homeTeam['name'] = $game->opponent->nom;
            $homeTeam['goal'] = $game->nb_but_adversaire;
            $awayTeam['goal'] = $game->nb_but_jca;
        }
@endphp

<div class="match-wrapper justify-content-start">
    <div class="team px-3">
        <img src="{{ $homeTeam['logo'] }}" width="75px" class="mx-1 desktop-only">
        <h6>{{ $homeTeam['name'] }}</h6>
    </div>

    @if ($game->date > now() )
        <h6 class="vs ">VS</h6>
    @else
        <h6>{{$homeTeam['goal']." : ".$awayTeam['goal'] }}</h6>
    @endif
    
    <div class="team px-3">
        <h6>{{ $awayTeam['name'] }}</h6>
        <img src="{{ $awayTeam['logo'] }}" width="75px" class="mx-1 desktop-only">
    </div>

</div>