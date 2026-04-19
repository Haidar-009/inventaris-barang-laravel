<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Dashboard Inventaris') }}</h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <canvas id="myChart" class="max-h-64"></canvas>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-4">List Persediaan</h3>
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $item)
                            <tr>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->stok }}</td>
                                <td><a href="/edit/{{ $item->id }}" class="text-blue-500">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($dataKategori->keys()) !!},
                datasets: [{
                    data: {!! json_encode($dataKategori->values()) !!},
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b']
                }]
            }
        });
    </script>
</x-app-layout>
