<x-app-layout>
    <div class="w-full p-5 bg-white rounded-lg">

        <div class="flex h-full gap-3 items-center">
            <div class="mt-5 w-[50%] grid">
                <span class="text-center text-4xl text-gray-900 font-bold mb-4">Selamat Datang</span>
                <form action="{{ route('beranda') }}" method="GET" id="formPencarian" class="">
                    <div class="mb-5">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center p-3 pointer-events-none">
                                <svg class="w-4 h-4 text-green-900" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="pencarianBuku" name="query"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-800 focus:border-green-800"
                                placeholder="Cari buku, kategori, penulis">
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                        </div>
                    </div>
                    <div class="w-full">
                        <select id="pencarianBuku" name="query" onchange="submitKategori()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-800 focus:border-green-800 block w-full p-3 ">
                            <option selected disabled>Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->nama_kategori }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full mt-5 mb-5">
                        <a href="{{ route('buku.random') }}"
                            class="bg-transparent text-green-700 border-2 border-green-700 hover:bg-green-800 hover:text-white hover:border-transparent font-medium rounded-lg text-sm p-3   text-center me-2 flex items-center gap-2">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                            Pinjam Buku
                        </a>
                    </div>
                    <script>
                        function submitKategori() {
                            document.getElementById("formPencarian").submit();
                        }
                    </script>
                </form>
            </div>
            <div id="default-carousel" class="relative w-[50%]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel-1.png') }}"
                            class="absolute block w-[650px] h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel-2.png') }}"
                            class="absolute block w-[650px] h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel-3.png') }}"
                            class="absolute block w-[650px] h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel-4.png') }}"
                            class="absolute block w-[650px] h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/carousel-5.png') }}"
                            class="absolute block w-[650px] h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            
        </div>
        {{-- shadow  border border-gray-200 --}}

        <div class="w-full p-6 bg-white">
            <div class="">
                <div class="font-bold text-lg mb-2 text-gray-900">Daftar Buku</div>
                <div class="flex space-x-0 items-center">
                    <hr class="border-2 border-gray-900 cursor-pointer w-[105px]">
                    <hr class="border-1 border-gray-300 cursor-pointer w-full">
                </div>
            </div>
        </div>
        <div class="mb-5">
            <div class="grid grid-cols-7 gap-2" id="daftarBuku">
                @foreach ($buku as $item)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="{{ route('buku.show', $item->slug) }}">
                            <img class="rounded-t-lg w-[full] h-[245px]" src="{{ asset($item->foto) }}"
                                alt="{{ $item->foto }}" />
                        </a>
                        <div class="p-3">
                            <div>
                                @foreach ($item->kategoriBukuRelasi as $kategoriBuku)
                                    <span
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg">{{ $kategoriBuku->kategori->nama_kategori }}</span>
                                    <span
                                        class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg">{{ $item->stok }}</span>
                                @endforeach
                            </div>
                            <p class="mb-3 mt-3 text-sm font-semibold text-gray-900">
                                {{ Str::limit($item->judul, 20) }}</p>

                            <div class="flex justify-between items-center">
                                <h5 class="mb-1 text-sm font-semibold tracking-tight text-gray-900">
                                    {{ $item->penulis }}
                                </h5>
                                <div
                                    class="flex justify-end gap-2 text-lg font-bold items-center bg-gray-50 hover:bg-gray-100 py-1 px-2 rounded-full text-gray-900">
                                    @if (isset($averages[$item->id]))
                                        {{ number_format($averages[$item->id], 1) }}
                                        <input type="radio" disabled class="mask mask-star-2 bg-yellow-300" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <footer class="bg-white border-t-2">
            <div class="w-full max-w-screen-xl mx-auto p-2">
                <div class="flex items-center justify-between">
                    <a href="{{ route('beranda') }}" class="flex items-center mb- space-x-3 ">
                        <img src="{{ asset('img/logo-buku4.png') }}" alt="" width="125" height="125">
                    </a>
                </div>
                <hr class="my-2 border-gray-200 mx-auto" />
                <span class="block text-sm text-gray-500 text-center">© 2024 Booksmeade™. All Rights Reserved.</span>
            </div>
        </footer>
    </div>

</x-app-layout>
