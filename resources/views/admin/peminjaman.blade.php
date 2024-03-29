<x-dashboard-layout>
    <h1 class="text-2xl font-semibold">Data Peminjaman</h1>
    <div class="pr-6 py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex justify-between mt-4 ml-2 mr-2">
                            {{-- <button data-modal-target="modalTambah" data-modal-toggle="modalTambah" type="button" class="text-white bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-5 inline-flex items-center">
                                <svg class="w-4 h-4 text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                                Tambah
                            </button> --}}
                            <button type="button" onclick="window.open('{{ route('peminjaman.pdf') }}','_blank')"
                                class="text-white bg-secondary hover:bg-gray-700 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-5 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                Export PDF
                            </button>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Peminjam
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Nama Peminjam
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3">
                                        Foto
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Judul Buku
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Peminjaman
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Pengembalian
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status Peminjaman
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($peminjaman as $item)
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $no++ }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->users->name }}
                                        </td>
                                        {{-- <td class="px-6 py-4">
                                            <div>
                                                <button
                                                    data-modal-target="riwayatPeminjamanModal{{ $item->users->name }}"
                                                    data-modal-toggle="riwayatPeminjamanModal{{ $item->users->name }}"
                                                    type="button"
                                                    class="text-primary hover:text-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                                    {{ $item->users->name }}
                                            </div>
                                        </td> --}}
                                        <td class="px-6 py-4">
                                            <img src="/{{ $item->buku->foto }}" width="100" alt="Img"
                                                class="rounded-lg" />
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->buku->judul }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->tgl_peminjaman }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->tgl_pengembalian }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($item->status_peminjaman == 'N')
                                                <span class="text-white bg-red-400 rounded-lg py-1 px-2">Dipinjam</span>
                                            @else
                                                <span
                                                    class="text-white bg-green-400 rounded-lg py-1 px-2">Dikembalikan</span>
                                            @endif
                                            @if ($item->status_peminjaman == 'N')
                                                <form action="{{ route('peminjaman.update', $item->id) }}"
                                                    method="POST" class="">
                                                    @csrf
                                                    @method('PUT')
                                                    <div>
                                                        <button type="submit"
                                                            class=" text-primary hover:text-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-7 h-7">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                            </svg>
                                                    </div>
                                                </form>
                                            @else
                                                {{-- <form action="{{ route('peminjaman.destroy', $item->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div>
                                                        <button type="submit"
                                                            class="text-red-400 hover:text-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-7 h-7">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                    </div>
                                                </form> --}}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>