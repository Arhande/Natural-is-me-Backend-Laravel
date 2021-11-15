@extends('admin.layouts.master')


@section('title', 'dashboard')

@section('content')
  <div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
      <h1 class="text-3xl text-black pb-6">Dashboard</h1>

      <!-- Statistics Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div
          class="
            bg-white
            dark:bg-gray-800
            shadow-lg
            rounded-md
            flex
            items-center
            justify-between
            p-3
            border-b-4 border-green-600
            dark:border-gray-600
            text-black
            font-medium
            group
          "
        >
          <div
            class="
              flex
              justify-center
              items-center
              w-14
              h-14
              bg-white
              rounded-full
              transition-all
              duration-300
              transform
              group-hover:rotate-12
            "
          >
            <svg
              width="30"
              height="30"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="
                stroke-current
                text-green-800
                dark:text-gray-800
                transform
                transition-transform
                duration-500
                ease-in-out
              "
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
              ></path>
            </svg>
          </div>
          <div class="text-right">
            <p class="text-2xl">{{ $userCount }}</p>
            <p>Pengguna</p>
          </div>
        </div>
        <div
          class="
            bg-white
            dark:bg-gray-800
            shadow-lg
            rounded-md
            flex
            items-center
            justify-between
            p-3
            border-b-4 border-green-600
            dark:border-gray-600
            text-black
            font-medium
            group
          "
        >
          <div
            class="
              flex
              justify-center
              items-center
              w-14
              h-14
              bg-white
              rounded-full
              transition-all
              duration-300
              transform
              group-hover:rotate-12
            "
          >
            <svg
              width="30"
              height="30"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="
                stroke-current
                text-green-800
                dark:text-gray-800
                transform
                transition-transform
                duration-500
                ease-in-out
              "
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              ></path>
            </svg>
          </div>
          <div class="text-right">
            <p class="text-2xl">{{ $orderCount }}</p>
            <p>Order</p>
          </div>
        </div>
        <div
          class="
            bg-white
            dark:bg-gray-800
            shadow-lg
            rounded-md
            flex
            items-center
            justify-between
            p-3
            border-b-4 border-green-600
            dark:border-gray-600
            text-black
            font-medium
            group
          "
        >
          <div
            class="
              flex
              justify-center
              items-center
              w-14
              h-14
              bg-white
              rounded-full
              transition-all
              duration-300
              transform
              group-hover:rotate-12
            "
          >
            <svg
              width="30"
              height="30"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="
                stroke-current
                text-green-800
                dark:text-gray-800
                transform
                transition-transform
                duration-500
                ease-in-out
              "
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
              ></path>
            </svg>
          </div>
          <div class="text-right">
            <p class="text-2xl">Rp. {{ $omset }}</p>
            <p>omset</p>
          </div>
        </div>
        <div
          class="
            bg-white
            dark:bg-gray-800
            shadow-lg
            rounded-md
            flex
            items-center
            justify-between
            p-3
            border-b-4 border-green-600
            dark:border-gray-600
            text-black
            font-medium
            group
          "
        >
          <div
            class="
              flex
              justify-center
              items-center
              w-14
              h-14
              bg-white
              rounded-full
              transition-all
              duration-300
              transform
              group-hover:rotate-12
            "
          >
            <svg
              width="30"
              height="30"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              class="
                stroke-current
                text-green-800
                dark:text-gray-800
                transform
                transition-transform
                duration-500
                ease-in-out
              "
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              ></path>
            </svg>
          </div>
          <div class="text-right">
            <p class="text-2xl">{{ $totalTerjual }}</p>
            <p>Total Terjual</p>
          </div>
        </div>
      </div>
      <!-- ./Statistics Cards -->

      <div class="flex flex-wrap mt-6">
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
          <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-plus mr-3"></i> Order
          </p>
          <div class="p-6 bg-white">
            <canvas id="chartOne" width="400" height="200"></canvas>
          </div>
        </div>
        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
          <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-check mr-3"></i> Product
          </p>
          <div class="p-6 bg-white">
            <canvas id="chartTwo" width="400" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
          <i class="fas fa-list mr-3"></i> Riwayat
        </p>

        <div class="bg-white overflow-auto">
          <table class="min-w-full bg-white border">
            <thead class="bg-green-300 text-gray-700">
              <tr>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  No
                </th>
                <th
                  class="
                    w-1/5
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  Id. Pemesanan
                </th>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  Nama
                </th>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  Tanggal
                </th>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  Harga
                </th>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  status
                </th>
                <th
                  class="
                    text-left
                    py-3
                    px-4
                    uppercase
                    font-semibold
                    text-sm
                  "
                >
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <tr>
                <td class="border text-left py-3 px-4">1</td>
                <td class="border text-left py-3 px-4">id pemesanan</td>
                <td class="border w-1/5 text-left py-3 px-4">Sukimai</td>
                <td class="border text-left py-3 px-4">Tanggal</td>
                <td class="border text-left py-3 px-4">Rp.{ Harga}</td>
                <td class="border text-left py-3 px-4">
                  Packing/ Dikirim ?
                </td>
                <td>
                  <div class="flex justify-center items-center space-x-1">
                    <button class="bg-blue-800">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-white p-1 h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"
                        />
                      </svg>
                    </button>

                    <button class="bg-red-800">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-white p-1 h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                      </svg>
                    </button>

                    <button class="bg-gray-800">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-white p-1 h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
@endsection