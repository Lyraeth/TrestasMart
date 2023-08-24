<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-white dark:bg-slate-800 rounded-xl">
            {{ __('Data Barang') }}
            <br>
            <a href="{{ route('items.partials.add-items') }}" class="btn btn-accent mt-4">Add Barang</a>
        </div>
    </div>
</x-app-layout>
