<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Table user start --}}
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full text-center text-sm font-light">
                                  <tr class="border-b">
                                    <th scope="col" class="whitespace-nowrap px-6 py-4 border-indigo-200 bg-neutral-500 text-white">Fullname</th>
                                    <td class="whitespace-nowrap px-6 py-4 border-b dark:border-neutral-500">{{$user->fullname}}</td>
                                  </tr>
                                  <tr class="border-b">
                                    <th scope="col" class="whitespace-nowrap px-6 py-4 border-indigo-200 bg-neutral-500 text-white">Email</th>
                                    <td class="whitespace-nowrap px-6 py-4 border-b dark:border-neutral-500">{{$user->email}}</td>
                                  </tr>
                                  <tr class="border-b">
                                    <th scope="col" class="whitespace-nowrap px-6 py-4 border-indigo-200 bg-neutral-500 text-white">address</th>
                                    <td class="whitespace-nowrap px-6 py-4 border-b dark:border-neutral-500">{{$user->address}}</td>
                                  </tr>
                                  <tr class="border-b ">
                                    <th scope="col" class="whitespace-nowrap px-6 py-4 border-indigo-200 bg-neutral-500 text-white">Phone Number</th>
                                    <td class="whitespace-nowrap px-6 py-4 border-b dark:border-neutral-500">{{$user->phoneNumber}}</td>
                                  </tr>
                                  
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                    {{-- Table user end --}}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
