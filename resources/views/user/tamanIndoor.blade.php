
@extends('user.layouts.master')
@section('content')

<!-- Carrousel -->

<div class="text-center h-72 w-full bg-cover " style="background-image: url({{ asset('images/indoor.jpeg') }});">
    <div class="border">
  
  <div class="text-xl md:text-3xl lg:text-4xl mt-8 lg:mt-5 lg:mb-3  font-semibold ">
    Jasa Pembuatan Taman Indoor
  </div>
  <div class="text-xs  md:text-sm lg:text-base">
  Kami melayani Pembuatan, Perawatan hingga Perbaikan Taman Rumah Anda
  </div>

  <div class="my-2 lg:my-4 text-base font-semibold underline">
    MELAYANI AREA JAKARTA
  </div>

  <div class="mb-5 text-sm">
    Request Desain Taman Konsultasi Lewat Whatsapp
  </div>

  <a href="https://api.whatsapp.com/send/?phone=6285658687702" class="uppercase text-sm md:text-base  px-4 py-1 lg:px-8 lg:py-2 rounded-full bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-green-700">
  telp/sms/wa 085658687702
  </a>

  
    </div>
  </div>

  <!-- End Carrousel -->


  <!-- Card Harga Taman -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  justify-center mx-10 my-24">

    @foreach ($packages as $package)
    <!-- Card -->
    <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
      <div class="bg-white shadow-xl rounded-lg overflow-hidden">
        <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{ $package->image }});">
          
        </div>
        <div class="p-4">
          <p class="uppercase rounded tracking-wide text-sm font-bold text-gray-700">{{ $package->nama }}</p>
          <p class="text-3xl text-gray-900">Rp. {{ $package->harga }}</p>
          
        </div>
        <div class="flex p-4 border-t border-gray-300 text-gray-700">
          <form class="flex-1 inline-flex items-center" action="{{ route('shop.detail.cart.package', $package) }}" method="POST">
            @csrf
            <ul>
              <li>{{ $package->deskripsi1 }} </li>
              <li>{{ $package->deskripsi2 }}</li>
              <li>{{ $package->deskripsi3 }} </li>
              <li>{{ $package->deskripsi4 }}</li>
              <li>{{ $package->deskripsi5 }}</li>
              <br />
              <button type="submit" class="uppercase rounded  px-8 py-2  bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg hover:bg-green-700">
                Pesan
              </button>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <!-- End Card -->
    @endforeach

    

  </div>

  <!-- End Harga Taman -->



@endsection