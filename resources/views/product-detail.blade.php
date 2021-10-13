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
        <!-- End Link kategori -->

        <div class="md:grid md:grid-cols-2 md:gap-16 my-10 md:my-16 lg:my-28">
            <div>
              <img src="{{ $product->image }}" alt="produk" class="" style="width:674px"   />
            </div>
            <div>
             
              <div class="text-center md:text-left py-2 text-3xl border-b border-black">
                  {{ $product->first_name }} {{ $product->last_name }}
              </div>

              <div class="text-xl my-3 md:my-7">
                {{ $product->harga }}
              </div>
              <div>
                Nama : {{ $product->first_name }} {{ $product->last_name }} <br />
                Jenis : {{ $product->category->name }}    <br />
                Air  : {{ $product->air }} <br />
                Perawatan : {{ $product->perawatan }} 
              </div>

     
            <form action="{{ route('shop.detail.cart', $product) }}" method="POST" class="mt-5 md:mt-9">
              @csrf
                <button type="submit" class="border border-gray-700 text-gray-800 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white  hover:bg-black focus:outline-none focus:shadow-outline w-full" >
                    Add to cart
                </button>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection