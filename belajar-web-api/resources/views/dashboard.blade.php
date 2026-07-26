<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!")}}

                    <!-- MULAI TAMBAHKAN TULISANMU DI SINI -->
                    <hr class="my-4">
                    <h3 class="font-bold text-lg">Selamat Datang!</h3>
                    <p class="mt-2">Ini adalah tulisan baru yang saya tambahkan di bawah teks login. Saya siap belajar Laravel lebih jauh!</p>
                    <!-- SELESAI -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
