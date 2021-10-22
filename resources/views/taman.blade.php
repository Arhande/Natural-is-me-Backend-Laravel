
@extends('layouts.master')


@section('content')

      <!-- Carrousel -->
      <div>
          <img src="/images/banner4.svg" alt="banner4">
      </div>
      <!-- End Carrousel -->
  
       <!-- Card Content Perawatan -->
       <div class="text-center my-10 text-xl md:text-2xl lg:text-3xl font-semibold">
        Perawatan Tanaman
        </div>
       <div class="mt-10">
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-2 lg:p-10 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10">
              <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                <div class="relative">
                  <img src="/images/content1tmn.svg" alt="" />
                  <div class="border-4 border-white absolute top-10 bottom-10 left-10 right-10 z-0" >
                  </div>    
                </div>
              </div>
              <div class="w-full md:w-1/2 px-10">
                <div class="mb-2 md:mb-8">
                  <a href="{{route('perawatan')}}">
                  <h1 class="font-bold uppercase text-base md:text-xl lg:text-2xl mb-5 text-center md:text-left">Perawatan Tanaman</h1>
                  </a>
                 
                  <p class="text-xs text-center md:text-left md:text-sm"> Jasa Perawatan taman Indoor & Outdoor memberikan garansi pengerjaan sesuai waktu yang disepakati. Kami selalu memprioritaskan kepuasan pelanggan. </p>
                </div>
                <div>
                  <div class="inline-block align-bottom ml-40 mt-5 md:ml-0 mb-5">
                        
                    <a
                    href="{{route('perawatan')}}"
                    class="my-12 text-sm md:text-base font-semibold border text-center border-gray-700 text-gray-700 rounded-md px-4 py-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                    Pesan Sekarang
                     </a>
                     
                    </div>
                </div>
              </div>
            </div>
          </div>
       <!-- End Card Content Perawatan-->



       <!-- Step  -->
       <div class="mb-1">

        <div class="w-full py-6 md:mt-14 bg-white">
            <div class="text-center  text-sm font-bold md:text-lg lg:text-xl py-5 mb-8">Pelayanan Jasa Kami</div>
            <div class="flex ">
            <div class="w-1/4">
            <div class="relative mb-2">
                <div class="w-10 h-10 md:w-14 md:h-14  mx-auto  bg-white  text-lg text-white flex items-center">
                <span class="text-center text-gray-600 w-full mb-5">
                            <img src="/images/step1.svg" alt="step" />
                </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-lg font-semibold">Konsep</div>
            <div class="text-xs text-center md:text-base font-thin" >
            Desain taman bisa custom sesuai kemauan anda.
            </div>
            </div>
            <div class="w-1/4">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width:calc(100% - 2.5rem - 1rem); top: '50%'; transform: translate(-50%, -50%)">
                
                </div>
                <div class="w-10 h-10 md:w-14 md:h-14  mx-auto  bg-white  text-lg text-white flex items-center">
                <span class="text-center text-gray-600 w-full mb-5">
                        <img src="/images/step3.svg" alt="step" />
                </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-lg font-semibold">Tepat Waktu</div>
            <div class="text-xs text-center md:text-base font-thin">
                Kami berkomitmen tepat waktu, dan mengutamakan customer
            </div>
            </div>
            <div class="w-1/4">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                
                </div>
                <div class="w-10 h-10 md:w-14 md:h-14  mx-auto  bg-white  text-lg text-white flex items-center">
                <span class="text-center text-gray-600 w-full mb-5">
                            <img src="/images/step2.svg" alt="step" />
                </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-lg font-semibold">Harga Terjangkau</div>
            <div class="text-xs text-center md:text-base font-thin">
            Harga Murah & dapat menyesuaikan dengan keuangan yang anda miliki.
            </div>
            </div>
            <div class="w-1/4">
            <div class="relative mb-2">
                <div class="absolute flex align-center items-center align-middle content-center" style="width:calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                
                </div>
                <div class="w-10 h-10 md:w-14 md:h-14  mx-auto  bg-white  text-lg text-white flex items-center">
                <span class="text-center text-gray-600 w-full mb-5">
                        <img src="/images/step4.svg" alt="step" />
                </span>
                </div>
            </div>
            <div class="text-xs text-center md:text-lg font-semibold">Garansi</div>
            <div class="text-xs text-center md:text-base font-thin">kami memberikan garansi sampai tumbuh.</div>
            </div>
            </div>
            </div>  
       <!-- End Step -->


        <!-- Card Content 1 -->
            <div class="mx-7 my-16">
                <div class="container mx-auto my-5 ">
                <div class="relative bg-white rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
                <div class="z-0 order-1  md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg ">
                <img src="/images/content1.png" alt="content1" class="absolute inset-0 w-full h-full object-fill object-center" />
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <a href="/pages/taman/indoor.html"> 
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">
                    Jasa Pembuatan Taman Indoor
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
                
                <a href="{{route('tamanIndoor')}}">    <h3 class="hidden md:block font-bold text-2xl text-gray-700 md:mb-5">
                    Jasa Pembuatan Taman Indoor
                </h3> </a>

                <p class="text-gray-600 text-justify text-xs md:text-xs lg:text-sm ">
                    Taman seperti penolong manusia saat musim kemarau. Taman bisa menjadi teman hidup bagi pemilik rumah. Dengan adanya taman, sang pemilik akan terpancing jiwanya untuk menanam tanaman hijau yang bisa menyuplai oksigen. Terutama bagi Anda yang tinggal di perkotaan.
                </p>

                <div class="flex items-baselin" >
                
                    <a
                         href="{{route('tamanIndoor')}}"
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

          <!-- Card Content 1 -->
            <div class="mx-7 my-16">
                <div class="container mx-auto my-5 ">
                <div class="relative bg-white rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
                <div class="z-0 order-1  md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg ">
                <img src="/images/content2tmn.jpeg" alt="content1" class="absolute inset-0 w-full h-full object-fill object-center" />
                <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <a href="{{route('tamanOutdoor')}}"> 
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">
                  Jasa Pembuatan Taman Outdoor
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
                
                <a href="{{route('tamanOutdoor')}}">    <h3 class="hidden md:block font-bold text-2xl text-gray-700 md:mb-5">
                    Jasa Pembuatan Taman Outdoor
                </h3> </a>

                <p class="text-gray-600 text-justify text-xs md:text-xs lg:text-sm ">
                    Taman seperti penolong manusia saat musim kemarau. Taman bisa menjadi teman hidup bagi pemilik rumah. Dengan adanya taman, sang pemilik akan terpancing jiwanya untuk menanam tanaman hijau yang bisa menyuplai oksigen. Terutama bagi Anda yang tinggal di perkotaan.
                </p>

                <div class="flex items-baselin" >
                
                    <a
                        href="{{route('tamanOutdoor')}}"
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
    
        @endsection