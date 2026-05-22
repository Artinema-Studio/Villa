<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Villa Mewah - Premium, Minimalis & Modern</title>
        <meta name="description" content="Website landing page untuk villa mewah dengan desain modern, minimalis, dan elegan.">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        
        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FAF9F6] text-[#1C2A22] font-body antialiased">
        
        <!-- Sticky Navbar -->
        <header id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-colors duration-500 bg-transparent text-white border-b border-transparent">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="#" class="text-2xl font-heading font-bold tracking-wider">VILLA</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="#about" class="hover:text-[#C5A880] transition-colors">About</a>
                    <a href="#rooms" class="hover:text-[#C5A880] transition-colors">Villas</a>
                    <a href="#gallery" class="hover:text-[#C5A880] transition-colors">Gallery</a>
                    <a href="#amenities" class="hover:text-[#C5A880] transition-colors">Amenities</a>
                    <a href="#faq" class="hover:text-[#C5A880] transition-colors">FAQ</a>
                </nav>
                <a href="#booking" class="hidden md:inline-flex items-center justify-center px-6 py-2 border border-current rounded-sm hover:bg-white hover:text-[#1C2A22] transition-colors duration-300">
                    Book Now
                </a>
                <button class="md:hidden text-current" aria-label="Menu">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </header>

        <!-- 1. Hero Section -->
        <section id="hero" class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=2000&q=80" alt="Luxury Villa Exterior" class="w-full h-full object-cover" loading="eager">
                <div class="absolute inset-0 bg-black/50"></div>
            </div>
            <div class="relative z-10 text-center text-white px-6 mt-16 animate-fade-in-up">
                <h1 class="font-heading text-5xl md:text-7xl lg:text-8xl mb-6 font-medium tracking-wide">
                    Di Tengah <i class="font-normal">Keindahan</i>
                </h1>
                <p class="text-lg md:text-xl font-light mb-10 max-w-2xl mx-auto tracking-wide text-white/90">
                    Sebuah persembahan kemewahan tropis untuk pengalaman menginap yang tak terlupakan.
                </p>
                <a href="#booking" class="group inline-flex items-center justify-center px-8 py-4 bg-[#C5A880] text-white hover:bg-[#BFA37C] transition-colors duration-300 rounded-sm text-lg uppercase tracking-widest text-sm font-medium">
                    Pesan Sekarang
                    <i data-lucide="arrow-right" class="ml-3 w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </section>

        <main>
            <!-- 2. Tentang Villa (About Us) -->
            <section id="about" class="py-24 md:py-32 px-6 container mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                    <div class="lg:w-1/2 relative scroll-reveal">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=800&q=80" alt="Villa Interior" class="w-4/5 h-auto object-cover rounded-sm shadow-md" loading="lazy">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=600&q=80" alt="Villa Pool" class="w-3/5 h-auto object-cover absolute -bottom-12 -right-4 rounded-sm shadow-lg border-4 border-[#FAF9F6]" loading="lazy">
                    </div>
                    <div class="lg:w-1/2 mt-16 lg:mt-0 scroll-reveal">
                        <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Tentang Kami</h4>
                        <h2 class="font-heading text-4xl md:text-5xl mb-6 text-[#1C2A22]">Harmoni Antara Alam & Kemewahan</h2>
                        <p class="text-[#4E5E55] leading-relaxed mb-6 text-lg">
                            Didesain dengan konsep minimalis tropis, villa kami menawarkan oase ketenangan di tengah hiruk-pikuk kehidupan modern. Setiap sudut ruang dirancang untuk memaksimalkan cahaya alami dan hembusan angin yang menyegarkan.
                        </p>
                        <p class="text-[#4E5E55] leading-relaxed mb-8">
                            Dengan fasilitas premium dan pelayanan bintang lima, kami mengundang Anda untuk meresapi makna liburan yang sesungguhnya.
                        </p>
                        <a href="#gallery" class="inline-flex items-center text-[#1C2A22] font-medium uppercase tracking-wider text-sm hover:text-[#C5A880] transition-colors border-b border-[#1C2A22] hover:border-[#C5A880] pb-1">
                            Eksplorasi Galeri <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!-- 3. Daftar Kamar/Villa -->
            <section id="rooms" class="py-24 bg-white">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16 scroll-reveal">
                        <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Akomodasi</h4>
                        <h2 class="font-heading text-4xl md:text-5xl text-[#1C2A22]">Pilihan Ruang Istirahat</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                        <!-- Room 1 -->
                        <div class="group cursor-pointer scroll-reveal">
                            <div class="relative overflow-hidden rounded-sm mb-6 shadow-sm group-hover:shadow-md transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" alt="Deluxe Suite" class="w-full h-[300px] object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 text-sm font-medium text-[#1C2A22] rounded-sm">
                                    Rp 2.500.000 / malam
                                </div>
                            </div>
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-heading text-2xl text-[#1C2A22] mb-2 group-hover:text-[#C5A880] transition-colors">Deluxe Suite</h3>
                                    <p class="text-[#4E5E55] text-sm flex items-center gap-4">
                                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-4 h-4"></i> 45 m²</span>
                                        <span class="flex items-center gap-1"><i data-lucide="users" class="w-4 h-4"></i> 2 Orang</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Room 2 -->
                        <div class="group cursor-pointer scroll-reveal delay-100">
                            <div class="relative overflow-hidden rounded-sm mb-6 shadow-sm group-hover:shadow-md transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=800&q=80" alt="Premium Pool Villa" class="w-full h-[300px] object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 text-sm font-medium text-[#1C2A22] rounded-sm">
                                    Rp 4.000.000 / malam
                                </div>
                            </div>
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-heading text-2xl text-[#1C2A22] mb-2 group-hover:text-[#C5A880] transition-colors">Premium Pool Villa</h3>
                                    <p class="text-[#4E5E55] text-sm flex items-center gap-4">
                                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-4 h-4"></i> 80 m²</span>
                                        <span class="flex items-center gap-1"><i data-lucide="users" class="w-4 h-4"></i> 2 Orang</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Room 3 -->
                        <div class="group cursor-pointer scroll-reveal delay-200">
                            <div class="relative overflow-hidden rounded-sm mb-6 shadow-sm group-hover:shadow-md transition-shadow duration-300">
                                <img src="https://images.unsplash.com/photo-1618773928120-2c70281bd74f?auto=format&fit=crop&w=800&q=80" alt="Family Penthouse" class="w-full h-[300px] object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 text-sm font-medium text-[#1C2A22] rounded-sm">
                                    Rp 7.500.000 / malam
                                </div>
                            </div>
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-heading text-2xl text-[#1C2A22] mb-2 group-hover:text-[#C5A880] transition-colors">Family Penthouse</h3>
                                    <p class="text-[#4E5E55] text-sm flex items-center gap-4">
                                        <span class="flex items-center gap-1"><i data-lucide="maximize" class="w-4 h-4"></i> 150 m²</span>
                                        <span class="flex items-center gap-1"><i data-lucide="users" class="w-4 h-4"></i> 6 Orang</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. Galeri Foto -->
            <section id="gallery" class="py-24 container mx-auto px-6">
                <div class="text-center mb-16 scroll-reveal">
                    <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Visual</h4>
                    <h2 class="font-heading text-4xl md:text-5xl text-[#1C2A22]">Galeri Villa</h2>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px] md:auto-rows-[300px]">
                    <div class="col-span-2 row-span-2 overflow-hidden rounded-sm group scroll-reveal">
                        <img src="{{ asset('build/assets/pool.jpg') }}" alt="Pool View" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="overflow-hidden rounded-sm group scroll-reveal delay-100">
                        <img src="{{ asset('build/assets/livingroom.jpg') }}" alt="Living Room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="overflow-hidden rounded-sm group scroll-reveal delay-200">
                        <img src="{{ asset('build/assets/Bathroom.jpg') }}" alt="Bathroom" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="col-span-2 overflow-hidden rounded-sm group scroll-reveal delay-300">
                        <img src="{{ asset('build/assets/Exteriorvilla.jpg') }}" alt="Exterior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                </div>
            </section>

            <!-- 5. Fasilitas (Amenities) -->
            <section id="amenities" class="py-24 bg-white">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16 scroll-reveal">
                        <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Kenyamanan</h4>
                        <h2 class="font-heading text-4xl md:text-5xl text-[#1C2A22]">Fasilitas Premium</h2>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
                        <div class="scroll-reveal">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="waves" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">Private Pool</h4>
                            <p class="text-sm text-[#4E5E55]">Kolam renang pribadi di setiap villa.</p>
                        </div>
                        <div class="scroll-reveal delay-75">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="wifi" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">Wi-Fi Cepat</h4>
                            <p class="text-sm text-[#4E5E55]">Koneksi internet tanpa batas.</p>
                        </div>
                        <div class="scroll-reveal delay-150">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="coffee" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">Sarapan Pagi</h4>
                            <p class="text-sm text-[#4E5E55]">Menu sarapan spesial setiap hari.</p>
                        </div>
                        <div class="scroll-reveal delay-200">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="wind" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">AC & Kipas</h4>
                            <p class="text-sm text-[#4E5E55]">Pengatur suhu ruangan yang nyaman.</p>
                        </div>
                        <div class="scroll-reveal delay-300">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="shield-check" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">Keamanan 24/7</h4>
                            <p class="text-sm text-[#4E5E55]">Penjagaan dan privasi terjamin.</p>
                        </div>
                        <div class="scroll-reveal delay-500">
                            <div class="w-20 h-20 mx-auto bg-[#FAF9F6] rounded-full flex items-center justify-center mb-4 transition-transform hover:-translate-y-2 duration-300">
                                <i data-lucide="utensils-crossed" class="w-8 h-8 text-[#C5A880]"></i>
                            </div>
                            <h4 class="font-medium text-[#1C2A22] mb-2">Dapur Pribadi</h4>
                            <p class="text-sm text-[#4E5E55]">Dilengkapi alat masak modern.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 6. Testimoni (Reviews) -->
            <section class="py-24 container mx-auto px-6">
                <div class="max-w-4xl mx-auto text-center relative scroll-reveal">
                    <div class="absolute left-1/2 -top-8 -translate-x-1/2 text-[#C5A880]/20">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <h2 class="font-heading text-3xl md:text-4xl text-[#1C2A22] leading-relaxed relative z-10 italic mb-8">
                        "Pengalaman menginap yang luar biasa. Desain arsitekturnya sungguh memanjakan mata, sangat tenang dan pelayanannya sangat sempurna."
                    </h2>
                    <p class="font-medium text-[#C5A880] uppercase tracking-widest text-sm mb-1">Sarah & Michael</p>
                    <p class="text-[#4E5E55] text-sm">Tamu dari Sydney, Australia</p>
                    
                    <div class="flex justify-center gap-3 mt-10">
                        <button class="w-3 h-3 rounded-full bg-[#C5A880]" aria-label="Slide 1"></button>
                        <button class="w-3 h-3 rounded-full bg-[#C5A880]/30 hover:bg-[#C5A880]/60 transition-colors" aria-label="Slide 2"></button>
                        <button class="w-3 h-3 rounded-full bg-[#C5A880]/30 hover:bg-[#C5A880]/60 transition-colors" aria-label="Slide 3"></button>
                    </div>
                </div>
            </section>

            <!-- 7. Lokasi & Maps -->
            <section class="py-0 bg-[#1C2A22] text-[#FAF9F6]">
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:w-1/2 p-12 lg:p-24 flex flex-col justify-center scroll-reveal">
                        <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Lokasi</h4>
                        <h2 class="font-heading text-4xl mb-8">Tersembunyi, Namun Dekat</h2>
                        <p class="text-[#FAF9F6]/80 mb-10 leading-relaxed">
                            Terletak di area premium yang dikelilingi sawah hijau, memberikan ketenangan tanpa mengorbankan aksesibilitas ke berbagai objek wisata utama.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between border-b border-[#FAF9F6]/20 pb-2">
                                <span>Pantai Terdekat</span>
                                <span class="font-medium text-[#C5A880]">15 Menit</span>
                            </li>
                            <li class="flex items-center justify-between border-b border-[#FAF9F6]/20 pb-2">
                                <span>Pusat Kota</span>
                                <span class="font-medium text-[#C5A880]">10 Menit</span>
                            </li>
                            <li class="flex items-center justify-between border-b border-[#FAF9F6]/20 pb-2">
                                <span>Bandara Internasional</span>
                                <span class="font-medium text-[#C5A880]">45 Menit</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 h-[400px] lg:h-auto scroll-reveal">
                        <!-- Menggunakan iframe map sederhana dengan Tailwind filter untuk grayscale -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126214.36859344464!2d115.08742880785167!3d-8.45547143431362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd218080c5f0a0d%3A0xc3b9991206d203a6!2sUbud%2C%20Gianyar%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale contrast-125 object-cover w-full h-full"
                        ></iframe>
                    </div>
                </div>
            </section>

            <!-- 8. Booking CTA -->
            <section id="booking" class="py-24 bg-[#FAF9F6]">
                <div class="container mx-auto px-6 max-w-4xl scroll-reveal">
                    <div class="bg-white p-10 md:p-16 rounded-sm shadow-md">
                        <div class="text-center mb-10">
                            <h2 class="font-heading text-4xl text-[#1C2A22] mb-4">Rencanakan Kedatangan Anda</h2>
                            <p class="text-[#4E5E55]">Silakan isi detail di bawah ini, kami akan menghubungi Anda untuk konfirmasi.</p>
                        </div>
                        <form class="space-y-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="relative">
                                    <input type="text" id="name" class="block w-full border-0 border-b border-[#1C2A22]/20 bg-transparent py-2 px-0 text-[#1C2A22] placeholder:text-transparent focus:border-[#C5A880] focus:ring-0 appearance-none peer" placeholder="Nama Lengkap" />
                                    <label for="name" class="absolute left-0 -top-3.5 text-xs text-[#4E5E55] transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-[#1C2A22]/50 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-[#C5A880]">Nama Lengkap</label>
                                </div>
                                <div class="relative">
                                    <input type="email" id="email" class="block w-full border-0 border-b border-[#1C2A22]/20 bg-transparent py-2 px-0 text-[#1C2A22] placeholder:text-transparent focus:border-[#C5A880] focus:ring-0 appearance-none peer" placeholder="Email" />
                                    <label for="email" class="absolute left-0 -top-3.5 text-xs text-[#4E5E55] transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-[#1C2A22]/50 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-[#C5A880]">Alamat Email</label>
                                </div>
                                <div class="relative">
                                    <input type="date" id="checkin" class="block w-full border-0 border-b border-[#1C2A22]/20 bg-transparent py-2 px-0 text-[#1C2A22] focus:border-[#C5A880] focus:ring-0 appearance-none" />
                                    <label for="checkin" class="absolute left-0 -top-4 text-xs text-[#4E5E55]">Tanggal Check-in</label>
                                </div>
                                <div class="relative">
                                    <input type="date" id="checkout" class="block w-full border-0 border-b border-[#1C2A22]/20 bg-transparent py-2 px-0 text-[#1C2A22] focus:border-[#C5A880] focus:ring-0 appearance-none" />
                                    <label for="checkout" class="absolute left-0 -top-4 text-xs text-[#4E5E55]">Tanggal Check-out</label>
                                </div>
                            </div>
                            <div class="text-center pt-4">
                                <button type="button" class="inline-flex items-center justify-center px-10 py-4 bg-[#1C2A22] text-white hover:bg-[#2A3F33] transition-colors duration-300 rounded-sm text-sm uppercase tracking-widest font-medium w-full md:w-auto">
                                    Kirim Permintaan Reservasi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- 9. FAQ -->
            <section id="faq" class="py-24 bg-white border-t border-[#FAF9F6]">
                <div class="container mx-auto px-6 max-w-3xl">
                    <div class="text-center mb-16 scroll-reveal">
                        <h4 class="text-[#C5A880] font-medium tracking-widest uppercase mb-4 text-sm">Pertanyaan</h4>
                        <h2 class="font-heading text-4xl text-[#1C2A22]">Yang Sering Ditanyakan</h2>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Accordion Item 1 -->
                        <div class="border-b border-[#1C2A22]/10 pb-4 faq-item scroll-reveal">
                            <button class="w-full text-left flex justify-between items-center py-4 text-[#1C2A22] font-medium hover:text-[#C5A880] transition-colors faq-toggle">
                                <span>Apakah sarapan sudah termasuk dalam harga kamar?</span>
                                <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                <p class="text-[#4E5E55] pb-4 leading-relaxed">
                                    Ya, semua pemesanan kamar kami sudah termasuk sarapan pagi untuk 2 orang per kamar. Menu dapat disesuaikan dengan permintaan khusus seperti vegetarian atau bebas gluten jika diinformasikan sebelumnya.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Accordion Item 2 -->
                        <div class="border-b border-[#1C2A22]/10 pb-4 faq-item scroll-reveal delay-75">
                            <button class="w-full text-left flex justify-between items-center py-4 text-[#1C2A22] font-medium hover:text-[#C5A880] transition-colors faq-toggle">
                                <span>Bagaimana kebijakan pembatalan (cancellation policy)?</span>
                                <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                <p class="text-[#4E5E55] pb-4 leading-relaxed">
                                    Pembatalan gratis dapat dilakukan maksimal 14 hari sebelum tanggal kedatangan. Pembatalan dalam kurun waktu kurang dari 14 hari akan dikenakan biaya 50% dari total reservasi.
                                </p>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="border-b border-[#1C2A22]/10 pb-4 faq-item scroll-reveal delay-150">
                            <button class="w-full text-left flex justify-between items-center py-4 text-[#1C2A22] font-medium hover:text-[#C5A880] transition-colors faq-toggle">
                                <span>Apakah disediakan layanan penjemputan dari bandara?</span>
                                <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"></i>
                            </button>
                            <div class="faq-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                <p class="text-[#4E5E55] pb-4 leading-relaxed">
                                    Tentu, kami menyediakan layanan penjemputan VIP dari bandara dengan biaya tambahan. Silakan hubungi tim reservasi kami setelah melakukan pemesanan untuk mengatur penjemputan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- 10. Footer Modern -->
        <footer class="bg-[#1C2A22] text-[#FAF9F6] pt-20 pb-10 border-t border-[#2A3F33]">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <div>
                        <a href="#" class="text-3xl font-heading font-bold tracking-widest mb-6 block">VILLA</a>
                        <p class="text-[#FAF9F6]/60 text-sm leading-relaxed mb-6">
                            Menghadirkan pengalaman menginap dengan standar kemewahan tertinggi di tengah keindahan alam tropis.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-[#FAF9F6]/60 hover:text-[#C5A880] transition-colors" aria-label="Instagram"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                            <a href="#" class="text-[#FAF9F6]/60 hover:text-[#C5A880] transition-colors" aria-label="Facebook"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                            <a href="#" class="text-[#FAF9F6]/60 hover:text-[#C5A880] transition-colors" aria-label="Twitter"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-sm uppercase tracking-widest font-medium mb-6 text-[#C5A880]">Navigasi</h4>
                        <ul class="space-y-4 text-sm text-[#FAF9F6]/80">
                            <li><a href="#about" class="hover:text-white transition-colors">Tentang Kami</a></li>
                            <li><a href="#rooms" class="hover:text-white transition-colors">Akomodasi</a></li>
                            <li><a href="#gallery" class="hover:text-white transition-colors">Galeri</a></li>
                            <li><a href="#amenities" class="hover:text-white transition-colors">Fasilitas</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm uppercase tracking-widest font-medium mb-6 text-[#C5A880]">Kontak</h4>
                        <ul class="space-y-4 text-sm text-[#FAF9F6]/80">
                            <li class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 text-[#C5A880]"></i>
                                <span>Jl. Raya Sanggingan, Ubud, Bali, Indonesia 80571</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="phone" class="w-4 h-4 text-[#C5A880]"></i>
                                <span>+62 361 970000</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i data-lucide="mail" class="w-4 h-4 text-[#C5A880]"></i>
                                <span>info@villamewah.com</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm uppercase tracking-widest font-medium mb-6 text-[#C5A880]">Newsletter</h4>
                        <p class="text-[#FAF9F6]/60 text-sm mb-4">Dapatkan penawaran eksklusif dan update terbaru.</p>
                        <form class="flex border-b border-[#FAF9F6]/20 py-2">
                            <input type="email" placeholder="Alamat Email" class="bg-transparent border-none outline-none text-sm w-full placeholder:text-[#FAF9F6]/40 focus:ring-0 text-white" />
                            <button type="submit" class="text-[#C5A880] hover:text-white transition-colors">
                                <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="pt-8 border-t border-[#FAF9F6]/10 text-center text-xs text-[#FAF9F6]/40 tracking-widest uppercase flex flex-col md:flex-row justify-between items-center gap-4">
                    <p>&copy; {{ date('Y') }} VILLA MEWAH. ALL RIGHTS RESERVED.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-[#FAF9F6]/80 transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-[#FAF9F6]/80 transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Inisialisasi Icons -->
        <script>
            lucide.createIcons();
        </script>
    </body>
</html>
