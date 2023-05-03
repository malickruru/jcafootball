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
@extends('layout.BaseLayout')

@section('title', 'Jeunesse Club Abidjan')

@section('content')

    @include('partials.navbar')
    @component('components.hero', ['title' => 'Notre équipe'])
    @endcomponent


    <style>
        #container {
            max-height: 100vh;
            overflow: hidden;
            /* flex-wrap: wrap; */
        }

        @media screen and (max-width : 768px) {
            .postes li {
                padding: 10px;
            }
        }

        .postes li {
            list-style: none;
            opacity: 0.7;
            cursor: pointer;
        }

        .postes li:hover {
            opacity: 1;
        }

        .postes li.active {
            opacity: 1;

        }

        .postes {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            background-color: #b71c1c;
            color: #fff;
            padding: 15px;
        }
        #container.show-more {
  max-height: none;
}

.toggle-button {
  display: block;
  margin: 10px auto;
  background-color: transparent;
  opacity: 0.7;
  border: none
}
    </style>



    <div class="container">
        <div class="row my-5">
            @component('components.title', ['text' => 'Nos ', 'span' => 'Joueurs'])
            @endcomponent
            <ul class="postes">
                <li data-filter="all" class="filter-btn active">Tous</li>
                <li data-filter="[data-poste~='Gardien']" class="filter-btn">Gardien de but</li>
                <li data-filter="[data-poste~='Défenseur']" class="filter-btn">Défenseur</li>
                <li data-filter="[data-poste~='Millieu']" class="filter-btn">Millieu de terrain</li>
                <li data-filter="[data-poste~='Attaquant']" class="filter-btn">Attaquant</li>
            </ul>


        </div>
        <div id="container" class="row align-items-center justify-content-center text-container"  >
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
        
        <button class="toggle-button">Afficher plus <i class="bi bi-chevron-down"></i></button>
        <div class="row align-items-center justify-content-center">
            @component('components.title', ['text' => 'Nos ', 'span' => 'Coachs'])
            @endcomponent
            @foreach ($coach as $c)
            @component('components.player-card', [
                'photo' => photo($c->photo),
                'nom' => $c->nom,
                'poste' => 'en poste depuis la saison ' . $c->saison_arrive,
                'num' => -1,
            ])
            @endcomponent
            @endforeach
            
            </div>
        </div>
        </div>



        @include('partials.footer')
        @component('components.backtotop')
            @endcomponent
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"
            integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            mixitup('#container', {
                "animation": {
                    "duration": 250,
                    "nudge": false,
                    "reverseOut": false,
                    "effects": "scale(0.01) translateX(20%) stagger(30ms)"
                },
                classNames: {
                    block: 'postes',
                    elementFilter: 'filter-btn',
                    elementSort: 'sort-btn'
                },
                selectors: {
                    target: '.player-card'
                }
            });

            // navbar joueur
            $(".filter-btn").click(function() {
                $(".filter-btn").removeClass('active');
                $(this).addClass('active');

            });

            // voir plus

            const textContainer = document.querySelector('#container');
const toggleButton = document.querySelector('.toggle-button');

toggleButton.addEventListener('click', function() {
  textContainer.classList.toggle('show-more');
  
  if (textContainer.classList.contains('show-more')) {
    toggleButton.innerHTML = '<i class="bi bi-chevron-up"></i>Réduire';
  } else { 
    toggleButton.innerHTML = 'Afficher plus<i class="bi bi-chevron-down"></i>';
  }
});

        </script>
    @endsection
