{{-- /**
* NIM: 6706220043
* NAMA: Amri Elyasa
* KELAS: 46-04
*/ --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Table user start --}}
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full text-center text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                  <tr class="border-b border-indigo-200 bg-neutral-500 text-white">
                                    <th scope="col" class="whitespace-nowrap px-6 py-4">#</th>
                                    <th scope="col" class="whitespace-nowrap px-6 py-4">Peminjam</th>
                                    <th scope="col" class="whitespace-nowrap px-6 py-4">Petugas</th>
                                    <th scope="col" class="whitespace-nowrap px-6 py-4">Tanggal Pinjam</th>
                                    <th scope="col" class="whitespace-nowrap px-6 py-4">Tanggal Kembali</th>
                                    {{-- <th scope="col" class="whitespace-nowrap px-6 py-4">Action</th> --}}
                                  </tr>
                                </thead>
                                <tbody>

                                @foreach ($transactions as $num => $t)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $num+1 }}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="/transaksiView/{{$t->id}}">{{$t->peminjam->fullname}}</a></td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$t->petugas->fullname}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$t->tanggalPinjam}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$t->tanggalSelesai}}</td>
                                    {{-- <td class="whitespace-nowrap px-6 py-4">
                                      <a href="#" class="inline-block rounded bg-indigo-500 text-white px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-indigo-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-indigo-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-indigo-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] ">Edit</a>
                                      <a href="#" class="inline-block rounded bg-red-500 text-white px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-red-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-red-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] ">Delete</a>
                                    </td> --}}
                                </tr>
                                @endforeach
                                  
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                    {{-- Table user end --}}

                    <div class="flex items-center justify-end mt-4">
                      <x-primary-button class="ml-4">
                        <a href="/transaksiTambah">Tambah transaksi</a>
                      </x-primary-button>   
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
