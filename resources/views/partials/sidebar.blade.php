<aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl z-10">
    <div class="flex py-4 pl-6">
        <img src="{{ asset('img/logo.png') }}" class="w-20 mr-2" alt="">
        <a href="index.html" class="text-black text-2xl font-semibold uppercase hover:text-gray-300">BeSmart</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3 px-2">

        <a href="/dashboard" data-turbolink="true" class="flex my-1 items-center text-black py-4 pl-6 nav-item rounded-2xl hover:opacity-100 hover:text-white {{ Request::is('dashboard') ? 'active-nav-link text-white' : '' }}">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/dashboard/biodata" data-turbolink="true" class="flex my-1 items-center text-black opacity-75 hover:opacity-100 hover:text-white py-4 pl-6 nav-item rounded-2xl {{ Request::is('dashboard/biodata') ? 'active-nav-link text-white' : '' }}">
            <i data-feather="users" class="mr-3 "></i>
            Biodata Siswa
        </a>
        <a href="/dashboard/materi" data-turbolink="true"  class="flex my-1 items-center text-black opacity-75 hover:opacity-100 hover:text-white py-4 pl-6 nav-item rounded-2xl {{ Request::is('dashboard/materi*') ? 'active-nav-link text-white' : '' }}">
            <i data-feather="book-open" class="mr-3 "></i>
            Materi
        </a>
        <a href="/dashboard/task" data-turbolink="true" class="flex my-1 items-center text-black opacity-75 hover:opacity-100 hover:text-white py-4 pl-6 nav-item rounded-2xl {{ Request::is('dashboard/task*') ? 'active-nav-link text-white' : '' }}">
            <i data-feather="edit-3" class="mr-3 "></i>
            Tugas
        </a>

        <a href="/dashboard/motivasi" data-turbolink="true" class="flex my-1 items-center text-black opacity-75 hover:opacity-100 hover:text-white py-4 pl-6 nav-item rounded-2xl {{ Request::is('dashboard/motivasi') ? 'active-nav-link text-white' : '' }}">
            <i data-feather="file-text" class="mr-3 "></i>
            Motivasi
        </a>
        <a href="/dashboard/presensi" data-turbolink="true" class="flex my-1 items-center text-black opacity-75 hover:opacity-100 hover:text-white py-4 pl-6 nav-item rounded-2xl {{ Request::is('dashboard/presensi') ? 'active-nav-link text-white' : '' }}">
            <i data-feather="clock" class="mr-3 "></i>
            Laporan Presensi
        </a>
    </nav>
</aside>
