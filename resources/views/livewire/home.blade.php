<div class="h-screen flex overflow-hidden bg-transparent">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">
      <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-shrink-0 flex items-center px-4">
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
      </div>
      <div class="mt-5 flex-1 h-0 overflow-y-auto">
        <nav class="px-2 space-y-1">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
            <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Team
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            Projects
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/calendar -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Calendar
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/inbox -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            Documents
          </a>

          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/chart-bar -->
            <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            Reports
          </a>
        </nav>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
      <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <nav aria-label="Sidebar" class="hidden md:block md:flex-shrink-0 md:bg-gray-800 md:overflow-y-auto">
      <div class="relative w-20 flex flex-col p-3 space-y-3">
        <a href="#" class="bg-gray-900 text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Open</span>
          <!-- Heroicon name: outline/inbox -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Archive</span>
          <!-- Heroicon name: outline/archive -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Customers</span>
          <!-- Heroicon name: outline/user-circle -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Flagged</span>
          <!-- Heroicon name: outline/flag -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Spam</span>
          <!-- Heroicon name: outline/ban -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
          </svg>
        </a>

        <a href="#" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
          <span class="sr-only">Drafts</span>
          <!-- Heroicon name: outline/pencil-alt -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg>
        </a>
      </div>
    </nav>


    <main class="flex-1 mt-20 relative overflow-y-auto focus:outline-none">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">
            <div class="flex flex-wrap gap-11 -mx-4 overflow-hidden">
  
            <div class="border-4 my-4 py-5 px-4 w-3/5 overflow-hidden gradientcolor3 border-gray-200 rounded-3xl">
            <h2 class="text-5xl mb-2 font-extrabold text-white">Halo, nama</h2>
            <h2 class="text-3xl font-bold text-white">Anda mulai bergabung sejak tanggal</h2>
            <div class="text-center">
            <button class="bg-blue-500 mt-20 w-full hover:bg-gray-100 text-white font-semibold py-3 mb-10 text-xl px-4 border border-white rounded shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>Beli Tiket
</div>
          </button>
          <div>

  <dl class="mt-5 grid grid-cols-2 gap-5 sm:grid-cols-2 lg:grid-cols-2">
    <div class="relative gradientcolor2 pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-white text-gray-500 truncate">Kamu telah mencapai level</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-blue-200">
          71,897
        </p>
     
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Kategori Permainan Fast Track<span class="sr-only"> Total Subscribers stats</span></a>
          </div>
        </div>
      </dd>
    </div>


    <div class="relative gradientcolor2 pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-white text-gray-500 truncate">Kamu Berada di Peringkat</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-blue-200">
          1/50 Pengguna
        </p>
     
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Informasi<span class="sr-only"> Total Subscribers stats</span></a>
          </div>
        </div>
      </dd>
    </div>
  </dl>
</div>
            </div>
            <div class="border-0 my-4 w-2/6 overflow-hidden rounded-lg h-full">
            <nav class="h-full overflow-y-auto" aria-label="Directory">
  <div class="relative">
    <div class="z-10 sticky top-0 text-center text-4xl text-white  bg-transparent px-6 py-1 font-medium ">
      <h3 class="mb-10">Peringkat</h3>
    </div>
    <ul role="list" class="relative z-0 rounded-3xl overflow-scroll  border-4 gradientcolor3 " style="max-height:400px">
      <li class=" border-0">
        <div class="relative px-6 py-5 flex items-center space-x-3 gradientcolor4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
        <div class="flex-shrink-0">
           <h1 class="text-4xl text-white"><img class="h-10 w-10" src="https://i.ibb.co/nBm9rmG/image.png"></h1>
          </div>  
        <div class="flex-shrink-0">
            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="flex-1 min-w-0">
            <a href="#" class="focus:outline-none">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              <p class="text-lg font-semibold  text-white">
                Leslie Abbott
              </p>
              
            </a>
          </div>
          <div class="">
            <img class="h-12 w-12 rounded-full" src="https://i.ibb.co/HCYMkKW/image.png" alt="">
          </div>
          <p class="text-lg font-semibold  text-white">
               99999
              </p>
        </div>
      </li>
      <li class=" border-0">
        <div class="relative px-6 py-5 flex items-center space-x-3 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
        <div class="flex-shrink-0">
           <h1 class="text-4xl h-10 w-10 text-center text-white">2</h1>
          </div>  
        <div class="flex-shrink-0">
            <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="flex-1 min-w-0">
            <a href="#" class="focus:outline-none">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              <p class="text-lg font-semibold  text-white">
                Leslie Abbott
              </p>
              
            </a>
          </div>
          <div class="">
            <img class="h-12 w-12 rounded-full" src="https://i.ibb.co/HCYMkKW/image.png" alt="">
          </div>
          <p class="text-lg font-semibold  text-white">
               99999
              </p>
        </div>
      </li>
     
      

      
    </ul>
  </div>


</nav>

            </div>
            <div class="flex flex-col w-full pr-11">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class=" overflow-hidden border-b border-gray-200 ">
        <h1 class="text-5xl font-extrabold text-white mb-5">Histori Bermain</h1>
        <div class="overflow-y-scroll h-80">
        <table class="min-w-full divide-y divide-gray-200 rounded-md border-5  h-20e">
          <thead class="bg-gray-50">
            <tr class="rounded-t-xl">
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Tanggal
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Kategori Permainan
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Permainan
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Perolehan Dolar
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Perolehan Tiket
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Perolehan Skor
              </th>
            
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          
          <tbody class="gradientcolor3 divide-y divide-white">

            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                Jane Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Regional Paradigm Technician
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                Admin
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                500
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                600
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
         
            
            <!-- More people... -->
          </tbody>
</div>
        </table>
      </div>
    </div>
  </div>
</div>
          </div>
          </div>
          <!-- This example requires Tailwind CSS v2.0+ -->


          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>
</div>

<!-- <div>
   Uang: {{ auth()->user()->myUser->money }}
   Tiket: {{ auth()->user()->myUser->ticket }}
   Skor: {{ auth()->user()->myUser->quiz_score }}

   Halo, {{ auth()->user()->username }}
   Anda bergabung sejak {{ auth()->user()->created_at }}

   <br>
   //Kategori Permainan fast track
   Kamu telah bermain sebanyak  {{ $lastLevel }} Level

   <br>
   
  kamu berada diperingkat
  @foreach($leaderBoard as $leaderBoardData)
   @if($leaderBoardData->student->id == auth()->user()->id)
   {{ $loop->iteration }}/{{ count($leaderBoard) }} pengguna
   @endif
   @endforeach

  <br>
  Peringkat
   @foreach($leaderBoard as $leaderBoardData)
   <br>
   {{ $loop->iteration }}
   <br>
   Username: {{ $leaderBoardData->student->username }}
   <br>
   Skor: {{ $leaderBoardData->score }}
   @endforeach

   <br><br><br>
   ////History<br>
   @foreach($getHistoryUser as $history)
   <br>
   Tanggal: {{ $history->pivot->created_at }}
   <br>
   Kategori Permainan: {{ $history->category->name }}
   <br>
   Permainan: {{ $history->name }}
   <br>
   dolar: {{ $history->pivot->money_reward }}
   <br>
   ticket: {{ $history->pivot->ticket_reward }}
   <br>
   skor: {{ $history->pivot->score }}
  
   @endforeach
</div> -->
