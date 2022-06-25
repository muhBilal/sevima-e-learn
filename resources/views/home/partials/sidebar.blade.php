<aside class="w-64" aria-label="Sidebar-10">
    <div class="overflow-y-auto fixed px-6 py-10 shadow-xl rounded dark:bg-gray-800 w-64" style="height: 100%">
        <div class="flex pb-7">
            <img src="{{ asset('img/logo.png') }}" class="w-10 mr-2" alt="">
            <a href="index.html" class="text-black text-2xl font-semibold uppercase">BeSmart</a>
        </div>

       <ul class="space-y-2 text-gray mt-10">
          <li>
             <a href="/" class="group my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-xl dark:text-white hover:bg-blue-500 hover:text-white dark:hover:bg-gray-700  {{ Request::is('home') ? 'active-nav-link text-white bg-blue-500' : '' }}">
                <svg class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Home</span>
             </a>
          </li>
          <li>
             <a href="biodata" class="group my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-xl dark:text-white hover:bg-blue-500 hover:text-white dark:hover:bg-gray-700  {{ Request::is('biodata') ? 'active-nav-link text-white bg-blue-500' : '' }}">
                <svg class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Biodata</span>
             </a>
          </li>
          <li>
             <a href="presensi" class="group my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-xl dark:text-white hover:bg-blue-500 hover:text-white dark:hover:bg-gray-700  {{ Request::is('presensi') ? 'active-nav-link text-white bg-blue-500' : '' }}">
                <svg class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Presensi</span>
             </a>
          </li>
          <li>
             <a href="tugas" class="group my-3 flex items-center p-2 text-base font-normal text-gray-900 rounded-xl dark:text-white hover:bg-blue-500 hover:text-white dark:hover:bg-gray-700 {{ Request::is('tugas') ? 'active-nav-link text-white bg-blue-500' : '' }}">
                <svg class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Tugas</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>