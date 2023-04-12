@extends('layout.BaseLayout')

@section('title', 'Jeunesse Club Abidjan')

@section('content')

    {{-- @include('partials.loader') --}}
    @include('partials.navbar')
    <style>
        .contact-map {
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        @media screen and (max-width : 768px){
    .contact-form{
        padding-top: 3em;
        padding-bottom: 3em;
    }

   
}
    </style>
    
    <div class="container-fluid mt-5 pt-5">
        @php
                    $text = "Contactez-";
                    $span = "nous";
                @endphp
                <div class="mt-5 text-center">
                    <x-title :text="$text" :span="$span"></x-title>
                </div>
                
        <div class="row">
            <div class='col-md-6 contact-map '>
                <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.7278042555286!2d-3.9946555854644648!3d5.305102837597892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebf9785b3e3d%3A0x792857962e9daeca!2sStade%20Robert%20Champroux%20de%20Marcory!5e0!3m2!1sfr!2sci!4v1680688847641!5m2!1sfr!2sci"
                    width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class='col-md-6 flexColumnCenter contact-form'>
                
                <div class="w-75">
                    <form action="/contact" method="post">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input name="nom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                        <input name="prenom" type="text" class="form-control" id="exampleFormControlInput1" placeholder="votre prénom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">
                        Envoyer
                    </button>
                </form>
                </div>
    
            </div>
        </div>
    
    </div>
    
   
    
    @include('partials.footer')
    @include('components.message')

@endsection
