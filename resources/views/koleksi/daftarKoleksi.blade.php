{{-- /**
* NIM: 6706220043
* NAMA: Amri Elyasa
* KELAS: 46-04
*/ --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                  {{ $dataTable->table() }}

                  <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                      <a href="/koleksiTambah">Tambah Koleksi</a>
                    </x-primary-button>   
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
      {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
