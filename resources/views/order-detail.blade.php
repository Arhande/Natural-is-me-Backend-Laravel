@extends('layouts.master')


@section('content')
    <section class="py-1 bg-black-50">
            <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                <div
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        w-full
                        mb-6
                        shadow-lg
                        rounded-lg
                        bg-black-100
                        border-0
                    "
                >
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <h1 class="text-black text-2xl font-bold text-center">
                            INVOICE
                        </h1>
                    </div>

                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <form>
                            <h6
                                class="
                                    text-black-400 text-sm
                                    mt-3
                                    mb-6
                                    font-bold
                                    uppercase
                                "
                            >
                                User Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-black-600 text-lg
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            Nama
                                        </label>
                                        <div>{{ $order->nama_penerima }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-black-600 text-base
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            No. Invoice
                                        </label>
                                        <div>{{ $order->id }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full my-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-black-600 text-base
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            Status
                                        </label>
                                        <div
                                            class="font-semibold text-green-500"
                                        >
                                            {{ $order->status }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="mt-6 border-b-1 border-black" />

                            <h6
                                class="
                                    text-black-400 text-sm
                                    mt-3
                                    mb-6
                                    font-bold
                                    uppercase
                                "
                            >
                                Contact Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full my-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-blacktext-base
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            Alamat
                                        </label>
                                        <div>{{ $order->alamat }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-black-600 text-base
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            Kota
                                        </label>
                                        <div>{{ $order->kota }}</div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="
                                                block
                                                uppercase
                                                text-black-600 text-base
                                                font-bold
                                                mb-2
                                            "
                                            htmlfor="grid-password"
                                        >
                                            Kode Pos
                                        </label>
                                        {{ $order->kodepos }}
                                    </div>
                                </div>
                            </div>

                            <hr class="mt-6 border-b-1 border-black" />
                            <h6
                                class="
                                    text-black-400 text-sm
                                    mt-3
                                    mb-6
                                    font-bold
                                    uppercase
                                "
                            >
                                Catatan
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        @if ($order->catatan)
                                            {{ $order->catatan }}
                                        @else
                                            Tidak ada Catatan dari admin
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection