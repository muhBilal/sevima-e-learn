@extends('home.main')

@section('container')
    <div class="flex gap-0">
        {{-- sidebar --}}
        <div>
            @include('home.partials.sidebar')
        </div>
        {{-- content --}}
        <div class="w-[100%]">
            @include('home.partials.header')
            @include('home.partials.subject')
            @include('home.partials.tips')
        </div>
    </div>
@endsection
