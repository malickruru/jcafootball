@extends('layout.BaseLayout')

@section('title', 'Site en maintance')

@section('content')

    {{-- @include('partials.loader'); --}}
    @include('partials.navbar');
    <style>
        section{
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
        
    <section style="background-color: green">

    </section>
    <section>
        
    </section>
@endsection