<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <title>Naturalisme | Dashboard admin</title>
  </head>
  <body class="bg-gray-100 flex">
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
            active-nav-link
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