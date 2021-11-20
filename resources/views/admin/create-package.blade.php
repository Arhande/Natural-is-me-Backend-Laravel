@extends('admin.layouts.master')

@section('title', 'create package')

@section('content')
<!-- isi Content -->
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <form class="w-full lg:w-11/12 px-4 mx-auto mt-6" action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                Add Package
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
                                Upload
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
                                        value="{{ old('nama') }}"
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
                                        value="{{ old('harga') }}"
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
                                        value="{{ old('deskripsi1') }}"
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
                                        value="{{ old('deskripsi2') }}"
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
                                        value="{{ old('deskripsi3') }}"
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
                                        value="{{ old('deskripsi4') }}"
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
                                        value="{{ old('deskripsi5') }}"
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
                                        <option value="indoor">indoor</option>
                                        <option value="outdoor" >outdoor</option>
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
@endsection