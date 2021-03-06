<div class="px-3">
    <h1 class="text-bblue font-bold font-bserif lg:text-4xl md:text-3xl sm:text-2xl text-xl lg:mt-10 md:mt-9 sm:mt-8 mt-7 md:mb-6 sm:mb-5 mb-4 ml-7">
        Tips & Motivasi Belajar</h1>
    <div class="slick_one  w-[79vw]">
        @foreach ($motivations as $motivation)
            <div class="bg-bblue filter drop-shadow-md rounded-2xl p-2">
                <a href="/home/{{ $motivation->slug }}" class="flex">
                    <div class="bg-bwhite rounded-full md:px-3 px-2 md:py-3 py-2 md:mx-3 mx-2 md:my-3 my-2">
                        <img src="/img/optimis.png" class="lg:w-16 md:w-14 sm:w-12 xsm:w-10 w-8" alt="">
                    </div>
                    <h1
                        class="font-bdisplay text-bblack lg:text-3xl md:text-2xl sm:text-xl xsm:text-lg text-base font-bold ml-5 my-auto">
                        {{ $motivation->judul }}</h1>
                </a>
            </div>
        @endforeach
    </div>

</div>
