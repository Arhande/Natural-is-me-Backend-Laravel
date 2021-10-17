@extends('layouts.master')

@section('content')

    <div class="mx-14">
        <div class="text-xl md:text-2xl lg:text-3xl font-semibold text-center my-10">
          Enjoy Shopping
          </div>
          <div class="flex justify-center border-t border-b border-black p-1 md:p-4">
             <div class="mx-3 text-sm md:text-base md:mx-12">  <a href="{{ route("shop", ['category'=> 'indoor']) }}"> INDOOR</a></div> 
              <div class="mx-3 text-sm md:text-base md:mx-12"> <a href="{{ route("shop", ['category'=> 'outdoor']) }}"> OUTDOOR</a> </div>
              <div class="mx-3 text-sm md:text-base md:mx-12"> <a href="{{ route("shop", ['category'=> 'perlengkapan']) }}">PERLENGKAPAN</a> </div>
              <div class="mx-3 text-sm md:text-base md:mx-12"> <a href="{{ route("shop", ['category'=> 'pupuk']) }}">PUPUK</a> </div>
          </div>
       <div>

    <!-- PRODUCT CARD -->
        <div class="grid grid-cols-2 md:grid-cols-4 mt-10">
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
                                    <form action="{{ route('shop.detail.cart', $product) }}" method="POST">
                                        @csrf
                                        <button class="text-sm block">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- END PRODUCT CARD -->
        </div>
    </div>
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