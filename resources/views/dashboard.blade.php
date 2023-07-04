<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- Selamat Datang! --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-emerald-700 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <p>Selamat datang, {{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Grid --}}
    <div class="grid grid-cols-4">

    </div>
</x-app-layout>
