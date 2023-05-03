<div class="col-sm-3 player-card" data-poste="{{ $poste }}">
    <img src="{{ $photo }}" loading="lazy" />
    <div class="player_info">
        <h5>{{ $nom }}</h5>
        <h6>{{ $poste }}</h6>
    </div>

    @if ($num != -1)
        <div class="num">{{ $num }}</div>
    @endif

</div>


<style>
    .player-card {
        width: 250px;
        margin: 5px;
        position: relative;
        height: 350px;
        overflow: hidden;
    }

    .player-card img {
        width: 100%;
    }

    .player-card div {
        position: absolute;
    }

    .player-card h6 {
        opacity: 0.7;
    }


    .player_info {
        bottom: 0;
        background-color: white;
        right: 0;
        left: 0;
        height: 150px;
        text-align: left;
        padding: 5px;

    }

    .num {
        top: 0;
        left: 0;
        background-color: #b71c1c;
        color: #fff;
        padding: 10px;
    }
</style>
