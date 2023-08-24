<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-white dark:bg-slate-800 rounded-xl">
            {{ __('Add Barang') }}
            <hr>

            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <div class="py-4">
                            <x-label for="kode_items" value="{{ __('Kode Items :') }}" />
                            <x-input id="kode_items" class="block mt-1 w-full" type="text" name="kode_items"
                                :value="old('kode_items')" required />
                        </div>
                        <div class="py-4">
                            <x-label for="nama_items" value="{{ __('Nama Items :') }}" />
                            <x-input id="nama_items" class="block mt-1 w-full" type="text" name="nama_items"
                                :value="old('nama_items')" required />
                        </div>
                        <div class="py-4">
                            <x-label for="deskripsi_items" value="{{ __('Deskripsi Items :') }}" />
                            <x-input id="deskripsi_items" class="block mt-1 w-full" type="text"
                                name="deskripsi_items" :value="old('deskrips_items')" required />
                        </div>
                        <div class="py-4">
                            <x-label for="harga_items" value="{{ __('Harga Items :') }}" />
                            <x-input id="harga_items" class="block mt-1 w-full" type="number" name="harga_items"
                                :value="old('harga_items')" required />
                        </div>
                    </div>
                    <div class="basis-1"></div>
                    <div class="basis-1/2">
                        <div class="py-4">
                            <x-label for="stock_items" value="{{ __('Stock Items :') }}" />
                            <x-input id="stock_items" class="block mt-1 w-full" type="number" name="stock_items"
                                :value="old('stock_items')" required />
                        </div>
                        <div class="py-4">
                            <x-label for="kategoris_id" value="{{ __('Kategori :') }}" />
                            <select
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
                                name="kategoris_id" required>
                                <option></option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="py-4">
                            <x-label for="realeases_id" value="{{ __('Realease :') }}" />
                            <select
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
                                name="realeases_id" required>
                                <option></option>
                                @foreach ($realeases as $realease)
                                    <option value="{{ $realease->id }}">{{ $realease->nama_realease }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="py-4">
                            <x-label for="items_photo_path" value="{{ __('Photo :') }}" />
                            <div
                                class="flex mt-1 justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="items_photo_path" type="file"
                                                class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 2MB</p>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
