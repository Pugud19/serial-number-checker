<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  flex justify-between">
                    <div>
                    {{ __("Selamat datang di dashboard admin!") }}

                    </div>
                    <div class="p-2">
                        <a class=" bg-green-300 rounded-xl p-2 font-bold" href="{{route('products.create')}}">+ Create</a>
                        </div>
                </div>

                <div class="relative overflow-x-auto flex justify-center">
                    <table class="table-auto w-auto shadow-md border-collapse border border-gray-200 min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">no</th>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">Nama Produk</th>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">Foto</th>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">Tahun dibuat</th>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">Serial_number</th>
                                <th class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">Setting</th>
                                {{-- <th class="px-3 border border-slate-600">Update at</th> --}}
                                {{-- <th class="px-3 border border-slate-600">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $pd)
                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{$no++}}</td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{$pd->product_name}}</td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{$pd->foto_url}}</td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">{{$pd->tahun_dibuat}}</td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 rounded-full opacity-50">
                                        </span>
                                        <span class="relative">
                                            {{$pd->serial_number}}
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200"></td>
                                {{-- <td class="px-3 border border-slate-600">{{$future->updated_at}}</td> --}}
                                {{-- <td class="px-3 py-3 border border-slate-600">
                                    <form method="POST" action="{{ route('client.destroy', $future->id) }}">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Hapus"
                                    class="bg-red-500 hover:bg-red-200 text-black hover:text-black rounded-md px-2 py-1"
                                    onclick="return confirm('Are you sure to delete?')">
                                </form>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
