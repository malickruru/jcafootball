<?php
function photo($p)
{
    if ($p == '') {
        return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxoSoYYJ-Lb1GPvCsTRto-oJUgeFv8Wpk81g&usqp=CAU';
    }
    // Convertir la chaîne JSON en un tableau associatif
    $tableau = json_decode($p, true);

    // Extraire la valeur de l'attribut "name"
    $chemin = $tableau[0]['name'];

    return 'https://jcafootball.com/administration/' . str_replace('\\', '/', $chemin);
}
?>

<style>
    @media screen and (max-width : 768px){
        .mobile-wrap{
            flex-wrap: wrap;
}
}

    
</style>

<div class="container">
    <div class="row m-5">
        <div class="text-center p-2">
            @component('components.title', ['text' => 'Notre ', 'span' => 'équipe'])
            @endcomponent
            <div class="col ">

                <div class="flexSpaceBetween mobile-column">
                    @foreach ($players as $p)
                    
                    @component('components.player-card', [
                        'photo' => photo($p->photo),
                        'nom' => $p->nom,
                        'poste' => $p->poste,
                        'num' => $p->numero,
                    ])
                    @endcomponent
                @endforeach

                </div>
                
                <a href="/joueur" class="btn btn-outline-primary" >
                    Notre équipe
                </a>
            </div>
        </div>

    </div>
</div>
