
@extends('user.layouts.master')
@section('content')

<div class="text-center h-96  w-full bg-cover " style="background-image: url(/images/perawatan.png); width: 100%;">
        <div class="border">
      <div class="text-2xl md:text-3xl lg:text-5xl mt-28 md:mt-20 lg:mt-16 lg:mb-3  font-semibold ">
          Jasa Perawatan Taman
      </div>
      <div class="my-2 lg:my-4 lg:text-xl font-semibold underline">
        MELAYANI AREA JAKARTA
      </div>
      <div class="mb-5 text-sm">
        Jasa Perawatan Taman Konsultasi Lewat Whatsapp
      </div>
      <div class="mb-5 text-xl font-semibold ">
        Harga 340 Ribu / Hari
      </div>
      <a href="https://api.whatsapp.com/send/?phone=6285658687702" class="uppercase text-sm md:text-base  px-4 py-1 lg:px-8 lg:py-2 rounded-full bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">
      telp/sms/wa 085658687702
      </a>   
        </div>
      </div>


      <!-- Card Harga Perawatan Taman -->

      <div class="my-20">
            
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-2 lg:p-10 mx-auto text-gray-800 relative md:text-left">
       <div class="md:flex items-center -mx-10">
         <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
           <div class="relative">
             <img src="{{ $package->image }}" alt="" />
             <div class="border-4 border-white absolute top-10 bottom-10 left-10 right-10 z-0" >
            </div>
           </div>
         </div>
         <form class="w-full md:w-1/2 px-10" action="{{ route('shop.detail.cart.package', $package) }}" method="POST">
          @csrf
           <div class="mb-2 md:mb-8">
            
             <h1 class="font-bold uppercase text-2xl mb-5 text-center md:text-left">{{ $package->nama }}</h1>
            <div class="text-center md:text-left">
             <p class="text-sm">1. {{ $package->deskripsi1 }}   </p>
             <p class="text-sm">2. {{ $package->deskripsi2 }}  </p>
             <p class="text-sm">3. {{ $package->deskripsi3 }}  </p>
             <p class="text-sm">4. {{ $package->deskripsi4 }}  </p>
             <p class="text-sm">5. {{ $package->deskripsi5 }}  </p>
            </div>
             <div class=" mt-5 text-center md:text-left">
                  <span class="mx-2">
                    1 Hari
                  </span> <br />
                 <div class="text-lg mt-2">
                   Harga : <span class="text-green-500 font-semibold">Rp.   {{ $package->harga }} </span> 
                 </div>

             </div>
     
           </div>
           <div>
             <div class="lg:inline-block lg:align-bottom my-5">
                   
              <button type="submit" class="border border-green-700 text-gray-100 rounded-md px-4 py-2  transition duration-500 ease select-none hover:text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:shadow-outline w-full" >
                Lanjutkan Checkout
             </button>
                
               </div>
           </div>
         </fo>
       </div>
     </div>
     
     
      </div>




@endsection