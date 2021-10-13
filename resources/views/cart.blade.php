@extends('layouts.master')

@section('content')
    <div class="mx-5 md:mx-10 mb-20 lg:mb-32">
            
        <div class="text-center my-10 text-lg md:text-2xl font-semibold">
            KERANJANG BELANJA
        </div>

        <div>
        @foreach ($carts as $cart)
            <div class="border border-black md:py-5 lg:py-5 lg:my-3">
                <div class="grid grid-cols-5 items-center gap-7">
                    <div class="px-4">
                        <img src="{{ asset($cart->product->image) }}" class="w-16 md:w-36 lg:w-64" alt="product" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-xs lg:text-lg ">{{ $cart->product->first_name }} {{ $cart->product->last_name }}</h3>
                    </div>
                    <div class="text-red-500 hover:text-red-400 text-xs md:text-base">
                        <form action="{{ route('cart.remove', $cart->product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">  Hapus Produk </button>
                        </form>
                    </div>
                    <div>
                        <div class="flex flex-row h-9 w-full rounded-md relative bg-transparent mt-1" >
                            <form  action="{{ route('cart.decrement', $cart->product) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-10 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto text-base lg:text-2xl font-thin">-</span>
                                </button>  
                            </form>
                            <input value="{{ $cart->qty }}"  class=" focus:outline-none text-center w-10 bg-gray-300 font-semibold text-xs md:text-md lg:text-base hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" />        
                            <form action="{{ route('cart.increment', $cart->product) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-10 rounded-r cursor-pointer">
                                    <span class="m-auto text-base  lg:text-2xl font-thin">+</span> </button> 
                            </form>
                        </div>
                    </div>
                    <div>
                       <h3 class="text-sm md:text-lg font-semibold">{{ $cart->qty * $cart->product->harga }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
            
        </div>
        <div class="border-t border-black mt-20 py-5 text-lg font-semibold px-4">
            Total : {{ $total }}
        </div>
        <a href="{{ route("orders")}}">
        <button type="button" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline w-full" >
         Lanjutkan Checkout
        </button>
         </a>
    </div>
@endsection
  