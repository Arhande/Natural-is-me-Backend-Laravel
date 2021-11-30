@extends('admin.layouts.master')


@section('title', 'dashboard')

@section('content')
  <div class="w-full flex flex-col h-screen overflow-y-hidden">
      <!-- isi Content -->
    <section class=" py-1 bg-blueGray-50 overflow-y-scroll">
      <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
        <form action="{{ route('admin.orders.update', ['order'=>$order->id]) }}" method="POST">
          @csrf
          @method('PUT')
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-blueGray-700 text-2xl font-bold">
                Invoice
            </h6>
            <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
            submit
            </button>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
            <h6 class="text-blueGray-400 text-base mt-3 mb-6 font-bold uppercase">
              User Information
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                    Nama
                  </label>
                  <input disabled  value="{{$order->nama_penerima}}" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base " >
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password" >
                    No. Invoice
                  </label>
                  <input disabled  value="{{ $order->id }}" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base ">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                   Status
                  </label>
                  <select name="status" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    <option value="Menunggu Pembayaran" @if ($order->status == 'Menunggu Pembayaran') selected @endif>Menunggu Pembayaran</option>
                    <option value="Menunggu Konfirmasi" @if ($order->status == 'Menunggu Konfirmasi') selected @endif>Menunggu Konfirmasi</option>
                    <option value="Pembayaran Dikonfirmasi" @if ($order->status == 'Pembayaran Dikonfirmasi') selected @endif>Pembayaran Dikonfirmasi</option>
                    <option value="Terkirim" @if ($order->status == 'Terkirim') selected @endif >Terkirim</option>
                    <option value="Selesai" @if ($order->status == 'Selesai') selected @endif >Selesai</option>
                    <option value="Dibatalkan" @if ($order->status == 'Dibatalkan') selected @endif >Dibatalkan</option>
                </select>
                </div>
              </div>
             
            </div>
    
            <hr class="mt-6 border-b-1 border-blueGray-300">
    
            <h6 class="text-blueGray-400 text-base mt-3 mb-6 font-bold uppercase">
              Contact Information
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label disabled class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                    Alamat
                  </label>
                  <input disabled  value="{{ $order->alamat }}" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base ">
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                   Kota/Kabupaten
                  </label>
                  <input disabled value="{{ $order->kota }}" type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base " >
                </div>
              </div>
              
              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                   Kecamatan
                  </label>
                  <input disabled value="{{ $order->kecamatan }}" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base " >
                </div>
              </div>

              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-base font-bold mb-2" htmlfor="grid-password">
                   Kode Pos
                  </label>
                  <input disabled value="{{ $order->kodepos }}" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-100 rounded text-base " value="11840">
                </div>
              </div>
            </div>

            <hr class="mt-6 border-b-1 border-black">
        
            <h6 class="text-black-400 text-sm mt-3 mb-6 font-bold uppercase">
                Detail Product
            </h6>
            <div class="flex flex-wrap">

                <table class="min-w-full bg-white">
                    <thead class="bg-green-700 text-white">
                      <tr>
                        
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">No.</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Product</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jumlah Product</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Harga</td>
                      </tr>
                    </thead>
                  <tbody class="text-gray-700">
                    @foreach ($order->products as $product)
                      <tr class="bg-gray-100">
                        <td class="w-1/6 text-left py-3 px-4">{{ $loop->index + 1 }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $product->first_name }} {{ $product->last_name }}</td>
                        <td class="text-left py-3 px-4">{{ $product->pivot->qty }}</a></td>
                        <td class="text-left py-3 px-4">{{ $product->harga }}</td>
                      </tr>  
                    @endforeach
                  </tbody>
                  </table>

                 <div class="font-semibold mt-5">Total :  {{ $order->harga_total + $order->ongkir }}</div>
            </div>


    
            <hr class="mt-6 border-b-1 border-blueGray-300">
    
            <h6 class="text-blueGray-400 text-base mt-3 mb-6 font-bold uppercase">
              Catatan 
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <textarea name="catatan" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> 
                    {{ $order->catatan  }}
                  </textarea>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </section>
    </div>
@endsection
