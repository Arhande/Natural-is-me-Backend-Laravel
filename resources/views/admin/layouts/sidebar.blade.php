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
