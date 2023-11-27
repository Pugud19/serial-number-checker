<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Create product!") }}


                            <div class="col-md-10 grid-margin stretch-card">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Ada sesuatu yang salah dengan data yang kamu input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group row">
                                     <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
                                    <div class="col-span-2 lg:col-span-1">
                                        <div class=" relative ">
                                            <label for="product_name">Nama Produk</label>
                                            <input type="text"  name="product_name" class=" rounded-lg border-transparent flex-1 appearance-none border border-teal-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nama Product"/>
                                            </div>
                                    </div>
                                    <div class="col-span-2 lg:col-span-1">
                                        <div class=" relative ">
                                        <label for="serial_number">Serial Number</label>
                                        <input type="text" name="serial_number"  class=" rounded-lg border-transparent flex-1 appearance-none border border-teal-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Serial Number"/>
                                            </div>
                                    </div>
                                    <div class="col-span-2 lg:col-span-1">
                                    <div class="relative">
                                        <label for="tahun_dibuat">Tahun di buat</label>
                                        <input class="typeahead" type="date" class=" rounded-lg border-transparent flex-1 appearance-none border border-teal-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="tahun_dibuat" >
                                    </div>
                                    </div>
                                    <div class="col-span-2 lg:col-span-1">
                                    <div class="relative">
                                        <label for="foto_url">Foto Produk</label>
                                        <input type="file" name="foto_url" class="form-control  rounded-lg border-transparent flex-1 appearance-none border border-teal-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="image">

                                    </div>
                                    </div>

                                    <div class="col-span-2 text-right">
                                            <button type="submit" name="proses" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                Send
                                            </button>
                                    </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
