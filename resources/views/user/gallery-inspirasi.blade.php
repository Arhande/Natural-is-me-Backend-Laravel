@extends('user.layouts.master')


@section('content')
    <div class="text-center text-2xl my-10  font-semibold">
        GALERI
    </div>
    <div class="mx-14 mb-24">
    <div class="h-auto space-y-8 md:h-screen md:grid  md:grid-cols-4 md:grid-rows-4  gap-3 lg:gap-8 ">
        
        <div class="md:row-span-2 lg:row-span-4">
           <img src="/Images/grd1.png" alt="garden" />
           <br />
           <img src="/Images/grd.png" alt="garden" />
        </div>
        <div class="md:col-span-2 lg:col-span-3 relative">
            <img src="/Images/grd2.png" alt="garden" />
            </div>
        <div>
            <img src="/Images/grd3.png" alt="garden" />
            </div>
        <div >
            <img src="/Images/grd4.png" alt="garden" />
            </div>
        <div class="  lg:row-span-2">
            <img src="/Images/grd5.png" alt="garden" />
            </div>
        <div class=" ">
            <img src="/Images/grd6.png" alt="garden" />
            </div>
        <div class=" ">
            <img src="/Images/grd7.png" alt="garden" />
            </div>
     
        
      
        <div class="  md:col-span-2 lg:col-span-3">
        <img src="/Images/grd8.png" alt="garden" />
        </div>
    </div>

    <div class="text-center mt-10 md:mt-60">
        <a
        href="/pages/Taman.html"
        class="mt-3 lg:mt-6 text-sm md:text-lg font-semibold border text-center border-gray-700 text-gray-700 rounded-md px-4 py-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
        Lihat Semua  
    </a>
    </div>
    </div>
@endsection