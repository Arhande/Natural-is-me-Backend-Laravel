@extends('admin.layouts.master')

@section('title', 'package')

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
                <form class="block px-4 py-2 account-link hover:text-white" method="POST" action="{{ route("logout")}}">
                    @csrf
                    <button type="submit">Logout</button>   
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
                href="addPackage.html"
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
            <h1 class="text-3xl text-black pb-6">Package</h1>
            <a
                href="{{ route('admin.packages.create') }}"
                class="
                    flex
                    my-5
                    px-5
                    py-2
                    bg-green-500
                    text-white
                    rounded
                    hover:bg-green-600
                    w-40
                "
            >
                Tambah Package
            </a>
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
                                Nama Package
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
                                deskripsi 1
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
                                deskripsi 2
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
                                deskripsi 3
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
                                deskripsi 4
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
                                deskripsi 5
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
                        @foreach ($packages as $package)
                        <tr>
                            <td class="border text-left py-3 px-4">
                                {{ $loop->index + 1 }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->nama }}
                            </td>
                            <td
                                class="border w-1/5 text-left py-3 px-4"
                            >
                                Rp. {{ $package->harga }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->deskripsi1 }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->deskripsi2 }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->deskripsi3 }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->deskripsi4 }}
                            </td>
                            <td class="border text-left py-3 px-4">
                                {{ $package->deskripsi5 }}
                            </td>
                            <td>
                                <div
                                    class="
                                        flex
                                        justify-center
                                        items-center
                                        space-x-1
                                    "
                                >
                                    <a href="{{ route('admin.packages.edit', $package->id ) }}" class="bg-red-800">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="
                                                text-white
                                                p-1
                                                h-6
                                                w-6
                                            "
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
                                    </a>

                                    <form action="{{ route('admin.packages.delete', ['package' => $package->id]) }}" method="POST" class="bg-gray-800">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex justify-center items-center" >
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="
                                            text-white
                                            p-1
                                            h-6
                                            w-6
                                            "
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
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection