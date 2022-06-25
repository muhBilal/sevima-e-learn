@extends('layouts.default')

@section('content')

    <div class="mt-7 mx-14">
        <h1 class="font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 mb-3">
        Tugas</h1>
        <div class="flex sm:flex-row flex-col sm:flex-wrap">
            @foreach ($posts as $post)
                @if ($post->subject->grade_id == auth()->user()->grade_id)
                    <div class=" w-full sm:w-1/2 lg:mb-5 md:mb-4 sm:mb-3 mb-2 px-3">
                        <a href="/tugas/{{ $post->slug }}">
                            <div class="flex bg-bwhite filter drop-shadow-md rounded-md p-2 md:p-3">
                                <div class="bg-balt px-2 py-2">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt px-2 py-2"
                                            alt="">
                                    @else
                                        <img src="{{ asset('img/ttugass.png') }}"
                                            class=" lg:w-20 md:w-16 sm:w-14 w-12 lg:h-20 md:h-16 sm:h-14 h-12 bg-balt px-2 py-2"
                                            alt="">
                                    @endif
                                </div>
                                <div class="block">
                                    <h1
                                        class="font-bserif lg:text-2xl md:text-lg sm:text-base text-sm text-bblack font-bold md:ml-4 sm:ml-3 ml-2 md:mt-2 mt-1">
                                        {{ $post->judul }}</h1>
                                    <div class="flex">
                                        <div class="bg-bblue  rounded-md px-2 py-1 h-auto ml-4 mt-3">
                                            <p
                                                class="font-bsans md:text-base sm:text-sm text-xs font-bold text-bwhite text-center">
                                                {{ $post->subject->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
