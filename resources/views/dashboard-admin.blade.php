<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naturalisme | Dashboard admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
      .font-family-karla {
        font-family: karla;
      }
      .bg-sidebar {
        background: #f8f8f8;
      }
      .active-nav-link {
        background: #fcf7f0;
      }
      .nav-item:hover {
        background: #f8f1e4;
      }
      .account-link:hover {
        background: #3d68ff;
      }
    </style>
  </head>
  <body class="bg-gray-100 font-family-karla flex">
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
      <div class="p-6">
        <a href="{{ route('admin') }}">
          <img src="/images/logo.png" alt="logo" />
        </a>
      </div>
      <nav class="text-black text-base font-semibold pt-3">
        <a
          href="{{ route('admin') }}"
          class="
            flex
            items-center
            active-nav-link
            text-black
            py-4
            pl-6
            nav-item
          "
        >
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>
        <a
          href="{{ route('admin.orders') }}"
          class="
            flex
            items-center
            text-black
            opacity-75
            hover:opacity-100
            py-4
            pl-6
            nav-item
          "
        >
          <i class="fas fa-sticky-note mr-3"></i>
          Order
        </a>
        <a
          href="{{ route('admin.products') }}"
          class="
            flex
            items-center
            text-black
            opacity-75
            hover:opacity-100
            py-4
            pl-6
            nav-item
          "
        >
          <i class="fas fa-table mr-3"></i>
          Product
        </a>
        <a
          href="{{ route('admin.history') }}"
          class="
            flex
            items-center
            text-black
            opacity-75
            hover:opacity-100
            py-4
            pl-6
            nav-item
          "
        >
          <i class="fas fa-align-left mr-3"></i>
          Riwayat
        </a>
      </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
      <!-- Desktop Header -->
      <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
          <button
            @click="isOpen = !isOpen"
            class="
              realtive
              z-10
              w-12
              h-12
              rounded-full
              overflow-hidden
              border-4 border-gray-400
              hover:border-gray-300
              focus:border-gray-300 focus:outline-none
            "
          >
            <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400" />
          </button>
          <button
            x-show="isOpen"
            @click="isOpen = false"
            class="h-full w-full fixed inset-0 cursor-default"
          ></button>
          <div
            x-show="isOpen"
            class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16"
          >
            <a href="#" class="block px-4 py-2 account-link hover:text-black"
              >Account</a
            >
            <a href="#" class="block px-4 py-2 account-link hover:text-black"
              >Support</a
            >
            <a href="#" class="block px-4 py-2 account-link hover:text-black"
              >Sign Out</a
            >
          </div>
        </div>
      </header>

      <!-- Mobile Header & Nav -->
      <header
        x-data="{ isOpen: false }"
        class="w-full bg-sidebar py-5 px-6 sm:hidden"
      >
        <div class="flex items-center justify-between">
          <a
            href="index.html"
            class="
              text-black text-3xl
              font-semibold
              uppercase
              hover:text-gray-300
            "
            >Admin</a
          >
          <button
            @click="isOpen = !isOpen"
            class="text-black text-3xl focus:outline-none"
          >
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
          </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
          <a
            href="dashboard.html"
            class="
              flex
              items-center
              active-nav-link
              text-black
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
          </a>
          <a
            href="orderAdmin.html"
            class="
              flex
              items-center
              text-black
              opacity-75
              hover:opacity-100
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-sticky-note mr-3"></i>
            Order
          </a>
          <a
            href="product.html"
            class="
              flex
              items-center
              text-black
              opacity-75
              hover:opacity-100
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-table mr-3"></i>
            Product
          </a>
          <a
            href="riwayat.html"
            class="
              flex
              items-center
              text-black
              opacity-75
              hover:opacity-100
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-align-left mr-3"></i>
            Riwayat
          </a>

          <a
            href="#"
            class="
              flex
              items-center
              text-black
              opacity-75
              hover:opacity-100
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-user mr-3"></i>
            My Account
          </a>
          <a
            href="#"
            class="
              flex
              items-center
              text-black
              opacity-75
              hover:opacity-100
              py-2
              pl-4
              nav-item
            "
          >
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
          </a>
        </nav>
        <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
      </header>

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
                <p class="text-2xl">1,257</p>
                <p>Visitors</p>
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
                <p class="text-2xl">557</p>
                <p>Orders</p>
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
                <p class="text-2xl">$11,257</p>
                <p>Sales</p>
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
                <p class="text-2xl">$75,257</p>
                <p>Balances</p>
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
    </div>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script>
      var chartOne = document.getElementById('chartOne');
      var myChart = new Chart(chartOne, {
        type: 'bar',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });

      var chartTwo = document.getElementById('chartTwo');
      var myLineChart = new Chart(chartTwo, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [
            {
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });
    </script>
  </body>
</html>
