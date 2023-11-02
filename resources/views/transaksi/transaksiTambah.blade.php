{{-- /**
* NIM: 6706220043
* NAMA: Amri Elyasa
* KELAS: 46-04
*/ --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrasi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Start transaksi form --}}
                    <form method="POST" action="{{ route('transaksi.store') }}">
                        @csrf

                        <!-- Nama Peminjam -->
                        <div>
                            <x-input-label for="peminjam" :value="__('Nama Peminjam')" />
                            <select id="peminjam" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="UserIdPeminjam" :value="old('UserIdPeminjam')">
                                <option value="{{$users[2]->id}}" hidden selected>{{$users[2]->fullname}}</option>
                                @foreach ($users as $u)
                                    <option value="{{$u->id}}">{{$u->fullname}}</option>
                                @endforeach
                            </select>                            
                            <x-input-error :messages="$errors->get('UserIdPeminjam')" class="mt-2" />
                        </div>

                        <!-- Nama Petugas -->
                        <div>
                            <x-input-label for="petugas" :value="__('Nama Petugas')" />
                            <select id="petugas" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="UserIdPetugas" :value="old('UserIdPetugas')">
                                @foreach ($users as $u)
                                    <option value="{{$u->id}}">{{$u->fullname}}</option>
                                @endforeach
                            </select>                            
                            <x-input-error :messages="$errors->get('UserIdPetugas')" class="mt-2" />
                        </div>

                        <!-- Tanggal Pinjam -->
                        <div class="mt-4">
                            <x-input-label for="tanggal_pinjam" :value="__('Tanggal Pinjam')" />
                            <x-text-input id="tanggal_pinjam" class="block mt-1 w-full" type="date" name="tanggalPinjam" :value="old('tanggalPinjam')" required autofocus autocomplete="tanggalPinjam" />
                            <x-input-error :messages="$errors->get('tanggalPinjam')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah') }}
                            </x-primary-button>
                        </div>
                    </form>
                    {{-- End transaksi form --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
