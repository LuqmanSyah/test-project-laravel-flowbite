@extends('layouts.app')

@section('content')
    <section class="bg-white dark:bg-gray-900 pt-24 px-6">
        {{-- Jumbotron --}}
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:w-[970px]">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Menyelami Dunia Ilmu di Perpustakaan Kami.</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Tempat impian dan gagasan bersatu. Atmosfer ramah, koleksi kaya. Eksplorasi, belajar, dan tumbuh bersama.
                Buka buku, bentuk masa depan kita bersama.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="{{ route('login') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Login
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            <p class="mb-8 text-lg mt-5 font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">Login
                untuk meminjam buku.</p>
        </div>
        {{-- End --}}

        {{-- New Book --}}
        <h3 class="font-bold text-3xl md:text-4xl lg:text-5xl mb-5 text-gray-900 dark:text-white">
            Buku Terbaru
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-fit">
                <a href="#">
                    <img class="rounded-t-lg object-cover" src="{{ asset('images/buku.jpg') }}" alt="buku" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Buku Baru</h5>
                    </a>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-fit">
                <a href="#">
                    <img class="rounded-t-lg object-cover" src="{{ asset('images/buku2.jpg') }}" alt="buku" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Buku Baru</h5>
                    </a>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-fit">
                <a href="#">
                    <img class="rounded-t-lg object-cover" src="{{ asset('images/buku3.jpg') }}" alt="buku" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Buku Baru</h5>
                    </a>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-fit">
                <a href="#">
                    <img class="rounded-t-lg object-cover" src="{{ asset('images/buku4.jpg') }}" alt="buku" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Buku Baru</h5>
                    </a>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>

        </div>
        <h3 class="font-normal text-base md:text-lg lg:text-lg mt-5 text-gray-900 dark:text-white hover:underline">
            <a href="" class="text-blue-500">Lihat lebih banyak...</a>
        </h3>
        {{-- End --}}
    </section>
@endsection
