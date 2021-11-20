@extends('admin.layouts.master')

@section('title', 'dashboard')

@section('content')
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
                href="package.html"
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
                Package
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
            <form class="w-full lg:w-11/12 px-4 mx-auto mt-6" action="{{ route('admin.packages.update', ['package' => $package->id]) }}" method="POST" enctype="multipart/form-data">
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
                                Edit Package
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
                            Info Package
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
                                        Nama
                                    </label>
                                    <input
                                        type="text"
                                        value="{{ $package->nama }}"
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
                                        name="nama"
                                    />
                                    @error('nama')
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
                                        Harga
                                    </label>
                                    <input
                                        value="{{ $package->harga }}"
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
                                        name="harga"
                                    />
                                    @error('harga')
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
                                        Deskripsi 1
                                    </label>
                                    <input
                                        value="{{ $package->deskripsi1 }}"
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
                                        name="deskripsi1"
                                    />
                                    @error('deskripsi1')
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
                                        Deskripsi 2
                                    </label>
                                    <input
                                        value="{{ $package->deskripsi2 }}"
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
                                        name="deskripsi2"
                                    />
                                    @error('deskripsi2')
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
                                        Deskripsi 3
                                    </label>
                                    <input
                                        value="{{ $package->deskripsi3 }}"
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
                                        name="deskripsi3"
                                    />
                                    @error('deskripsi3')
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
                                        Deskripsi 4
                                    </label>
                                    <input
                                        value="{{ $package->deskripsi4 }}"
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
                                        name="deskripsi4"
                                    />
                                    @error('deskripsi4')
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
                                        Deskripsi 5
                                    </label>
                                    <input
                                        value="{{ $package->deskripsi5 }}"
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
                                        name="deskripsi5"
                                    />
                                    @error('deskripsi5')
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
                                        Category
                                    </label>
                                    <select class="
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
                                        " name="category" id="">
                                        @if ($package->id == 0)
                                        @else
                                        <option value="indoor" @if ($package->category == 'indoor') selected @endif>indoor</option>
                                        <option value="outdoor" @if ($package->category == 'outdoor') selected @endif >outdoor</option>
                                        @endif
                                    </select>
                                    @error('category')
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
                                    <h4>Upload Gambar Package</h4>
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
@endsection

