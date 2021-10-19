@extends('layouts.master')

@section('content')
    <div class="mx-10 my-16">
        <div class="mb-8">
            <!-- Alerts -->
            <div class="bg-blue-100 px-6 py-4 my-4 rounded-md text-lg lg:flex items-center mx-auto w-full lg:justify-between">
                <div class="flex items-center mb-3 lg:mb-0">
                <svg viewBox="0 0 24 24" class="text-blue-600 w-10 h-10 md:w-8 md:h-8 lg:w-8 lg:h-8 mr-3">
                    <path fill="currentColor" d="M23.119,20,13.772,2.15h0a2,2,0,0,0-3.543,0L.881,20a2,2,0,0,0,1.772,2.928H21.347A2,2,0,0,0,23.119,20ZM11,8.423a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h-.028a1.528,1.528,0,0,1-1.522-1.47,1.476,1.476,0,0,1,1.448-1.53h.028A1.527,1.527,0,0,1,13.5,18.4,1.475,1.475,0,0,1,12.05,19.933Z" />
                </svg>
                <span class="font-sans text-xs md:text-sm lg:text-base">
                Silahkan lakukan transfer sebelum Anda melakukan konfirmasi. WhatsApp kami jika Anda ragu!
                </span>
                </div>
                 
                
                <div class="bg-blue-600 hover:bg-blue-700 text-white lg:px-6 py-2 rounded-md"> 
                    <a  href="https://api.whatsapp.com/send/?phone=6285658687702">
                    <div class="flex items-center justify-center text-sm lg:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                        Whatsapp
                    </div>
                    </a>  
                    
                </div>
                </div>    
            <!-- End Alerts -->
        </div>



        <div class="lg:grid lg:grid-cols-4 lg:gap-10">
            <div class="lg:col-span-2">
                <div class="bg-green-600 bg-gradient-to-tl from-gray-600  p-4 rounded-lg text-gray-200">
                    <h1 class="text-2xl font-semibold mb-5">Rp. {{ $order->harga_total + $order->ongkir }}</h1>
                    <p class="text-sm font-semibold">SEMUA ATAS NAMA </p>
                    <h1 class="font-bold text-xl">RIFAAT IMAPPAGANTI AWALUDDIN & NATURALISME </h1>
                </div>


        <!-- Bank TF  -->
            <div class="border border-gray-300 rounded-md p-5 mt-6 ">
                        <div class="flex items-center border-b border-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <div class="ml-4">
                        <span  class="text-lg font-semibold">Bank Transfer</span> 
                        <div class="text-xs font-light">Gunakan Bank Transfer untuk transaksi.</div>
                        </div>
                        </div>
                        <div class="flex justify-between my-2 items-center">
                            <div>
                                <div class="font-semibold">BNI</div>    
                                <div class="text-gray-700">1128483699</div>    
                            </div>
                            <div>
                                <img src="/Images/bni.png" alt="bni" width="50px" />
                            </div>
                        </div>
            </div>
       
        <!-- End Bank TF -->

        <!-- E- Wallet  -->
        <div class="border border-gray-300 rounded-md p-5 mt-6">
            <div class="flex items-center border-b border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            <div class="ml-4">
            <span  class="text-lg font-semibold">Bank Transfer</span> 
            <div class="text-xs font-light">Gunakan e-wallet untuk transaksi.</div>
            </div>
            </div>
            <div class="flex justify-between my-3 items-center border-b">
                <div>
                    <div class="font-semibold">OVO</div>    
                    <div class="text-gray-700">085718855498</div>    
                </div>
                <div>
                    <img src="/Images/ovo.png" alt="OVO" width="50px" />
                </div>     
            </div>

            <div class="flex justify-between my-3 items-center border-b">
                <div>
                    <div class="font-semibold">DANA</div>    
                    <div class="text-gray-700">085718855498</div>    
                </div>
                <div>
                    <img src="/Images/dana.png" alt="DANA" width="50px" />
                </div>     
            </div>

              <div class="flex justify-between my-3 items-center border-b">
                <div>
                    <div class="font-semibold">GOPAY</div>    
                    <div class="text-gray-700">085718855498</div>    
                </div>
                <div>
                    <img src="/Images/gopay.png" alt="GOPAY" width="50px" />
                </div>     
            </div>

            </div>
        
        <!-- End E-Wallet -->      
        </div>




        <div class="lg:col-span-2">
                <!-- Upload Image -->
                
                <div class="border border-gray-300 rounded-md p-6 mt-5 lg:mt-0">
                    <h1 class="text-lg font-bold text-center">Konfirmasi Pembayaran</h1>
                <form class="mt-8 space-y-3" action="{{ route('orders.bukti.store', ['order' => $order->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Atas Nama :</label>
                <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type placeholder="name" name="atas_nama_rekening" />
              </div>
              <div class="grid grid-cols-1 space-y-2">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Kirim Foto Pembayaran</label>
                <div class="flex items-center justify-center w-full">
                  <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col  justify-center items-center  ">
                    
                      <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                    
                      </div>
                      <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href id class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                    </div>
                    <input type="file" class="hidden" name="image_bukti" />
                  </label>
                </div>
              </div>
              <p class="text-sm text-gray-300">
                <span>File type: jpg,jpeg,png</span>
              </p>
              <div>
                <button type="submit" class="my-8 w-full flex justify-center bg-green-600 text-gray-100 p-4  rounded-full tracking-wide
                font-semibold  focus:outline-none focus:shadow-outline hover:bg-green-700 shadow-lg cursor-pointer transition ease-in duration-300">
                  Upload
                </button>
              </div>
            </form>
            
                    </div>

                <!-- End Upload Image -->
            </div>
        </div>   
      </div>
@endsection