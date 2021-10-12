@extends('layouts.master')

@section('content')
    <div>
        <div class="min-w-screen min-h-screen  flex items-center justify-center px-5 py-5">
          <div class=" text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width: 1000px">
            <div class="md:flex w-full">
              <div class="hidden md:block w-1/2 py-10 px-10">
                <img src="/images/login.png" alt="login" />
              </div>
              <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                  <h1 class="font-bold text-3xl text-gray-900">Register </h1>
                </div>
                <form action="{{ route('register.store') }}" method="POST">
                  @csrf
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg" > </i></div>
                        <input name="name" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500" placeholder="Username" />
                      </div>
                      @error('name')
                      <div>
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                  </div>
      
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                     
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg" > </i></div>
                        <input name="email" type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500" placeholder="email" />
                      </div>
                      @error('email')
                        <div>
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
      
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                     
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg" > </i></div>
                        <input name="password" type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500" placeholder="Password" />
                      </div>
                      @error('password')
                        <div>
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-12">
                     
                      <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg" > </i></div>
                        <input name="password_confirmation" type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500" placeholder="Confirm Password" />
                      </div>
                    </div>
                  </div>
      
      
                  <div class="flex -mx-3">
                    <div class="w-full px-3 mb-5">
                      <button type="submit" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Selanjutnya</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection