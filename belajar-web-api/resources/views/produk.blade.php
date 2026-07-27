<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                
                <h3 class="text-lg font-bold mb-4">Daftar Produk Tersedia</h3>

                <!-- Menampilkan data dari controller -->
                <ul class="divide-y divide-gray-200">
                    @forelse ($semua_produk as $produk)
                        <li class="py-3 flex justify-between items-center">
                            <span class="font-medium text-gray-800">{{ $produk->nama_produk ?? $produk->nama }}</span>
                            <span class="text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full">
                                Rp {{ number_format($produk->harga ?? 0, 0, ',', '.') }}
                            </span>
                        </li>
                    @empty
                        <li class="py-3 text-gray-500">Belum ada data produk.</li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>