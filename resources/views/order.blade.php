@extends('layouts.master')


@section('content')
    <div class="mx-5 md:mx-10 mb-20 lg:mb-32">    
        <div class="text-center my-10 text-lg md:text-2xl font-semibold">
           STATUS PEMBAYARAN
        </div>
      <div>
          
          <table class="min-w-full border-collapse block md:table">
              <thead class="block md:table-header-group">
                  <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                      <th class="bg-green-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">No. Invoice</th>
                      <th class="bg-green-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
                      <th class="bg-green-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
  
                      <th class="bg-green-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
                  </tr>
              </thead>
              <tbody class="block md:table-row-group">
                  @foreach ($orders as $order)
                    <tr class="bg-gray-100 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">No. Invoice</span>  {{ $order->id }}   </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{ $order->nama_penerima }}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{ $order->created_at }}</td>      
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                            <span class="bg-green-500 text-white font-semibold py-1 px-2 border border-blue-500 rounded">Sedang Dikirim</span>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 border border-blue-500 rounded"><a href="{{ route('orders.show', ['order'=>$order->id]) }}"> Lihat Invoice</a></button>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
          </table>

          </div>
          </div>
@endsection