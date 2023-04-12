@extends('layout.BaseLayout')

@section('title', 'Jeunesse Club Abidjan')

@section('content')

    @include('partials.loader')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.section.contact')
    @include('partials.footer')

@endsection
