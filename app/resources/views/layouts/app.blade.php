<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glow Studio - @yield('title', 'Seni Kuku')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-sans antialiased overflow-x-hidden selection:bg-pink-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-serif text-2xl tracking-wider font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-purple-600">
                        GLOW STUDIO
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-gray-600 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Beranda</a>
                        <a href="#about" class="text-gray-600 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang Kami</a>
                        <a href="#catalog" class="text-gray-600 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Katalog</a>
                        <a href="#gallery" class="text-gray-600 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Galeri</a>
                        <a href="#contact" class="text-gray-600 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium transition-colors">Kontak</a>
                    </div>
                </div>
                <div>
                   <a href="#" class="bg-gray-900 text-white hover:bg-gray-800 border border-transparent px-6 py-2 rounded-full text-sm font-medium transition-all hover:scale-105 active:scale-95 shadow-md hover:shadow-lg">
                        Pesan Sekarang
                   </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-white border-t border-gray-100 py-12 mt-auto">
        <div class="container mx-auto px-4 grid md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <a href="#" class="font-serif text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-purple-600 mb-4 block">
                    GLOW STUDIO
                </a>
                <p class="text-gray-500 text-sm">Mengangkat perawatan kuku menjadi sebuah seni. Bergabunglah dengan kami untuk pengalaman premium.</p>
            </div>
            
            <div>
                <h4 class="font-bold mb-4 text-gray-900">Jelajahi</h4>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li><a href="{{ route('catalog') }}" class="hover:text-pink-500 transition-colors">Layanan</a></li>
                    <li><a href="#" class="hover:text-pink-500 transition-colors">Galeri</a></li>
                    <li><a href="#" class="hover:text-pink-500 transition-colors">Artis</a></li>
                </ul>
            </div>

             <div>
                <h4 class="font-bold mb-4 text-white">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>123 Beauty Lane, Suite 100</li>
                    <li>New York, NY 10012</li>
                    <li>(212) 555-0123</li>
                    <li>hello@glowstudio.com</li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4 text-white">Follow Us</h4>
                <div class="flex space-x-4">
                     <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-pink-600 transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.38c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                     </a>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-12 pt-8 border-t border-white/5 text-center text-xs text-gray-600">
            &copy; 2025 Glow Studio. All rights reserved.
        </div>
    </footer>
</body>
</html>
