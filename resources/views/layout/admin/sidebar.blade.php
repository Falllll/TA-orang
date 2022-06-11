<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <span class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</span>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <div class="w-full dropdown inline-block relative">
            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                class="flex items-center text-white w-full pl-6 py-4 opacity-75 hover:opacity-100 hover:bg-celadon-inventory"
                type="button"><i class="fas fa-cube mr-3"></i> Laporan <i
                    class="fas fa-angle-down ml-3 w-4"></i></i></button>

            <ul class="w-full dropdown-menu hidden text-gray-700 pt-1">
                <li class=""><a class="flex items-center text-gray-600 nav-item2 py-4 pl-6"
                        href="{{ route('laporan') }}"><i class="fas fa-table mr-3"></i>Laporan</a></li>
                <li class=""><a class="flex items-center text-gray-600 nav-item2 py-4 pl-6 "
                        href="{{ route('jenis-laporan') }}"><i class="fas fa-clone mr-3"></i></i>Jenis Laporan</a></li>
            </ul>
        </div>
        <a href="{{ route('gambar') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Gambar
        </a>
        <a href="{{ route('video') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Video
        </a>
    </nav>
    <div class="absolute w-full upgrade-btn bottom-0 active-nav-link font-bold text-white flex items-center justify-center py-4">
        Edukasi
    </div>
</aside>