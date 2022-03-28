<div x-data="{ open: false }" class="h-screen flex overflow-hidden bg-transparent">
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
      <a href="/home" class="bg-gray-900 text-white flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
        <span class="sr-only">Open</span>
        <!-- Heroicon name: outline/inbox -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
      </a>

      <a href="/fast_track" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
        <span class="sr-only">Archive</span>
        <!-- Heroicon name: outline/archive -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
        </svg>
      </a>

      <a href="/gametemp" class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
        <span class="sr-only">Customers</span>
        <!-- Heroicon name: outline/user-circle -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </a>

     
    </div>
  </nav>


    <main class="flex-1 mt-20 relative overflow-y-auto focus:outline-none">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">
            <div class="flex flex-wrap -mx-3 overflow-hidden">

              <div class="my-3 px-3 w-2/8 px-8 border-2 py-5 rounded-xl bg-gray-900 h-64 overflow-hidden">
                <h2 class="text-2xl text-white font-semibold">Nomor</h2>
                <span class="relative z-0 gap-6 shadow-sm rounded-md block">
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold bg-red-600 text-sm font-medium text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    1
                  </button>
                  <button type="button" class="relative bg-gray-700 inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold text-sm text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    2
                  </button>
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border border-transparent bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    3
                  </button>
                </span>
                <span class="relative z-0 gap-3 shadow-sm rounded-md block mt-2">
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold bg-red-600 text-sm font-medium text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    4
                  </button>
                  <button type="button" class="relative bg-green-500 inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold text-sm text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    5
                  </button>
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border  border-transparent bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    6
                  </button>
                </span>
                <span class="relative z-0 gap-3 shadow-sm rounded-md block mt-2">
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold bg-red-600 text-sm font-medium text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    7
                  </button>
                  <button type="button" class="relative bg-green-500 inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold text-sm text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    8
                  </button>
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border  border-transparent bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    9
                  </button>
                </span>
                <span class="relative z-0 gap-3 shadow-sm rounded-md block mt-2">
                  <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-md border border-transparent font-semibold bg-red-600 text-sm font-medium text-white hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                   10
                  </button>
                  
                </span>
                
              </div>
            
              <div class="my-3 px-3 w-3/5 ml-5  overflow-hidden rounded-xl">
                <div class="my-3 px-3 gradientcolor5 w-full  overflow-hidden rounded-full h-32 flex  ">
                <h2 class="text-white  text-center m-auto text-3xl font-bold ">Lorem Ipsum Loro Damet</h2>
                </div>
                <div class="my-3 px-3  gradientcolor3 border-2 overflow-hidden rounded-xl h-16 flex  ">
                  <p class="text-white text-center m-auto text-3xl font-bold ">Lorem Ipsum Loro Damet</h2>
                  </div>
                  <div class="my-3 px-3 gradientcolor3 border-2 overflow-hidden rounded-xl h-16 flex  ">
                    <p class="text-white text-center m-auto text-3xl font-bold ">Lorem Ipsum Loro Damet</h2>
                    </div>
                    <div class="my-3 px-3  gradientcolor3 border-2 overflow-hidden rounded-xl h-16 flex  ">
                      <p class="text-white text-center m-auto text-3xl font-bold ">Lorem Ipsum Loro Damet</h2>
                      </div>
                      <div class="my-3 px-3 gradientcolor3 border-2 overflow-hidden rounded-xl h-16 flex  ">
                        <p class="text-white text-center m-auto text-3xl font-bold ">Lorem Ipsum Loro Damet</h2>
                        </div>
              </div>
              
              <div class="my-3 px-3 w-1/5 ml-5  overflow-hidden rounded-xl">
                <h2 class="text-2xl text-white font-semibold mb-3 text-center">Waktu</h2>
                <button type="button" class="mb-4 w-full text-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-yellow-400 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  00:00
                </button>
                <button type="button" class=" w-full text-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Selesai
                </button>
                <h2 class="text-2xl text-white font-semibold mb-3 mt-3 text-center">Total Hadiah</h2>
                <span class="mb-2 w-full text-center gradientcolor flex align-center justify-center items-center py-4 px-2 rounded-3xl text-sm font-medium bg-gray-100 text-white">
                <img src="https://i.ibb.co/nBQy0Rv/image.png" class="h-6 w-6 mr-2"> <b>200</b>
                </span>
                <span class="mb-2 w-full text-center gradientcolor flex align-center justify-center items-center py-4 px-2 rounded-3xl text-sm font-medium bg-gray-100 text-white">
                <img src="https://i.ibb.co/kHfCs1W/image.png" class="h-6 w-6 mr-2"> <b>200</b>
                </span>
                <span class=" w-full text-center gradientcolor flex align-center justify-center items-center py-4 px-2 rounded-3xl text-sm font-medium bg-gray-100 text-white">
                <img src="https://i.ibb.co/HCYMkKW/image.png" class="h-6 w-6 mr-2"> <b>200</b>
                </span>
                
               
              </div>
            
            </div>
       
      </div>
    </main>
  </div>
</div>


