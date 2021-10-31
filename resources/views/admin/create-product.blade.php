@include('admin.layouts.master')

@section('content')
<!-- isi Content -->
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <form class="w-full lg:w-11/12 px-4 mx-auto mt-6" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
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
                                Add Product
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
                                        value="{{ old('first_name') }}"
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
                                        value="{{ old('last_name') }}"
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
                                        value="{{ old('perawatan') }}"
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
                                        value="{{ old('jenis') }}"
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
                                        value="{{ old('air') }}"
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
                                        value="{{ old('harga') }}"
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
                                        <option value="{{ $category->id }}">
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
@endsection