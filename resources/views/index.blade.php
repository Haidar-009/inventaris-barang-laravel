<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Inventaris Barang') }}
        </h2>
        <div class="mb-4">
            <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">
                ← Lihat Statistik Dashboard
            </a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold">List Persediaan</h3>
                        <a href="/tambah"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            + Tambah Barang
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 border">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3">Nama Barang</th>
                                    <th class="px-6 py-3">Kategori</th>
                                    <th class="px-6 py-3 text-center">Stok</th>
                                    <th class="px-6 py-3">Harga</th>
                                    <th class="px-6 py-3 text-center">Status</th>
                                    <th class="px-6 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($semuaBarang as $b)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium text-gray-900">{{ $b->nama_barang }}</td>
                                        <td class="px-6 py-4">{{ $b->kategori }}</td>
                                        <td class="px-6 py-4 text-center font-bold text-gray-700">{{ $b->stok }}
                                        </td>
                                        <td class="px-6 py-4">Rp {{ number_format($b->harga) }}</td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($b->stok < 5)
                                                <span
                                                    class="px-3 py-1 text-xs font-bold text-white bg-red-600 rounded-full shadow-sm animate-pulse">
                                                    Stok Menipis!
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
                                                    Aman
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="flex justify-center items-center space-x-2">
                                                <a href="/edit/{{ $b->id }}"
                                                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold uppercase rounded shadow transition duration-200">
                                                    Edit
                                                </a>
                                                <a href="/hapus/{{ $b->id }}"
                                                    class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-bold uppercase rounded shadow transition duration-200"
                                                    onclick="return confirm('Yakin mau hapus?')">
                                                    Hapus
                                                </a>
                                            </div>
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
</x-app-layout>
