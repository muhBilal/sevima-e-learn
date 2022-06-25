@extends('home.main')

@section('container')
    <div class="flex">
            <div class="fixed z-40">
                @include('partials.sidebar')
            </div>
        <div>
            @include('home.partials.header')

            @include('home.partials.menu')

            @include('home.partials.subject')

            @include('home.partials.tips')
        </div>
    </div>
@endsection
