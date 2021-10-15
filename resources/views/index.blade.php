@extends('layouts.master')

@section('content')
    <!-- Carrousel -->
    <div class="carousel relative shadow-2xl bg-white">
      <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item absolute opacity-0 h-auto" >
          <img src="/images/banner1.svg" alt="banner1">
        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 h-auto" >
          <img src="/images/banner2.svg" alt="banner2">
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
        
        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 h-auto" >
          <img src="/images/banner3.svg" alt="banner3">
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full opacity-20 bg-gray-300 hover:bg-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
    
        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
          <li class="inline-block mr-3">
            <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
          </li>
          <li class="inline-block mr-3">
            <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
          </li>
          <li class="inline-block mr-3">
            <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
          </li>
        </ol>
        
      </div>
    </div>
    <!-- end Carrousel -->


    <!-- Card -->
    <div class="mx-10 my-10">
      <div class="text-center mt-9 mb-6 font-semibold text-lg md:text-2xl md:mt-12 ">
        Spesial di Naturalisme Bulan ini
    </div>
     
    
    <div class="grid grid-cols-2 md:grid-cols-4">
        
        @foreach ($products as $product)
            <div>
                <div class="bg-white flex">
                <div class="w-44 md:w-60 p-2 md:p-4 lg:p-3  bg-gray-100 rounded-xl  shadow-xl hover:shadow-3xl  transform duration-500 ">
                    <div class="box">
                    <a href="{{ route('shop.detail', $product->id) }}"> 
                    <img class="w-48 h-40  md:w-60 md:h-44 lg:w-72  lg:h-44  object-cover rounded-t-md" src="{{ $product->image }}" alt="produk" /> 
                    <img class="w-48 h-40  md:w-60 md:h-44 lg:w-72  lg:h-44  object-cover rounded-t-md hover-img " src="{{ $product->image_hover }}" alt="produk" />     
                    </a>
                    </div>
                    <div class="mt-4">
                    <h1 class="text-base font-bold md:text-lg lg:text-xl text-gray-700"><a href="{{ route('shop.detail', $product->id) }}"><span class="text-red-800">{{ $product->first_name }}</span> {{ $product->last_name }} </a></h1>
                    <p class="text-xs md:text-sm italic mt-1 text-gray-700">{{ $product->category->name }}</p>  
                    <div class="mt-3 md:mt-5 mb-2 flex justify-between  pr-2">
                        <button class="block text-sm md:text-base font-semibold text-gray-700 cursor-auto">{{ $product->harga }}</button> 
                        <button class="text-sm block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    <!-- Link ke Shop -->
      </div>
          <div class="flex items-center justify-center">
            <a
                href="{{ route("shop")}}"
                class="my-12 font-semibold border text-center border-gray-700 text-gray-700 rounded-md px-4 py-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                Lihat Semua
            </a>
           </div>
    </div>
    <!-- end card -->


    <!-- step -->
    <div class="w-full py-12 md:pt-10" style="background-color: #F9F6F0;">
      <div class="text-center text-sm font-bold md:text-lg lg:text-xl py-5">  Hanya 4 Langkah Untuk Mendapatkan Tanaman yang Berkualitas</div>
      <div class="flex">
        <div class="w-1/4">
          <div class="relative mb-2">
            <div class="w-10 h-10 mx-auto bg-gray-600 rounded-full text-lg text-white flex items-center">
              <span class="text-center text-white w-full">
                  1
              </span>
            </div>
          </div>
    
          <div class="text-xs text-center md:text-lg font-semibold">Login</div>
        </div>
    
        <div class="w-1/4">
          <div class="relative mb-2">
            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
              <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                <div class="w-0 bg-gray-600 py-1 rounded" style="width: 100%;"></div>
              </div>
            </div>
    
            <div class="w-10 h-10 mx-auto bg-gray-600 rounded-full text-lg text-white flex items-center">
              <span class="text-center text-white w-full">
                2
              </span>
            </div>
          </div>
    
          <div class="text-xs text-center md:text-lg font-semibold">Lihat Produk</div>
        </div>
    
        <div class="w-1/4">
          <div class="relative mb-2">
            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
              <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                <div class="w-0 bg-gray-600 py-1 rounded" style="width: 33%;"></div>
              </div>
            </div>
    
            <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
              <span class="text-center text-gray-600 w-full">
                3
              </span>
            </div>
          </div>
    
          <div class="text-xs text-center md:text-lg font-semibold">Pesan / Bayar</div>
        </div>
    
        <div class="w-1/4">
          <div class="relative mb-2">
            <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
              <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                <div class="w-0 bg-gray-600 py-1 rounded" style="width: 0%;"></div>
              </div>
            </div>
    
            <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
              <span class="text-center text-gray-600 w-full">
                4
              </span>
            </div>
          </div>
    
          <div class="text-xs text-center md:text-lg font-semibold">Pengiriman</div>
        </div>
      </div>
    </div>
    <!-- endstep -->



    <!-- Card Content 1 -->
    <div class="mx-7 my-16">
        <div class="container mx-auto my-5 ">
        <div class="relative bg-white rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
        <div class="z-0 order-1  md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg ">
        <img src="images/content1.png" alt="content1" class="absolute inset-0 w-full h-full object-fill object-center" />
        <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
        <a href="#"> 
          <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">
            Jasa Pembuatan Taman Indoor & Outdoor
          </h3>  
        </a>
          <h4 class="w-full text-xl text-gray-100 leading-tight">By Naturalisme</h4>
        </div>
        <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
        </div>
        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
        <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full  rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
        
        <a href="/pages/Taman.html">    <h3 class="hidden md:block font-bold text-2xl text-gray-700 md:mb-5">
          Jasa Pembuatan Taman Indoor & Outdoor
          </h3> </a>

          <p class="text-gray-600 text-justify text-xs md:text-xs lg:text-sm ">
            Kami mengerjakan jasa pembutan taman minimalis, mengerjakan jasa pembutan taman kering, mengerjakan pembutan taman bernuansa bali, mengerjakan jasa pembutan taman bernuansa jepang, serta bisa juga membuat taman yang di sesuikan dengan konsep atau desain yang sudah anda buat sendiri keingan anda.
          </p>

          <div class="flex items-baselin" >
          
              <a
                  href="/pages/Taman.html"
                  class="mt-3 lg:mt-6 text-sm font-semibold border text-center border-gray-700 text-gray-700 rounded-md px-4 py-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                  Lihat Semua  
              </a>
          
              </div>
        </div>
        </div>
        </div>
        </div>
    </div>
  <!-- End Card content 1 -->


    <!-- content 2 -->
    <div class="mb-20 md:mb-32 lg:mb-52">
      <div class="mx-10 md:h-80" style="background-color: #00260a;">
          <div class="flex justify-center text-gray-200">
              <div class="mt-10">
                  <div class="text-center md:text-left mb-2 text-xs md:text-base lg:text-lg">Shop</div>
                  <div >
                      <img src="/images/content2.png" alt="content" class="w-60 lg:w-72"/>
                  </div>
              </div>

              <div class="mt-10 md:mx-5">
                   <div class="text-center md:text-left mb-2 text-xs md:text-base lg:text-lg">Inspirasi</div>
                  <div >
                      <img src="/images/content3.png" alt="content" class="w-60 lg:w-72"/>
                  </div>
              </div>
              <div class="mt-10 ">
              <div class="text-center md:text-left mb-2 text-xs md:text-base lg:text-lg">Pembuatan taman</div>
                  <div >
                      <img src="/images/content4.png" alt="content" class="w-60 lg:w-72"/>
                  </div>
              </div>

              
          </div>
      </div>
    </div>
    <!-- end content 2 -->
@endsection

@push('styles')
    <style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}

      .box {
    position: relative;
    display: inline-block;
    overflow: hidden;
    }

    img.hover-img{
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .box:hover img {
        opacity: 0;
    }
    .box:hover img.hover-img {
        opacity: 1;
    }
		</style>
@endpush