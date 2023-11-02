{{-- /**
* NIM: 6706220043
* NAMA: Amri Elyasa
* KELAS: 46-04
*/ --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaksi View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Start transaksi form --}}
                    <form method="POST" action="{{ route('transaksi.store') }}">
                      @csrf

                      <!-- Nama Peminjam -->
                      <div>
                          <x-input-label for="peminjam" :value="__('Nama Peminjam')" />
                          <x-text-input id="peminjam" class="block mt-1 w-full" type="text" disabled placeholder="{{$peminjam}}" />
                      </div>

                      <!-- Nama Petugas -->
                      <div>
                          <x-input-label for="petugas" :value="__('Nama Petugas')" />
                          <x-text-input id="petugas" class="block mt-1 w-full" type="text" disabled placeholder="{{$petugas}}" />
                      </div>

                      <!-- Tanggal Pinjam -->
                      <div class="mt-4">
                          <x-input-label for="tanggal_pinjam" :value="__('Tanggal Pinjam')" />
                          <x-text-input id="tanggal_pinjam" class="block mt-1 w-full" type="text" disabled placeholder="{{$tanggal_pinjam}}" />
                      </div>

                      <!-- Tanggal Selesai -->
                      <div class="mt-4">
                          <x-input-label for="tanggal_selesai" :value="__('Tanggal selesai')" />
                          <x-text-input id="tanggal_selesai" class="block mt-1 w-full" type="date" :value="old('tanggalSelesai')" required autofocus autocomplete="tanggalSelesai" />
                          <x-input-error :messages="$errors->get('tanggalSelesai')" class="mt-2" />
                      </div>
                      
                      <div class="flex items-center justify-end mt-4">
                          <x-primary-button class="ml-4">
                              {{ __('Ubah') }}
                          </x-primary-button>
                      </div>
                  </form>
                  {{-- End transaksi form --}}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
