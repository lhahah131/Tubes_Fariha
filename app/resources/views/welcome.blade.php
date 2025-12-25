@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-pink-50">
        <!-- Background Elements with "Slow Pan" effect via float animation -->
        <div class="absolute inset-0 z-0">
             <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-purple-300/20 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4 animate-float-slow"></div>
             <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-pink-300/20 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4 animate-float-slow delay-700"></div>
             
             <!-- Cyberpunk Light Streaks (Simulated) -->
             <div class="absolute top-1/4 left-0 w-full h-1 bg-gradient-to-r from-transparent via-purple-500/10 to-transparent blur-sm opacity-50"></div>
             <div class="absolute bottom-1/4 right-0 w-full h-1 bg-gradient-to-l from-transparent via-pink-500/10 to-transparent blur-sm opacity-50"></div>
        </div>

        <div class="container mx-auto px-4 z-10 grid md:grid-cols-2 gap-12 items-start pt-10">
            <!-- Text Content: Fade In Left -->
            <div class="space-y-8 text-center md:text-left opacity-0 animate-fade-in-left">
                <div class="inline-block px-4 py-1.5 rounded-full border border-pink-500/30 bg-pink-50 text-pink-600 text-sm tracking-widest uppercase mb-4 animate-glow-pulse">
                    Perawatan Kuku Premium
                </div>
                <h1 class="text-5xl md:text-8xl font-serif font-bold leading-tight text-gray-900">
                    Tingkatkan <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 drop-shadow-sm">
                        Gaya & Penampilan
                    </span>
                </h1>
                <p class="text-gray-600 text-lg md:text-xl max-w-lg mx-auto md:mx-0 leading-relaxed delay-200 animate-fade-in-up opacity-0" style="animation-fill-mode: forwards; animation-delay: 0.3s;">
                    Rasakan seni kesempurnaan kuku. Mulai dari gaya minimalis hingga desain avant-garde, teknisi ahli kami mewujudkan visi Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start delay-500 animate-fade-in-up opacity-0" style="animation-fill-mode: forwards; animation-delay: 0.6s;">
                    <a href="#catalog" class="relative group px-8 py-4 bg-gray-900 rounded-full font-semibold text-white overflow-hidden transition-all duration-300 hover:scale-105 border border-transparent shadow-lg hover:shadow-xl">
                         <span class="relative z-10">Lihat Layanan</span>
                         <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-purple-600 opacity-90 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </a>
                    <button class="px-8 py-4 bg-white border border-gray-200 rounded-full font-semibold hover:bg-gray-50 transition-all duration-300 hover:border-gray-300 text-gray-700 shadow-sm">
                        Cerita Kami
                    </button>
                </div>
            </div>
            
            <!-- Image Content: Fade In Right -->
            <div class="relative group perspective-1000 animate-fade-in-right opacity-0" style="animation-fill-mode: forwards; animation-delay: 0.3s;">
                <!-- Animated Glow Behind -->
                <div class="absolute -inset-4 bg-gradient-to-r from-pink-400/30 to-purple-400/30 rounded-full blur-2xl opacity-60 animate-glow-pulse"></div>
                
                <div class="relative rounded-3xl overflow-hidden shadow-2xl transform transition-transform duration-700 hover:rotate-1 hover:scale-[1.02] border border-white">
                    <img src="/images/hero_natural.png" alt="Natural Elegance & Nail Artistry" class="w-full h-[400px] md:h-[450px] object-cover object-center">
                    
                    <!-- Overlay Gradient for Depth -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute bottom-8 right-8 text-right">
                         <p class="font-serif text-3xl text-white italic drop-shadow-lg">"Sederhana & Elegan"</p>
                         <p class="text-sm text-pink-200 uppercase tracking-widest mt-1">Koleksi Natural</p>
                    </div>
                </div>
                
                <!-- Floating Stats Card -->
                <div class="absolute -bottom-6 -left-6 md:bottom-12 md:-left-8 bg-white/80 backdrop-blur-xl p-5 rounded-2xl border border-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] flex items-center gap-4 animate-float-slow delay-300">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-500 to-purple-500 flex items-center justify-center font-bold text-2xl text-white shadow-lg shadow-purple-500/30">
                        5.0
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-lg">Studio Elite</p>
                        <p class="text-xs text-purple-500">500+ Klien Premium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative py-10 bg-white border-b border-gray-100 overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-100 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-pink-100 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/2"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Text Sidebar -->
                <div class="order-2 md:order-1">
                    <div class="inline-block px-4 py-1.5 rounded-full border border-purple-500/30 bg-purple-50 text-purple-600 text-xs tracking-widest uppercase mb-4">
                        Filosofi Kami
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6 text-gray-900">Tentang Glow Studio</h2>
                    
                    <div class="space-y-4 text-gray-600 leading-relaxed text-sm md:text-base">
                        <p>
                            Glow Studio adalah studio kecantikan yang berfokus pada perawatan dan seni kuku dengan sentuhan modern dan elegan. Kami percaya bahwa setiap detail kecil dapat meningkatkan rasa percaya diri dan mengekspresikan gaya personal seseorang.
                        </p>
                        <p>
                            Dengan menggabungkan teknik profesional, produk berkualitas tinggi, dan desain yang mengikuti tren terkini, Glow Studio menghadirkan pengalaman <span class="text-pink-500 font-semibold">nail care</span> yang tidak hanya indah secara visual, tetapi juga nyaman dan aman.
                        </p>
                        <p>
                            Kami berkomitmen untuk menciptakan ruang yang modern, bersih, dan inspiratif, tempat setiap pelanggan dapat menikmati perawatan dengan standar premium dan pelayanan yang ramah.
                        </p>
                    </div>

                    <div class="mt-8 flex gap-8 border-t border-gray-100 pt-8">
                         <div>
                            <span class="block text-3xl font-serif font-bold text-gray-900">500+</span>
                            <span class="text-xs uppercase tracking-widest text-gray-500">Klien Puas</span>
                         </div>
                         <div class="border-l border-gray-200 pl-8">
                            <span class="block text-3xl font-serif font-bold text-gray-900">50+</span>
                            <span class="text-xs uppercase tracking-widest text-gray-500">Penghargaan</span>
                         </div>
                    </div>
                </div>

                <!-- Image Sidebar -->
                <div class="order-1 md:order-2 relative group md:mt-12">
                    <div class="absolute -inset-2 bg-gradient-to-tr from-pink-500/20 to-purple-500/20 rounded-2xl blur-lg group-hover:blur-xl transition-all duration-500"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-gray-100 shadow-2xl">
                        <img src="/images/studio_interior.png" alt="Glow Studio Interior" class="w-full h-64 md:h-80 object-cover transform transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                             <p class="text-white font-serif text-xl italic">"Dimana keanggunan bertemu seni."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Catalog Section -->
    <section id="catalog" class="py-24 bg-gray-50 relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                 <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4 text-gray-900">Menu Layanan</h2>
                 <p class="text-gray-600 max-w-2xl mx-auto">Nikmati berbagai layanan perawatan kuku premium kami yang dirancang untuk memanjakan dan mempercantik Anda.</p>
            </div>

            <div class="space-y-16">
                <!-- Category 1: Manicures -->
                <div>
                  <h3 class="text-3xl font-serif font-bold mb-10 border-l-4 border-pink-500 pl-4 text-gray-900">Manikur Spesial</h3>
                  <div class="grid md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                        <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                            <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_gel.png');"></div>
                        </div>
                        <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Manikur Gel</h3>
                        <p class="text-gray-500 mb-4 text-xs line-clamp-2">Tahan lama, warna anti-kelupas dengan hasil kilap tinggi. Termasuk perawatan kutikula dan pijat.</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-lg font-bold text-gray-900">Rp 450.000</span>
                            <button class="px-3 py-1.5 rounded-lg bg-pink-50 text-pink-600 text-xs font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>


                    <!-- Service 2 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                        <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_art_natural.png');"></div>
                        </div>
                        <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Manikur Klasik</h3>
                        <p class="text-gray-500 mb-4 text-xs line-clamp-2">Perawatan kuku dasar termasuk pembentukan, perawatan kutikula, dan aplikasi cat kuku biasa.</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-lg font-bold text-gray-900">Rp 300.000</span>
                            <button class="px-3 py-1.5 rounded-lg bg-pink-50 text-pink-600 text-xs font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>
                     <!-- Service 3 -->
                     <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-pink-500/50 hover:shadow-xl">
                        <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_extensions_natural.png');"></div>
                        </div>
                        <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-pink-500 transition-colors">Gel Struktur</h3>
                        <p class="text-gray-500 mb-4 text-xs line-clamp-2">Penguatan untuk kuku alami agar lebih kuat dan tahan lama tanpa ekstensi.</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-lg font-bold text-gray-900">Rp 550.000</span>
                            <button class="px-3 py-1.5 rounded-lg bg-pink-50 text-pink-600 text-xs font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>
                </div>
                </div>

                <!-- Category 2: Art & Extensions -->
                <div>
                 <h3 class="text-3xl font-serif font-bold mb-10 border-l-4 border-purple-500 pl-4 text-gray-900">Seni & Ekstensi</h3>
                 <div class="grid md:grid-cols-3 gap-8">
                    <!-- Service 2 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-purple-500/50 hover:shadow-xl">
                        <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_art_natural.png');"></div>
                        </div>
                        <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-purple-500 transition-colors">Nail Art Kustom</h3>
                        <p class="text-gray-500 mb-4 text-xs line-clamp-2">Desain lukis tangan, bubuk chrome, permata, dan hiasan (per kuku).</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-lg font-bold text-gray-900">Mulai Rp 50rb</span>
                            <button class="px-3 py-1.5 rounded-lg bg-purple-50 text-purple-600 text-xs font-medium hover:bg-purple-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-purple-500/50 hover:shadow-xl">
                        <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                             <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_extensions_natural.png');"></div>
                        </div>
                        <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-purple-500 transition-colors">Ekstensi Gel X</h3>
                        <p class="text-gray-500 mb-4 text-xs line-clamp-2">Ekstensi soft gel penuh untuk panjang instan dan bentuk sempurna. Penghapusan tanpa merusak.</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-lg font-bold text-gray-900">Rp 850.000</span>
                            <button class="px-3 py-1.5 rounded-lg bg-purple-50 text-purple-600 text-xs font-medium hover:bg-purple-600 hover:text-white transition-colors">Pesan</button>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Category 3: Pedicures -->
                <div>
                     <h3 class="text-3xl font-serif font-bold mb-10 border-l-4 border-indigo-500 pl-4 text-gray-900">Lounge Pedikur</h3>
                     <div class="grid md:grid-cols-3 gap-8">
                         <!-- Service 3 -->
                        <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-indigo-500/50 hover:shadow-xl">
                            <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                                 <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_pedicure_natural.png');"></div>
                            </div>
                            <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-indigo-500 transition-colors">Pedikur Spa Mewah</h3>
                            <p class="text-gray-500 mb-4 text-xs line-clamp-2">Rendaman peremajaan, lulur, masker, dan pijat batu panas untuk kaki lelah.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="text-lg font-bold text-gray-900">Rp 650.000</span>
                                <button class="px-3 py-1.5 rounded-lg bg-pink-50 text-pink-600 text-xs font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="group bg-white border border-gray-200 rounded-2xl p-5 hover:bg-white transition-all duration-300 hover:border-indigo-500/50 hover:shadow-xl">
                            <div class="h-40 rounded-xl bg-gray-100 mb-4 overflow-hidden relative">
                                 <div class="absolute inset-0 bg-cover bg-center opacity-90 group-hover:scale-110 transition-transform duration-500" style="background-image: url('/images/catalog_classic.png');"></div>
                            </div>
                            <h3 class="text-xl font-serif font-semibold mb-2 text-gray-900 group-hover:text-indigo-500 transition-colors">Pedikur Gel Kilat</h3>
                            <p class="text-gray-500 mb-4 text-xs line-clamp-2">Pembentukan kuku, perawatan kutikula ringan, dan aplikasi gel tahan lama.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="text-lg font-bold text-gray-900">Rp 350.000</span>
                                <button class="px-3 py-1.5 rounded-lg bg-pink-50 text-pink-600 text-xs font-medium hover:bg-pink-600 hover:text-white transition-colors">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="relative py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 z-10 text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-serif font-bold mb-4 text-gray-900">Galeri Karya</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kurasi karya terbaik kami, menampilkan seni, presisi, dan tren terbaru.</p>
        </div>

        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Gallery Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-pink-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_minimalist.png" alt="Minimalist Lines" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-pink-300 uppercase tracking-widest mb-2">Koleksi: Modern</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Garis Minimalis</h3>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-purple-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/catalog_art_natural.png" alt="Soft Floral" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-purple-300 uppercase tracking-widest mb-2">Koleksi: Musim Semi</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Flora Lembut</h3>
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
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-pink-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_bridal.png" alt="Bridal Elegance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-white uppercase tracking-widest mb-2">Koleksi: Pengantin</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Esensi Mutiara</h3>
                    </div>
                </div>

                 <!-- Gallery Item 5 -->
                 <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-purple-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_dark.png" alt="Dark Academia" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-red-300 uppercase tracking-widest mb-2">Koleksi: Gelap</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Burgundy Klasik</h3>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="group relative overflow-hidden rounded-2xl bg-white border border-gray-200 hover:border-blue-500/50 hover:shadow-xl transition-all duration-500">
                    <div class="aspect-[3/4] overflow-hidden">
                         <img src="/images/gallery_natural_winter.png" alt="Seasonal Frost" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-5 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <span class="text-[10px] font-bold text-blue-300 uppercase tracking-widest mb-2">Koleksi: Musiman</span>
                        <h3 class="text-xl font-serif font-bold text-white mb-2">Musim Dingin Nyaman</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Promo/CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-pink-100 to-purple-100 z-0"></div>
        <div class="absolute inset-0 bg-cover bg-center opacity-10 mix-blend-multiply" style="background-image: url('/images/bg_glow.png');"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-6 text-purple-900">Siap Tampil Berkilau?</h2>
            <p class="text-xl text-gray-700 mb-8 max-w-2xl mx-auto">Pengunjung pertama dapat diskon 20% untuk layanan Manikur Gel pertama. Pesan janji temu Anda hari ini.</p>
            <button class="bg-purple-600 text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-purple-700 transition-transform hover:scale-105 shadow-xl hover:shadow-2xl">
                Pesan Janji Temu
            </button>
        </div>
    </section>
@endsection
