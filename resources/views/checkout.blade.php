@extends('layouts.master')

@section('content')

<!-- Detail Tagihan -->
<div class="md:mx-12 mx-8 md:my-16 my-16">
    <form action="{{ route('orders.store') }}" method="POST">
    @csrf   
    <div class="lg:grid lg:grid-cols-3 gap-8">
          <div class="col-span-2">   
              
              <div class="bg-gray-100 p-5 rounded-md">
                  <h1 class="text-center md:text-left text-xl font-semibold">Detail Tagihan</h1> 
                  <br /><br />
                  
                  <form action="#">              
                      <div class="md:flex flex-row md:space-x-4 w-full ">
                          <div class="mb-3  w-full ">
                              <label class="font-semibold text-gray-600 py-2">Nama Penerima <abbr title="required" class="text-red-600">*</abbr></label>
                              <input required="required" type="text" name="nama_penerima" id="nama_penerima" class="appearance-none block w-full  border rounded-lg h-10 px-4"  />
                              @error('nama_penerima')
                                <div>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 w-full ">
                                <label class="font-semibold text-gray-600 py-2">No. Handphone <abbr title="required" class="text-red-600">*</abbr></label>
                                <input required="required" type="number" name="handphone" id="handphone" class="appearance-none block w-full  border focus-within:border-red-200 rounded-lg h-10 px-4"  />
                                @error('handphone')
                                <div>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="w-full mb-4">
                            <label class="font-semibold text-gray-600 py-2 block"> Provinsi <abbr title="required" class="text-red-600">*</abbr></label>
                            <input type="text" name="provinsi" id="#" class="w-full py-2 px-3">
                            @error('provinsi')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="w-full mb-4">
                            <label class="font-semibold text-gray-600 py-2 block"> Kota / Kab<abbr title="required" class="text-red-600">*</abbr></label>
                            <input type="text" name="kota" id="#" class="w-full py-2 px-3/">
                            @error('kota')
                            <div>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="flex gap-6">
                            <div class="w-2/3 mb-4">
                                <label class="font-semibold text-gray-600 py-2 block"> Kecamatan<abbr title="required" class="text-red-600">*</abbr></label>
                                <input name="kecamatan" type="text" id="#" class="w-full py-2 px-3"/>
                                @error('kecamatan')
                                    <div>
                                        {{ $message }}
                                    </div>
                                @enderror
                </div>
                
                <div class="w-1/3">
                    <label class="font-semibold text-gray-600 py-2 block"> Kode Pos<abbr title="required" class="text-red-600">*</abbr></label>
                    <input required="required" type="number" name="kodepos" id="kodepos" class="appearance-none block w-full  border focus:border-blue-400 rounded-lg h-10 px-4"  />
                </div>
            </div>
            
            <div class="flex-auto w-full mb-1 py-2">
                <label class="font-semibold text-gray-600 py-2">Alamat</label>
                <textarea  placeholder="Nama Jalan, nomor rumah Rt/Rw" spellCheck="false" defaultValue=""  required name="alamat"  class=" h-20 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" >
                </textarea>
                @error('alamat')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </form>
    </div> 
</div> 
<!-- End Detail Tagihan -->


<!-- Pesanan anda -->
<div class="col-span-1 bg-gray-100 rounded-md">      
    
    <div class="bg-gray-100 rounded-md">
        <h1 class="text-center text-xl my-8 pt-8 md:pt-10 lg:pt-0 font-semibold">Pesanan Anda</h1>    
        <div class="mx-8">
            <div>
                @foreach ($carts as $cart)
                    <div class="flex justify-between my-2">
                        <div> {{ $cart->product->first_name }} {{ $cart->product->last_name }}</div>
                        <div class="font-semibold"> {{ $cart->product->harga}} * {{ $cart->qty }} pcs</div>   
                    </div>
                @endforeach
                
                <div class="mt-5 border-b-2 border-gray-300 pb-5">Sub Total :   <span class="font-semibold">{{ $total }}  </span></div>
            </div>
            
            <div class="py-5 border-b-2 border-gray-300">
                <div class="font-semibold text-xl text-center my-5">Pilih Pengiriman</div>  
                <label class="block my-2"><input type="radio" name="JNE" id="JNE" /><span class="font-semibold ml-1">JNE - REG :</span>  10.000 (1 - 2 hari )</label>
                <label class="block my-2"><input type="radio" name="JNE" id="JNE" /><span class="font-semibold ml-1">JNE - YES :</span>  34.000 (1  hari )</label>
                <label class="block my-2"><input type="radio" name="JNE" id="JNE" /><span class="font-semibold ml-1">TIKI - SDS :</span>  270.000 </label>
            </div>

            <div class="my-5">Total  : <span class="font-semibold"> {{ $total }} </span></div>
        </div>
        
        <div class="text-center mt-10 lg:mt-20">
            <button type="submit" class="border border-green-700 text-gray-100 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:shadow-outline w-1/2" >
                Lanjutkan Checkout
            </button>
            
        </div>
        
    </div>
    
</div>
</div>
</form>
</div>
<!-- End Pesanan anda -->

@endsection