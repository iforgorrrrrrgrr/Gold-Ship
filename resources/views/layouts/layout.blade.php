<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Gold Ship Fan Sanctum 🐎✨')</title>
    <meta name="title" content="Gold Ship Fan Sanctum 🐎✨">
    <meta name="description" content="Situs persembahan fanatik sederhana untuk Gold Ship (ゴールドシップ) — 6x G1 Champion & Umamusume legendaris!">
    
    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐎</text></svg>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-slate-800 font-sans antialiased selection:bg-red-500 selection:text-white flex flex-col min-h-screen">

    <!-- TOP DECORATIVE GRADIENT ACCENT -->
    <div class="h-1.5 bg-gradient-to-r from-red-600 via-amber-400 to-red-600 w-full shadow-xs"></div>

    <!-- NAVBAR -->
    <header class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-40 shadow-xs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- BRAND LOGO -->
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <img src="{{ asset('images/Gship.jpg') }}" alt="Gold Ship" class="w-9 h-9 rounded-full object-cover ring-2 ring-red-500/20 group-hover:ring-red-500 transition-all duration-300">
                        <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-amber-400 border-2 border-white rounded-full"></span>
                    </div>
                    <div>
                        <span class="font-bangers text-2xl text-red-600 tracking-wide block leading-none">GOLD SHIP</span>
                        <span class="text-amber-500 text-[10px] font-bold font-outfit uppercase tracking-widest block -mt-0.5">Sanctum</span>
                    </div>
                </a>

                <!-- DESKTOP NAVIGATION -->
                <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                    <a href="{{ url('/') }}" class="hover:text-red-600 transition-colors py-1 relative {{ request()->is('/') ? 'text-red-600 font-bold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-600 after:rounded-full' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-red-600 transition-colors py-1 relative {{ request()->routeIs('about') ? 'text-red-600 font-bold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-red-600 after:rounded-full' : '' }}">About Us</a>
                    <button onclick="openContactModal()" class="hover:text-red-600 transition-colors cursor-pointer py-1 flex items-center gap-1.5 font-semibold text-slate-600 hover:text-red-600">
                        <span>Contact</span>
                        <span class="text-[10px] bg-red-100 text-red-600 font-bold px-1.5 py-0.5 rounded-full font-mono">WA</span>
                    </button>
                </nav>

                <!-- 100 YEN BUTTON -->
                <div class="flex items-center gap-3">
                    <button onclick="insertCoin()" class="btn-gold-outline px-4 py-2 rounded-xl font-outfit font-bold text-xs flex items-center gap-2 shadow-xs hover:shadow-md active:scale-95 transition-all cursor-pointer">
                        <span class="animate-bounce">🪙</span>
                        <span>Special Button</span>
                    </button>

                    <!-- MOBILE MENU TOGGLE -->
                    <button onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-xl bg-slate-100 text-slate-600 hover:text-red-600 hover:bg-red-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white/95 backdrop-blur-md px-4 py-3 space-y-2 text-sm font-medium shadow-lg">
            <a href="{{ url('/') }}" onclick="toggleMobileMenu()" class="block py-2 px-3 rounded-xl text-slate-700 hover:bg-red-50 hover:text-red-600 font-semibold transition-colors">🏠 Home</a>
            <a href="{{ route('about') }}" onclick="toggleMobileMenu()" class="block py-2 px-3 rounded-xl text-slate-700 hover:bg-red-50 hover:text-red-600 font-semibold transition-colors">ℹ️ About Us</a>
            <button onclick="toggleMobileMenu(); openContactModal()" class="block w-full text-left py-2 px-3 rounded-xl text-red-600 font-bold hover:bg-red-50 transition-colors">💬 Hubungi via WA</button>
        </div>
    </header>

    <!-- TOAST NOTIFICATION -->
    <div id="golshi-toast" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 pointer-events-none transition-all duration-300 max-w-sm">
        <div class="bg-slate-900/95 text-white border border-amber-400/40 p-4 rounded-2xl shadow-2xl backdrop-blur-md flex items-start gap-3.5">
            <div class="w-10 h-10 rounded-xl bg-amber-500/20 border border-amber-400/30 flex items-center justify-center text-xl shrink-0">
                🍜
            </div>
            <div>
                <h4 id="toast-title" class="font-bold text-amber-400 text-sm font-outfit">100 Yen Diterima!</h4>
                <p id="toast-body" class="text-xs text-slate-300 mt-0.5 leading-relaxed font-sans">"Golshi membeli 1 porsi Yakisoba!"</p>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- CONTACT FORM MODAL -->
    <div id="contact-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-slate-950/75 backdrop-blur-md hidden opacity-0 transition-all duration-300">
        <div class="bg-white border border-slate-200/90 rounded-3xl max-w-lg w-full overflow-hidden relative shadow-2xl transform scale-95 transition-all duration-300 flex flex-col max-h-[90vh]">
            
            <!-- TOP DECORATIVE GRADIENT ACCENT -->
            <div class="h-2 bg-gradient-to-r from-red-600 via-amber-400 to-red-600 w-full shrink-0"></div>

            <!-- CLOSE BUTTON -->
            <button onclick="closeContactModal()" type="button" aria-label="Tutup Modal" class="absolute top-4 right-4 text-slate-400 hover:text-red-600 w-9 h-9 flex items-center justify-center rounded-full hover:bg-slate-100 transition-all font-bold text-base z-10 cursor-pointer">
                ✕
            </button>

            <div class="p-6 sm:p-7 overflow-y-auto">
                <!-- MODAL HEADER -->
                <div class="mb-5">
                    <div class="flex items-center gap-2.5 flex-wrap">
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">HUBUNGI GOLSHI FAN CLUB</h3>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 text-[11px] font-bold font-mono shadow-2xs">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> WA Online
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 font-outfit mt-1">Pesan akan langsung terhubung ke nomor WhatsApp admin!</p>
                </div>

                <!-- PRESET TOPIC PILLS -->
                <div class="mb-5 bg-slate-50/80 p-3.5 rounded-2xl border border-slate-200/60">
                    <label class="block text-[11px] font-bold font-mono text-slate-500 uppercase tracking-wider mb-2.5 flex items-center gap-1.5">
                        <span>💡</span> Topik Cepat (Klik untuk memilih):
                    </label>
                    <div class="flex flex-wrap gap-2">
                        <button type="button" onclick="selectTopic('💡 Saran Website', this)" class="topic-pill px-3 py-1.5 rounded-xl text-xs font-semibold font-outfit bg-white text-slate-700 hover:bg-red-50 hover:text-red-600 hover:border-red-300 border border-slate-200 shadow-2xs transition-all cursor-pointer active:scale-95 flex items-center gap-1">
                            <span>💡</span> Saran Website
                        </button>
                        <button type="button" onclick="selectTopic('❤️ Apresiasi', this)" class="topic-pill px-3 py-1.5 rounded-xl text-xs font-semibold font-outfit bg-white text-slate-700 hover:bg-red-50 hover:text-red-600 hover:border-red-300 border border-slate-200 shadow-2xs transition-all cursor-pointer active:scale-95 flex items-center gap-1">
                            <span>❤️</span> Apresiasi
                        </button>
                        <button type="button" onclick="selectTopic('🐛 Laporan Bug', this)" class="topic-pill px-3 py-1.5 rounded-xl text-xs font-semibold font-outfit bg-white text-slate-700 hover:bg-red-50 hover:text-red-600 hover:border-red-300 border border-slate-200 shadow-2xs transition-all cursor-pointer active:scale-95 flex items-center gap-1">
                            <span>🐛</span> Laporan Bug
                        </button>
                        <button type="button" onclick="selectTopic('❓ Pertanyaan', this)" class="topic-pill px-3 py-1.5 rounded-xl text-xs font-semibold font-outfit bg-white text-slate-700 hover:bg-red-50 hover:text-red-600 hover:border-red-300 border border-slate-200 shadow-2xs transition-all cursor-pointer active:scale-95 flex items-center gap-1">
                            <span>❓</span> Pertanyaan
                        </button>
                    </div>
                </div>

                <!-- FORM -->
                <form id="contact-form" onsubmit="sendToWhatsapp(event)" class="space-y-4">
                    
                    <!-- JUDUL MASUKAN -->
                    <div>
                        <label for="contact-title" class="block text-xs font-bold font-outfit text-slate-700 mb-1.5 flex items-center gap-1.5">
                            <span>📌</span> Judul Masukan <span class="text-red-500 font-bold">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact-title" 
                            required 
                            oninput="updateWaPreview()"
                            placeholder="Masukkan judul pesan..."
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-outfit text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500 transition-all bg-slate-50/50 focus:bg-white shadow-2xs"
                        >
                    </div>

                    <!-- PESAN MASUKAN -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="contact-message" class="text-xs font-bold font-outfit text-slate-700 flex items-center gap-1.5">
                                <span>📝</span> Pesan Masukan <span class="text-red-500 font-bold">*</span>
                            </label>
                            <span class="text-[11px] font-mono text-slate-400 bg-slate-100 px-2 py-0.5 rounded-md">
                                <span id="char-count" class="font-bold text-slate-600">0</span>/500
                            </span>
                        </div>
                        <textarea 
                            id="contact-message" 
                            rows="3" 
                            maxlength="500"
                            required 
                            oninput="updateWaPreview()"
                            placeholder="Tuliskan isi pesan atau saran kamu sejelas mungkin..."
                            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm font-outfit text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500 transition-all bg-slate-50/50 focus:bg-white resize-none shadow-2xs"
                        ></textarea>
                    </div>

                    <!-- LIVE WHATSAPP MESSAGE PREVIEW (AUTHENTIC CHAT BUBBLE LOOK) -->
                    <div class="rounded-2xl bg-emerald-950/5 border border-emerald-600/20 p-3.5 space-y-2">
                        <div class="flex items-center justify-between text-[11px] font-bold font-outfit text-emerald-900">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-emerald-600 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                Preview Pesan WhatsApp
                            </span>
                            <span class="inline-flex items-center gap-1 text-[10px] text-emerald-600 bg-emerald-100/80 px-2 py-0.5 rounded-full font-mono font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Real-time
                            </span>
                        </div>

                        <!-- WHATSAPP BUBBLE CARD -->
                        <div class="bg-white border border-emerald-200/90 rounded-2xl rounded-tl-xs p-3 shadow-xs text-xs text-slate-800 relative font-sans leading-relaxed">
                            <div id="wa-preview-text" class="text-slate-600 italic break-words">
                                "Hello I'm from Gold Ship Fan Page..."
                            </div>
                            <div class="flex items-center justify-end gap-1 mt-1 text-[10px] text-slate-400 font-mono">
                                <span id="wa-preview-time">11:02</span>
                                <svg class="w-3 h-3 text-emerald-500 fill-current" viewBox="0 0 24 24"><path d="M.427 12.656a.75.75 0 011.06 0l4.243 4.242 9.192-9.192a.75.75 0 111.061 1.06l-9.722 9.723a.75.75 0 01-1.06 0L.427 13.716a.75.75 0 010-1.06z"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- ACTION BUTTONS -->
                    <div class="pt-2 flex items-center justify-between gap-3">
                        <button type="button" onclick="resetForm()" class="text-xs text-slate-400 hover:text-red-600 font-outfit font-semibold transition-colors cursor-pointer flex items-center gap-1">
                            <span>🔄</span> Reset Input
                        </button>
                        
                        <div class="flex items-center gap-2.5">
                            <button type="button" onclick="closeContactModal()" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold font-outfit text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-colors cursor-pointer">
                                Batal
                            </button>
                            <button type="submit" class="bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-500 hover:to-emerald-600 text-white font-outfit font-bold text-xs py-2.5 px-5 rounded-xl shadow-md shadow-emerald-600/20 hover:shadow-emerald-600/30 active:scale-95 transition-all flex items-center gap-2 cursor-pointer group">
                                <svg class="w-4 h-4 fill-current text-white" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                <span>Kirim via WA</span>
                                <span class="group-hover:translate-x-0.5 transition-transform">➔</span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200/80 text-slate-600 py-10 mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                
                <!-- FOOTER BRAND -->
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/Gship.jpg') }}" alt="Gold Ship" class="w-9 h-9 rounded-full object-cover ring-2 ring-red-500/20">
                    <div>
                        <span class="font-bangers text-xl text-slate-900 tracking-wide block leading-none">GOLD SHIP FAN SANCTUM</span>
                        <span class="text-[11px] text-slate-400 font-outfit block mt-0.5">Situs Fanatik Resmi Non-Komersial</span>
                    </div>
                </div>

                <!-- FOOTER LINKS -->
                <div class="flex flex-wrap justify-center gap-6 text-xs font-semibold font-outfit">
                    <button onclick="openContactModal()" class="hover:text-red-600 transition-colors text-red-600 font-bold cursor-pointer flex items-center gap-1">
                        <span>💬</span> Contact Form
                    </button>
                    <a href="https://id.wikipedia.org/wiki/Gold_Ship" target="_blank" rel="noopener noreferrer" class="hover:text-red-600 transition-colors text-slate-600">
                        Wikipedia Indonesia ↗
                    </a>
                </div>

                <!-- COPYRIGHT -->
                <p class="text-xs text-slate-400 text-center md:text-right font-outfit">
                    © {{ date('Y') }} Dedikasi Fans Berat Gold Ship • Merah, Putih, Emas.
                </p>

            </div>
        </div>
    </footer>

    <!-- INTERACTIVE JAVASCRIPT -->
    <script>
        function toggleMobileMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }

        const quotes = [
            "Golshi membeli 1 porsi Yakisoba! Power drop-kick meningkat 100%! 🍜",
            "12 Miliar Yen melayang di Gate #15, tapi cinta ke Golshi tetap abadi! 💸",
            "Golshi menyelesaikan Rubik's cube dalam 0.5 detik sambil mengedipkan mata! 🎲",
            "Darah Stay Gold x Mejiro McQueen mengalir deras! 🏆"
        ];

        function insertCoin() {
            const toast = document.getElementById('golshi-toast');
            const toastBody = document.getElementById('toast-body');
            const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
            
            toastBody.innerText = `"${randomQuote}"`;
            toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
            }, 3500);
        }

        // CONTACT MODAL FUNCTIONS
        function openContactModal() {
            const modal = document.getElementById('contact-modal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.querySelector('div').classList.remove('scale-95');
            }, 10);
            updateWaPreview();
        }

        function closeContactModal() {
            const modal = document.getElementById('contact-modal');
            modal.classList.add('opacity-0');
            modal.querySelector('div').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        function selectTopic(topic, buttonEl) {
            const titleInput = document.getElementById('contact-title');
            titleInput.value = topic;

            // Highlight selected pill visual
            document.querySelectorAll('.topic-pill').forEach(pill => {
                pill.classList.remove('bg-red-600', 'text-white', 'border-red-600', 'shadow-md', 'shadow-red-500/20');
                pill.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });

            if (buttonEl) {
                buttonEl.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
                buttonEl.classList.add('bg-red-600', 'text-white', 'border-red-600', 'shadow-md', 'shadow-red-500/20');
            }

            updateWaPreview();

            // Focus on message box for seamless UX
            document.getElementById('contact-message').focus();
        }

        function updateWaPreview() {
            const title = document.getElementById('contact-title').value.trim();
            const message = document.getElementById('contact-message').value.trim();
            const charCount = document.getElementById('char-count');
            const previewEl = document.getElementById('wa-preview-text');
            const timeEl = document.getElementById('wa-preview-time');

            if (charCount) {
                charCount.innerText = message.length;
                if (message.length > 450) {
                    charCount.classList.add('text-red-500');
                } else {
                    charCount.classList.remove('text-red-500');
                }
            }

            // Real-time time stamp
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            if (timeEl) {
                timeEl.innerText = `${hours}:${minutes}`;
            }

            if (!title && !message) {
                previewEl.innerText = `"Hello I'm from Gold Ship Fan Page..."`;
                previewEl.classList.add('italic', 'text-slate-400');
                previewEl.classList.remove('text-slate-800', 'not-italic');
            } else {
                const formattedMessage = `Hello I'm from Gold Ship Fan Page\n📌 ${title || '[Judul]'}\n📝 ${message || '[Pesan]'}`;
                previewEl.innerText = `"${formattedMessage}"`;
                previewEl.classList.remove('italic', 'text-slate-400');
                previewEl.classList.add('text-slate-800', 'not-italic');
            }
        }

        function resetForm() {
            document.getElementById('contact-form').reset();
            document.querySelectorAll('.topic-pill').forEach(pill => {
                pill.classList.remove('bg-red-600', 'text-white', 'border-red-600', 'shadow-md', 'shadow-red-500/20');
                pill.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
            });
            updateWaPreview();
        }

        function sendToWhatsapp(event) {
            event.preventDefault();
            const title = document.getElementById('contact-title').value.trim();
            const message = document.getElementById('contact-message').value.trim();

            if (!title || !message) return;

            // Format Pesan WhatsApp
            const formattedMessage = `Hello I'm from Gold Ship Fan Page\n📌 ${title}\n📝 ${message}`;

            // Nomor WhatsApp tujuan
            const phoneNumber = "6281387232338";
            const waUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(formattedMessage)}`;

            window.open(waUrl, '_blank');

            closeContactModal();
            resetForm();
        }
    </script>
</body>
</html>
