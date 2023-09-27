@extends('app')
@include('components.navbar')
@section('content')
    <div class="container mx-auto mt-20">
        <section id="card-menu">
            <div class="flex flex-wrap gap-5">
                @foreach ($menu as $data)
                    {{-- card --}}
                <div class="py-5 px-5 w-72 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-end">
                        <span>{{$data->rate}}</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#d4c113" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z"/></svg>
                        </span>
                    </div>
                    <div class="flex justify-center rounded-lg">
                        <a href="#">
                            <img class="px-5 py-2  rounded-lg" width="300" height="100" src="{{ asset($data->gambar_menu) }}" alt="product image" />
                        </a>
                    </div>
                    <div class="pb-5">
                        <a href="#">
                            <h5 class="py-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">{{$data->nama_menu}}</h5>
                        </a>
                        <div class="flex items-center justify-between py-2">
                            <p class="text-lg text-center font-semibold text-gray-900">{{$data->harga_menu}}</p>
                            <p class="text-lg text-center font-semibold text-gray-900">{{$data->kkal}} kkal</p>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                    </div>
                @endforeach


            </div>

        </section>
    </div>

@endsection
