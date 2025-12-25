@extends('layouts.app')

@section('title', 'Service Catalog')

@section('content')
    <!-- Catalog Header -->
    <div class="relative py-12 md:py-24 bg-gradient-to-br from-indigo-50 via-white to-pink-50 border-b border-gray-200">
        <div class="absolute inset-0 z-0 overflow-hidden">
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-3xl h-full bg-pink-300/20 rounded-full blur-[100px]"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 md:mb-6 text-gray-900">Layanan Kami</h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">Jelajahi menu lengkap perawatan kuku premium dan desain artistik kami.</p>
        </div>
    </div>

    <!-- Services Catalog -->
    <section id="services" class="py-24 relative bg-gray-50">
        <div class="container mx-auto px-4">
            
            <!-- Category: Manicures -->
            <div class="mb-12 md:mb-20">
                <h3 class="text-2xl md:text-3xl font-serif font-bold mb-6 md:mb-10 border-l-4 border-pink-500 pl-4 text-gray-900">Manikur Spesial</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8">
                    <!-- Service 1 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-4 md:p-6 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                        <div class="h-32 md:h-48 rounded-xl bg-gray-100 mb-3 md:mb-6 overflow-hidden relative">
                            <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_gel.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Manikur Gel</h3>
                        <p class="text-gray-500 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Tahan lama, warna anti-kelupas dengan hasil kilap tinggi.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-gray-900">Rp 450.000</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-pink-50 text-pink-600 text-xs md:text-sm font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>

                    <!-- Service 1b -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-4 md:p-6 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                         <div class="h-32 md:h-48 rounded-xl bg-gray-100 mb-3 md:mb-6 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_art_natural.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Manikur Klasik</h3>
                        <p class="text-gray-500 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Perawatan kuku dasar termasuk pembentukan dan cat kuku.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-gray-900">Rp 300.000</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-pink-50 text-pink-600 text-xs md:text-sm font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>

                    <!-- Service 1c -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-4 md:p-6 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                         <div class="h-32 md:h-48 rounded-xl bg-gray-100 mb-3 md:mb-6 overflow-hidden relative">
                            <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/gallery_natural_minimalist.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Manikur Rusia</h3>
                        <p class="text-gray-500 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Teknik manikur kering kelas atas untuk kutikula yang lebih bersih.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-gray-900">Rp 650.000</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-pink-50 text-pink-600 text-xs md:text-sm font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category: Nail Art -->
            <div class="mb-12 md:mb-20">
                 <h3 class="text-2xl md:text-3xl font-serif font-bold mb-6 md:mb-10 border-l-4 border-purple-500 pl-4 text-gray-900">Seni & Ekstensi</h3>
                 <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8">
                    <!-- Service 2 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-4 md:p-6 hover:bg-white transition-all duration-300 hover:border-purple-500/50 hover:shadow-xl">
                        <div class="h-32 md:h-48 rounded-xl bg-gray-100 mb-3 md:mb-6 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_art_natural.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 text-gray-900 group-hover:text-purple-500 transition-colors">Nail Art Kustom</h3>
                        <p class="text-gray-500 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Desain lukis tangan, bubuk chrome, permata.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-gray-900">Mulai Rp 50rb</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-purple-50 text-purple-600 text-xs md:text-sm font-medium hover:bg-purple-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>

                     <!-- Service 2b -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-4 md:p-6 hover:bg-white transition-all duration-300 hover:border-purple-500/50 hover:shadow-xl">
                        <div class="h-32 md:h-48 rounded-xl bg-gray-100 mb-3 md:mb-6 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_extensions_natural.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 text-gray-900 group-hover:text-purple-500 transition-colors">Ekstensi Gel X</h3>
                        <p class="text-gray-500 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Ekstensi soft gel penuh untuk panjang instan.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-gray-900">Rp 850.000</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-purple-50 text-purple-600 text-xs md:text-sm font-medium hover:bg-purple-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Category: Pedicures -->
            <div>
                 <h3 class="text-2xl md:text-3xl font-serif font-bold mb-6 md:mb-10 border-l-4 border-indigo-500 pl-4 text-gray-900">Lounge Pedikur</h3>
                 <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-8">
                     <!-- Service 3 -->
                     <div class="group bg-white/5 border border-white/10 rounded-2xl p-4 md:p-6 hover:bg-white/10 transition-all duration-300 hover:border-indigo-500/30">
                        <div class="h-32 md:h-48 rounded-xl bg-gradient-to-br from-indigo-900/50 to-blue-900/50 mb-3 md:mb-6 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-70 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_classic.png');"></div>
                        </div>
                        <h3 class="text-lg md:text-2xl font-serif font-semibold mb-1 md:mb-2 group-hover:text-indigo-400 transition-colors">Luxury Spa Pedicure</h3>
                        <p class="text-gray-400 mb-3 md:mb-4 text-xs md:text-sm line-clamp-2">Rejuvenating soak, scrub, mask, and hot stone massage.</p>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mt-auto gap-2 md:gap-0">
                            <span class="text-lg md:text-xl font-bold text-white">$65</span>
                            <button class="w-full md:w-auto px-3 md:px-4 py-1.5 md:py-2 rounded-lg bg-indigo-600/20 text-indigo-300 text-xs md:text-sm font-medium hover:bg-indigo-600 hover:text-white transition-colors">Book</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
