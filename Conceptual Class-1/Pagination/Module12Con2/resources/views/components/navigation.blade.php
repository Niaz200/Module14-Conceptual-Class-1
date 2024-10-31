<nav class="bg-gray-800 border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CRUD Operations</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-500 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-gray-800 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

       
         <li>
            <a 
            href="{{ route('posts.index') }}" 
            class="block py-2 px-3 {{ request()->routeIs('posts.index') ? 'text-green-500' : 'text-white' }}  md:border-0 md:hover:text-blue-700 md:p-0 dark:hover:text-white md:dark:hover:bg-transparent transition">
                All Posts
            </a>
          </li>

          <li>
            <a href="{{ route('posts.create') }}"  class="block py-2 px-3 {{ request()->routeIs('posts.create') ? 'text-green-500' : 'text-white' }} rounded hover:bg-gray-400 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:hover:text-white md:dark:hover:bg-transparent"">
                Create A Post
            </a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
