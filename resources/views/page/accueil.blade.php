@php
    function imageLink($chaine)
    {
        // Convertir la chaîne JSON en un tableau associatif
        $tableau = json_decode($chaine, true);
    
        // Extraire la valeur de l'attribut "name"
    $nom = $tableau[0]['name'];

    // Extraire la partie du chemin de fichier après "administration/"
    $chemin = substr($nom, strpos($nom, 'administration/') + strlen('administration/'));

    // Retourner le lien complet
    return 'https://jcafootball.com/administration/' . str_replace('\\', '/', $chemin);
    }
    
@endphp

@extends('layout.BaseLayout')
@section('title', 'Jeunesse Club Abidjan')

@section('content')

    @include('partials.loader')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.section.palmares')
    @include('partials.section.contact')
    @include('partials.footer')
    @include('components.message')
    
@endsection
