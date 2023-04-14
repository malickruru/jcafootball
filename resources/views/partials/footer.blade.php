<style>
    footer{
        background-color: #c0d1f2;
        color: black;
        padding: 20px;
    }

    .btn-link{
        text-decoration: none;
    }
    .btn-link:hover{
        opacity: 0.7;
    }
</style>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 flexLeft">
                <x-logo :width=75 ></x-logo>
                <h2 class="mx-3">Jeunesse club d'abidjan</h2>
            </div>
            <div class="col-md-6 flexLeft">
                <x-social>

                </x-social>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-6 px-4">
                <p style="width: 75%">Inscrivez-vous dès maintenant à notre newsletter pour être informé(e) en avant-première de toutes nos
                    actualités.</p>
            </div>
            <div class="col-md-6">
                <form class="d-flex" role="search">
                    <input style="max-width: 60%" class="form-control me-2 " type="text" placeholder="Votre email" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link text-primary " href="/actu">Actualité</a>
                <a class="btn btn-link text-primary" href="/a_propos">Qui sommes nous ?</a>
                <a class="btn btn-link text-primary" href="/team">Equipe</a>
                <a class="btn btn-link text-primary" href="/contact">Contact</a>
                <a class="btn btn-link text-primary" href="/member">Devenir membre</a>
            </div>
            <div class="col-md-6">
                Copyright © 2023 Jeunesse Club d'Abidjan. Tous Droit Réservé.
            </div>
        </div>
    </div>
</footer>
