<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - NEXUS Digital Solutions</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        'primary-dark': '#4f46e5',
                        secondary: '#0b0f19',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white">

    <!-- HEADER / NAVIGATION -->
    <header class="fixed w-full top-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800/60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index.html" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-extrabold text-xl shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform">
                        N
                    </div>
                    <span class="text-2xl font-black tracking-wider gradient-text">NEXUS</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8 font-medium text-sm">
                    <a href="index.html" class="text-slate-300 hover:text-indigo-400 transition-colors">Home</a>
                    <a href="tentang.html" class="text-slate-300 hover:text-indigo-400 transition-colors">Tentang Kami</a>
                    <a href="index.html#layanan" class="text-slate-300 hover:text-indigo-400 transition-colors">Layanan</a>
                    <a href="index.html#portofolio" class="text-slate-300 hover:text-indigo-400 transition-colors">Portofolio</a>
                    <a href="kontak.html" class="text-indigo-400 font-semibold border-b-2 border-indigo-500 pb-1">Kontak</a>
                </nav>

                <!-- Action Button & Mobile Toggle -->
                <div class="flex items-center gap-4">
                    <a href="kontak.html" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 rounded-full gradient-bg text-white font-semibold text-sm shadow-md hover:shadow-indigo-500/25 hover:opacity-95 transition-all">
                        Mulai Proyek
                    </a>
                    <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white focus:outline-none p-2 rounded-lg bg-slate-900 border border-slate-800">
                        <i class="fa-solid fa-bars text-xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-slate-800 px-4 pt-3 pb-6 space-y-3">
            <a href="index.html" class="block py-2 px-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-indigo-400">Home</a>
            <a href="tentang.html" class="block py-2 px-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-indigo-400">Tentang Kami</a>
            <a href="index.html#layanan" class="block py-2 px-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-indigo-400">Layanan</a>
            <a href="index.html#portofolio" class="block py-2 px-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-indigo-400">Portofolio</a>
            <a href="kontak.html" class="block py-2 px-3 rounded-lg bg-indigo-500/10 text-indigo-400 font-semibold">Kontak</a>
            <a href="kontak.html" class="block w-full text-center py-2.5 rounded-xl gradient-bg text-white font-semibold mt-4">Mulai Proyek</a>
        </div>
    </header>

    <main class="pt-20 flex-grow">
        <!-- HERO SECTION -->
        <section class="relative py-16 lg:py-24 overflow-hidden bg-slate-950">
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <div class="absolute -top-24 right-0 w-96 h-96 bg-indigo-600 rounded-full blur-3xl"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 text-xs sm:text-sm font-semibold tracking-wide uppercase mb-6">
                    <i class="fa-solid fa-headset"></i> Kami Siap Membantu
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
                    Mari Berdiskusi tentang <span class="gradient-text">Proyek Anda</span>
                </h1>
                <p class="max-w-2xl mx-auto text-slate-400 text-base sm:text-lg">
                    Punya pertanyaan, ide proyek, atau butuh konsultasi teknis? Kirimkan pesan Anda dan tim kami akan merespons dalam waktu 24 jam.
                </p>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="py-12 bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-12 gap-12">
                    
                    <!-- Left Side: Contact Information -->
                    <div class="lg:col-span-5 space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold text-white mb-2">Informasi Kontak</h2>
                            <p class="text-slate-400 text-sm">Anda dapat menghubungi kami secara langsung melalui detail di bawah ini.</p>
                        </div>

                        <div class="space-y-6">
                            <!-- Location -->
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                                <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-xl shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Alamat Kantor</h3>
                                    <p class="text-slate-400 text-xs mt-1 leading-relaxed">
                                        NEXUS Tower Lt. 18, Jl. Jendral Sudirman No. 45, Jakarta Selatan, 12190
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                                <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center text-xl shrink-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Email Resmi</h3>
                                    <p class="text-slate-400 text-xs mt-1">hello@nexus-digital.com</p>
                                    <p class="text-slate-400 text-xs">support@nexus-digital.com</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                                <div class="w-12 h-12 rounded-xl bg-pink-500/10 text-pink-400 flex items-center justify-center text-xl shrink-0">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Telepon & WhatsApp</h3>
                                    <p class="text-slate-400 text-xs mt-1">+62 (21) 555-0192</p>
                                    <p class="text-slate-400 text-xs">+62 812-3456-7890</p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-xl shrink-0">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-sm">Jam Operasional</h3>
                                    <p class="text-slate-400 text-xs mt-1">Senin - Jumat: 08:00 - 18:00 WIB</p>
                                    <p class="text-slate-400 text-xs">Sabtu & Minggu: Tutup (Support Darurat 24/7)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Contact Form -->
                    <div class="lg:col-span-7 bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 relative">
                        <h2 class="text-2xl font-bold text-white mb-6">Kirim Pesan</h2>
                        
                        <!-- Alert Box (Hidden by default) -->
                        <div id="form-alert" class="hidden mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-lg"></i>
                            <span>Terima kasih! Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.</span>
                        </div>

                        <form id="contact-form" class="space-y-5">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nama Lengkap *</label>
                                    <input type="text" id="fullname" required placeholder="John Doe" 
                                           class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none focus:border-indigo-500 transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email *</label>
                                    <input type="email" id="email" required placeholder="john@example.com" 
                                           class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none focus:border-indigo-500 transition-colors">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Subjek *</label>
                                <input type="text" id="subject" required placeholder="Pengembangan Aplikasi Web / Konsultasi" 
                                       class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none focus:border-indigo-500 transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Pesan Anda *</label>
                                <textarea id="message" rows="5" required placeholder="Jelaskan kebutuhan atau detail proyek Anda..." 
                                          class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none focus:border-indigo-500 transition-colors resize-none"></textarea>
                            </div>

                            <button type="submit" id="submit-btn" class="w-full py-4 rounded-xl gradient-bg text-white font-bold text-sm tracking-wide shadow-lg hover:shadow-indigo-500/25 transition-all flex items-center justify-center gap-2 group">
                                <span>Kirim Pesan Sekarang</span>
                                <i class="fa-solid fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- MAP SECTION -->
        <section class="py-12 bg-slate-950 border-t border-slate-800/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden p-2">
                    <div class="w-full h-80 rounded-2xl bg-slate-950 relative flex flex-col items-center justify-center text-center p-6 border border-slate-800">
                        <div class="w-16 h-16 rounded-full bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-3xl mb-4 animate-bounce">
                            <i class="fa-solid fa-map-pin"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-1">Peta Lokasi Kantor NEXUS</h3>
                        <p class="text-slate-400 text-sm max-w-md">Jakarta Selatan, DKI Jakarta. Klik tombol di bawah untuk petunjuk arah interaktif.</p>
                        <a href="https://maps.google.com" target="_blank" class="mt-4 px-5 py-2.5 rounded-full bg-slate-800 hover:bg-slate-700 text-indigo-400 text-xs font-semibold transition-colors inline-flex items-center gap-2">
                            <span>Buka di Google Maps</span>
                            <i class="fa-solid fa-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section class="py-20 bg-slate-900/40 border-t border-slate-800/60">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-white mb-3">Pertanyaan Umum (FAQ)</h2>
                    <p class="text-slate-400 text-sm">Temukan jawaban cepat untuk pertanyaan yang sering diajukan.</p>
                </div>

                <div class="space-y-4" id="faq-accordion">
                    <!-- FAQ Item 1 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden transition-colors">
                        <button class="faq-btn w-full px-6 py-5 text-left font-semibold text-white flex justify-between items-center hover:text-indigo-400 transition-colors">
                            <span>Berapa lama estimasi waktu pengerjaan proyek web/aplikasi?</span>
                            <i class="fa-solid fa-chevron-down text-slate-400 text-sm transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-5 text-slate-400 text-sm leading-relaxed border-t border-slate-800/50 pt-3">
                            Waktu pengerjaan sangat bergantung pada skala dan kompleksitas proyek. Untuk website landing page standar biasanya membutuhkan 1-2 minggu, sedangkan aplikasi skala besar dapat memakan waktu 1-3 bulan.
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden transition-colors">
                        <button class="faq-btn w-full px-6 py-5 text-left font-semibold text-white flex justify-between items-center hover:text-indigo-400 transition-colors">
                            <span>Apakah NEXUS memberikan pemeliharaan (maintenance) pasca-rilis?</span>
                            <i class="fa-solid fa-chevron-down text-slate-400 text-sm transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-5 text-slate-400 text-sm leading-relaxed border-t border-slate-800/50 pt-3">
                            Ya, kami menyediakan garansi pemeliharaan gratis selama 30-90 hari pertama setelah peluncuran, serta paket maintenance bulanan/tahunan berkelanjutan.
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden transition-colors">
                        <button class="faq-btn w-full px-6 py-5 text-left font-semibold text-white flex justify-between items-center hover:text-indigo-400 transition-colors">
                            <span>Bagaimana alur komunikasi dan estimasi biaya proyek?</span>
                            <i class="fa-solid fa-chevron-down text-slate-400 text-sm transition-transform duration-300"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-5 text-slate-400 text-sm leading-relaxed border-t border-slate-800/50 pt-3">
                            Proses dimulai dengan sesi konsultasi gratis. Setelah memahami spesifikasi, kami akan mengirimkan proposal resmi berisi estimasi biaya transparan dan timeline pengerjaan.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 border-t border-slate-800 text-slate-400 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="space-y-4">
                    <a href="index.html" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg gradient-bg flex items-center justify-center text-white font-extrabold text-base">N</div>
                        <span class="text-xl font-black text-white">NEXUS</span>
                    </a>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Solusi digital inovatif untuk mentransformasi ide Anda menjadi kenyataan bernilai tinggi.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="index.html" class="hover:text-indigo-400 transition-colors">Home</a></li>
                        <li><a href="tentang.html" class="hover:text-indigo-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="index.html#layanan" class="hover:text-indigo-400 transition-colors">Layanan</a></li>
                        <li><a href="kontak.html" class="hover:text-indigo-400 transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Mobile Apps</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Cloud Solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Media Sosial</h4>
                    <div class="flex gap-4 text-base">
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-indigo-600 transition-all"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-indigo-600 transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:bg-indigo-600 transition-all"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-6 text-center text-xs text-slate-500">
                &copy; 2026 NEXUS Digital Solutions. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation Drawer Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if(mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
            } else {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            }
        });

        // Interactive Accordion FAQ
        const faqBtns = document.querySelectorAll('.faq-btn');
        faqBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Contact Form Handling (Interactive Demo)
        const contactForm = document.getElementById('contact-form');
        const formAlert = document.getElementById('form-alert');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Show success alert
            formAlert.classList.remove('hidden');
            
            // Reset form input
            contactForm.reset();

            // Scroll alert into view smoothly
            formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    </script>
</body>
</html> 