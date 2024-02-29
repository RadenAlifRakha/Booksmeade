<x-dashboard-layout>
    <div class="text-center">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <span class="font-semibold">Selamat datang {{ Auth::user()->name }}</span>
    </div>
    <div class="">
        <div class="grid grid-cols-4 gap-2 m-4">
            <div>
                <a href="{{ route('dataBuku.index') }}"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 items-center">

                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center">{{ $jumlahBuku }}</h5>
                    <h4 class="font-bold text-2x1 text-gray-900 text-center">Buku</h4>
                </a>
            </div>
            <div>
                <a href="{{ route('kategori.index') }}"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 items-center">

                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center">{{ $kategori }}</h5>
                    <h4 class="font-bold text-2x1 text-gray-900 text-center">Kategori</h4>
                </a>
            </div>
            <div>
                <a href="{{ route('peminjaman.index') }}"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 items-center">

                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center">{{ $peminjaman }}</h5>
                    <h4 class="font-bold text-2x1 text-gray-900 text-center">Peminjaman</h4>
                </a>
            </div>
            <div>
                <a href="{{ route('anggota.index') }}"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 items-center">

                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center">{{ $user }}</h5>
                    <h4 class="font-bold text-2x1 text-gray-900 text-center">User</h4>
                </a>
            </div>
        </div>
    </div>

</x-dashboard-layout>
