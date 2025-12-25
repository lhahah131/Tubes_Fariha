@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <!-- Gallery Header -->
    <div class="relative py-20 bg-gradient-to-br from-indigo-50 via-white to-pink-50 border-b border-gray-200">
        <div class="absolute inset-0 z-0 overflow-hidden">
             <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-3xl h-full bg-pink-300/20 rounded-full blur-[100px]"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-4 text-gray-900">Galeri Karya</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kurasi karya terbaik kami, menampilkan seni, presisi, dan tren terbaru.</p>
        </div>
    </div>

    <!-- Gallery Grid -->
    <section class="py-16 bg-white border-t border-gray-50">
        <div class="container mx-auto px-4">
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Gallery Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-pink-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_minimalist.png" alt="Garis Minimalis" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-pink-300 uppercase tracking-widest mb-2">Koleksi: Modern</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Garis Minimalis</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Detail krom lukis tangan menggunakan gel luminesensi.<br>
                            <strong>Artis:</strong> Sarah J.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-purple-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/catalog_art_natural.png" alt="Flora Lembut" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-purple-300 uppercase tracking-widest mb-2">Koleksi: Musim Semi</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Flora Lembut</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Dispersi tinta basah-di-atas-basah dengan aksen foil emas.<br>
                            <strong>Catatan:</strong> Terinspirasi oleh geode alami.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-indigo-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/catalog_extensions_natural.png" alt="Ombre French" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-indigo-300 uppercase tracking-widest mb-2">Koleksi: Klasik</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Ombre French</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Garis presisi pada dasar gel builder nude.<br>
                            <strong>Gaya:</strong> Bersih, cocok untuk kantor, modern.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-pink-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_bridal.png" alt="Keanggunan Pengantin" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-white uppercase tracking-widest mb-2">Koleksi: Pengantin</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Esensi Mutiara</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Ombre lembut dengan finishing bubuk krom.<br>
                            <strong>Acara:</strong> Pernikahan, Gala.
                        </p>
                    </div>
                </div>

                 <!-- Gallery Item 5 -->
                 <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-purple-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_dark.png" alt="Akademia Gelap" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-red-300 uppercase tracking-widest mb-2">Koleksi: Gelap</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Burgundy Klasik</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Merah ceri tua dengan lapisan atas kilap tinggi.<br>
                            <strong>Suasana:</strong> Berani, Klasik, Berbahaya.
                        </p>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-blue-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_winter.png" alt="Salju Musiman" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-blue-300 uppercase tracking-widest mb-2">Koleksi: Musiman</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Musim Dingin Nyaman</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                            <strong>Teknik:</strong> Nada biru es dengan stamping kepingan salju.<br>
                            <strong>Musim:</strong> Musim Dingin 2024.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
