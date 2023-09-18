<header>
    <div>
        <nav class="bg-primary  fixed z-30 w-full">
           <div class="px-3 py-3 lg:px-5 lg:pl-3">
              <div class="flex items-center justify-between">
                 <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-white hover:text-primary cursor-pointer p-2 hover:bg-gray-100 focus:ring-2 focus:ring-white  rounded">
                       <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                       </svg>
                       <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                       </svg>
                    </button>

                    <form action="#" method="GET" class="hidden lg:block">
                       <label for="topbar-search" class="sr-only">Search</label>
                       <div class="mt-1 relative lg:w-64">
                          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                             <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                             </svg>
                          </div>
                          <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                       </div>
                    </form>
                 </div>
                 <div>
                  <a href="/" class="text-xl font-bold flex items-center lg:ml-2.5">
                     <img src="{{ URL::asset("images/LogoOnlyWhite.png") }}" class="h-6 mr-2" alt="Windster Logo">
                     <span class="self-center whitespace-nowrap uppercase logo text-white">Al Khoir</span>
                     </a>
                 </div>
                 <div class="flex items-center">
                    <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-white hover:text-hitam hover:bg-gray-100 p-2 rounded-lg">
                       <span class="sr-only">Search</span>
                       <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                       </svg>
                    </button>
                    <div class="hidden lg:flex items-center">
                       {{-- <a href="#" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                          <svg class="svg-inline--fa fa-gem -ml-1 mr-2 h-4 w-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                             <path fill="currentColor" d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path>
                          </svg>
                          Upgrade to Pro
                       </a> --}}
                       <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600 text-white font-bold">
                          <div class="mr-3 text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                          </div>
                          Logout
                        </button>
                      </form>
                    </div>
                 </div>
              </div>
           </div>
        </nav>
        </header>
        
    <div class="flex overflow-hidden bg-white pt-16">
        <aside id="sidebar" class="fixed z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
           <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
              <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                 <div class="flex-1 px-3 bg-white divide-y space-y-1">
                    <ul class="space-y-2 pb-2">
                       <li>
                          <form action="#" method="GET" class="lg:hidden">
                             <label for="mobile-search" class="sr-only">Search</label>
                             <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                   <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                   </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                             </div>
                          </form>
                       </li>