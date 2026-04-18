<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 flex justify-center">

                    <form action="/update/{{ $barang->id }}" method="POST"
                        class="space-y-6 w-full max-w-lg mx-auto border p-6 rounded-xl bg-gray-50">
                        @csrf

                        <div class="text-center mb-4 text-gray-600 font-bold uppercase tracking-widest text-sm">
                            Informasi Barang
                        </div>

                        <div>
                            <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                            <x-text-input id="nama_barang" name="nama_barang" type="text" class="mt-1 block w-full"
                                :value="old('nama_barang', $barang->nama_barang)" required />
                        </div>

                        <div>
                            <x-input-label for="kategori" :value="__('Kategori')" />
                            <x-text-input id="kategori" name="kategori" type="text" class="mt-1 block w-full"
                                :value="old('kategori', $barang->kategori)" required />
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="stok" :value="__('Stok')" />
                                <x-text-input id="stok" name="stok" type="number" class="mt-1 block w-full"
                                    :value="old('stok', $barang->stok)" required />
                            </div>
                            <div>
                                <x-input-label for="harga" :value="__('Harga')" />
                                <x-text-input id="harga" name="harga" type="number" class="mt-1 block w-full"
                                    :value="old('harga', $barang->harga)" required />
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-4">
                            <x-primary-button class="bg-blue-600">
                                {{ __('Update Data') }}
                            </x-primary-button>

                            <a href="/" class="text-sm text-gray-500 hover:text-red-600 underline transition">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
