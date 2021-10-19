@extends('layouts.master')

@section('content')
    <div class="mx-5 md:mx-10 mb-20 lg:mb-32">
            
        <div class="text-center my-10 text-lg md:text-2xl font-semibold">
            KERANJANG BELANJA
        </div>

        <div>
        @foreach ($carts as $cart)
            <div class="border border-black md:py-5 lg:py-5 lg:my-3 shadow-lg">
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
                                <div class="flex flex-row border h-7 w-20 md:h-10 md:w-24 rounded-lg border-gray-400 relative">
                                    <button class="font-semibold border-r bg-gray-400 hover:bg-gray-600 text-white border-gray-400 h-full w-20 flex rounded-l focus:outline-none cursor-pointer">
                                        <span class="m-auto">-</span>
                                    </button>
                                        <div class="bg-white w-24 text-xs md:text-base flex items-center justify-center cursor-default">
                                        <span>2</span>
                                        </div>
                                    <button class="font-semibold border-l  bg-gray-400 hover:bg-gray-600 text-white border-gray-400 h-full w-20 flex rounded-r focus:outline-none cursor-pointer">
                                        <span class="m-auto">+</span>
                                    </button>
                                </div>
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
        <a href="{{ route('orders.store.get')}}">
        <button type="button" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline w-full" >
         Lanjutkan Checkout
        </button>
         </a>
    </div>
@endsection
  