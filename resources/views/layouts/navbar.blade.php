<!-- navbar -->
    <nav class="bg-gray-100" >
      <div class="max-w-6xl mx-auto px-4 py-2">
        <div class="flex items-center justify-between">
     <div class="flex items-center">
          <!-- logo -->
       <div>
         <a href="{{ route("landingWeb")}}">
           <img src="/images/logo.png" alt="logo" class="h-20 md:h-24 lg:h-24 ">
         </a>  
       </div>
      <!-- primary nav -->
      <div class="hidden sm:block  items-center space-x-10 ">
        <a href="{{ route("shop")}}" class="hover:text-gray-600 text-sm lg:text-base">Shop</a>
        <a href="/pages/Taman.html" class="hover:text-gray-600 text-sm lg:text-base">Pembuatan Taman</a>
        <a href="/pages/Inspirasi.html" class="hover:text-gray-600 text-sm lg:text-base">Galery & Inspirasi</a>
      </div></div>
      <!-- secondary nav -->
      
      @auth
        <div class="hidden sm:block hover:text-gray-600">
          Hi, {{ auth()->user()->name }} 
        </div>
        <form class="hidden sm:block hover:text-gray-600" method="POST" action="{{ route("logout")}}">
          @csrf
          <button type="submit">Logout</button>   
        </form>
      @endauth

      @guest
        <div class="hidden sm:block hover:text-gray-600">
          <a href="{{ route("login")}}">Login</a>   
        </div>
      @endguest
     
      <!-- mobile button here -->
      <div class="sm:hidden flex items-center">
        <button id="butonn" > 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
      </div>

    </div>
    </div>

    <!-- mobile menu -->
    <div id="menu" class="hidden sm:hidden">
      <a href="/pages/shop.html" class="hover:text-gray-600 block py-2 px-8 text-sm">Shop</a>
      <a href="/pages/Taman.html" class="hover:text-gray-600 block py-2 px-8 text-sm">Pembuatan Taman</a>
      <a href="/pages/Inspirasi.html" class="hover:text-gray-600 block py-2 px-8 text-sm">Galery & Inspirasi</a>

      <a href="{{ route("shop")}}" class="hover:text-gray-600 block py-2 px-8 text-sm">Login</a>
    </div>
    </nav>
    <!-- end navbar -->