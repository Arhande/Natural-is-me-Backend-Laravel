<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
            rel="stylesheet"
        />

        <style>
            @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");
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

    <body class="bg-gray-100 font-family-karla flex">
        

        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <!-- Desktop Header -->
            <header
                class="w-full items-center bg-white py-2 px-6 hidden sm:flex"
            >
                <div class="w-1/2"></div>
                <div
                    x-data="{ isOpen: false }"
                    class="relative w-1/2 flex justify-end"
                >
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
                        <img
                            src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400"
                        />
                    </button>
                    <button
                        x-show="isOpen"
                        @click="isOpen = false"
                        class="h-full w-full fixed inset-0 cursor-default"
                    ></button>
                    <div
                        x-show="isOpen"
                        class="
                            absolute
                            w-32
                            bg-white
                            rounded-lg
                            shadow-lg
                            py-2
                            mt-16
                        "
                    >
                        <a
                            href="#"
                            class="
                                block
                                px-4
                                py-2
                                account-link
                                hover:text-white
                            "
                            >Account</a
                        >
                        <a
                            href="#"
                            class="
                                block
                                px-4
                                py-2
                                account-link
                                hover:text-white
                            "
                            >Support</a
                        >
                        <form class="block
                                px-4
                                py-2
                                account-link
                                hover:text-white" method="POST" action="{{ route("logout")}}">
                            @csrf
                            <button type="submit">
                            logout</button>   
                        </form>
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
                <nav
                    :class="isOpen ? 'flex': 'hidden'"
                    class="flex flex-col pt-4"
                >
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
                    <form class="flex
                        items-center
                        text-black
                        opacity-75
                        hover:opacity-100
                        py-2
                        pl-4
                        nav-item" method="POST" action="{{ route("logout")}}">
                        @csrf
                        <button type="submit"><i class="fas fa-sign-out-alt mr-3"></i>
                        logout</button>   
                    </form>
                </nav>
                <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
            </header>

            <!-- isi Content -->
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    <form class="w-full lg:w-11/12 px-4 mx-auto mt-6" action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div
                            class="
                                relative
                                flex flex-col
                                min-w-0
                                break-words
                                w-full
                                shadow-lg
                                rounded-lg
                                bg-blueGray-100
                                border-0
                            "
                        >
                            <div class="rounded-t bg-white px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6
                                        class="
                                            text-blueGray-700 text-xl
                                            font-bold
                                        "
                                    >
                                        Edit Product
                                    </h6>
                                    <button
                                        class="
                                            bg-green-500
                                            text-white
                                            active:bg-pink-600
                                            font-bold
                                            uppercase
                                            text-xs
                                            px-4
                                            py-2
                                            rounded
                                            shadow
                                            hover:shadow-md
                                            outline-none
                                            focus:outline-none
                                            mr-1
                                            ease-linear
                                            transition-all
                                            duration-150
                                        "
                                        type="submit"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </div>

                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <h6
                                    class="
                                        text-blueGray-400 text-sm
                                        mt-3
                                        mb-6
                                        font-bold
                                        uppercase
                                    "
                                >
                                    Info Product
                                </h6>
                                <class class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                            >
                                                Firstname
                                            </label>
                                            <input
                                                type="text"
                                                value="{{ $product->first_name }}"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="first_name"
                                            />
                                            @error('first_name')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                            >
                                                LastName
                                            </label>
                                            <input
                                                value="{{ $product->last_name }}"
                                                type="text"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="last_name"
                                            />
                                            @error('last_name')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                                htmlfor="grid-password"
                                            >
                                                Perawatan
                                            </label>
                                            <input
                                                value="{{ $product->perawatan }}"
                                                type="text"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="perawatan"
                                            />
                                            @error('perawatan')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                                htmlfor="grid-password"
                                            >
                                                Jenis
                                            </label>
                                            <input
                                                value="{{ $product->jenis }}"
                                                type="text"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="jenis"
                                            />
                                            @error('jenis')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                                htmlfor="grid-password"
                                            >
                                                Air
                                            </label>
                                            <input
                                                value="{{ $product->air }}"
                                                type="text"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="air"
                                            />
                                            @error('air')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-xs
                                                    font-bold
                                                    mb-2
                                                "
                                                htmlfor="grid-password"
                                            >
                                                Harga
                                            </label>
                                            <input
                                                value="{{ $product->harga }}"
                                                type="number"
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-sm
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="harga"
                                            />
                                            @error('harga')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="w-full px-4">
                                        <div class="relative w-full mb-3">
                                            <label
                                                class="
                                                    block
                                                    uppercase
                                                    text-blueGray-600 text-base
                                                    font-bold
                                                    mb-2
                                                "
                                                htmlfor="grid-password"
                                            >
                                                Kategori
                                            </label>
                                            <select
                                                class="
                                                    border-0
                                                    px-3
                                                    py-3
                                                    placeholder-blueGray-300
                                                    text-blueGray-600
                                                    bg-white
                                                    rounded
                                                    text-base
                                                    shadow
                                                    focus:outline-none
                                                    focus:ring
                                                    w-full
                                                    ease-linear
                                                    transition-all
                                                    duration-150
                                                "
                                                name="category_id"
                                            >
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif >
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                                <div>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div
                                        class="
                                            border
                                            border-dashed
                                            border-green-500
                                            relative
                                            w-1/2
                                        "
                                    >
                                        <input
                                            value="{{ old('image') }}"
                                            type="file"
                                            class="
                                                cursor-pointer
                                                relative
                                                block
                                                opacity-0
                                                w-full
                                                h-full
                                                p-20
                                                z-50
                                            "
                                            name="image"
                                        />
                                        @error('image')
                                            <div>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div
                                            class="
                                                text-center
                                                p-10
                                                absolute
                                                top-0
                                                right-0
                                                left-0
                                                m-auto
                                            "
                                        >
                                            <h4>Upload Gambar Product 1</h4>
                                            <p
                                                class="
                                                    bg-green-500
                                                    text-white
                                                    py-3
                                                "
                                            >
                                                Select Files
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="
                                            border
                                            border-dashed
                                            border-green-500
                                            relative
                                            w-1/2
                                        "
                                    >
                                        <input
                                            value="{{ old('image_hover') }}"
                                            type="file"
                                            class="
                                                cursor-pointer
                                                relative
                                                block
                                                opacity-0
                                                w-full
                                                h-full
                                                p-20
                                                z-50
                                            "
                                            name="image_hover"
                                        />
                                        @error('image_hover')
                                            <div>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div
                                            class="
                                                text-center
                                                p-10
                                                absolute
                                                top-0
                                                right-0
                                                left-0
                                                m-auto
                                            "
                                        >
                                            <h4>Upload Gambar Product 2</h4>
                                            <p
                                                class="
                                                    bg-green-500
                                                    text-white
                                                    py-3
                                                "
                                            >
                                                Select Files
                                            </p>
                                        </div>
                                    </div>
                                </class>
                            </div>
                        </div>
                    </form>
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
            var chartOne = document.getElementById("chartOne");
            var myChart = new Chart(chartOne, {
                type: "bar",
                data: {
                    labels: [
                        "Red",
                        "Blue",
                        "Yellow",
                        "Green",
                        "Purple",
                        "Orange",
                    ],
                    datasets: [
                        {
                            label: "# of Votes",
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.2)",
                                "rgba(54, 162, 235, 0.2)",
                                "rgba(255, 206, 86, 0.2)",
                                "rgba(75, 192, 192, 0.2)",
                                "rgba(153, 102, 255, 0.2)",
                                "rgba(255, 159, 64, 0.2)",
                            ],
                            borderColor: [
                                "rgba(255, 99, 132, 1)",
                                "rgba(54, 162, 235, 1)",
                                "rgba(255, 206, 86, 1)",
                                "rgba(75, 192, 192, 1)",
                                "rgba(153, 102, 255, 1)",
                                "rgba(255, 159, 64, 1)",
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

            var chartTwo = document.getElementById("chartTwo");
            var myLineChart = new Chart(chartTwo, {
                type: "line",
                data: {
                    labels: [
                        "Red",
                        "Blue",
                        "Yellow",
                        "Green",
                        "Purple",
                        "Orange",
                    ],
                    datasets: [
                        {
                            label: "# of Votes",
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                "rgba(255, 99, 132, 0.2)",
                                "rgba(54, 162, 235, 0.2)",
                                "rgba(255, 206, 86, 0.2)",
                                "rgba(75, 192, 192, 0.2)",
                                "rgba(153, 102, 255, 0.2)",
                                "rgba(255, 159, 64, 0.2)",
                            ],
                            borderColor: [
                                "rgba(255, 99, 132, 1)",
                                "rgba(54, 162, 235, 1)",
                                "rgba(255, 206, 86, 1)",
                                "rgba(75, 192, 192, 1)",
                                "rgba(153, 102, 255, 1)",
                                "rgba(255, 159, 64, 1)",
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
