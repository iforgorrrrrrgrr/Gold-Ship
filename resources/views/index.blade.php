@extends('layouts.layout')

@section('title', 'Gold Ship (ゴールドシップ) | Official Fan Sanctum')

@section('content')
<!-- HERO SECTION CONTAINER -->
<section id="hero" class="py-12 sm:py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- LEFT COLUMN: CONTENT & FANATIC STATEMENTS -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <!-- BADGE -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-50 border border-red-200 text-red-600 text-xs font-bold font-outfit uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    <span>6x G1 Winner • Stay Gold Bloodline</span>
                </div>

                <!-- MAIN HEADLINE -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                    Segala Hal Dalam Hidup Saya Adalah Untuk <span class="font-bangers text-red-600 tracking-wide text-5xl sm:text-6xl lg:text-7xl block sm:inline">GOLD SHIP!!</span> 🐎
                </h1>

                <!-- SUBTITLE / FANATIC MANIFESTO -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-outfit">
                    Selamat datang di situs mengenai <strong class="text-slate-900 font-bold">Gold Ship (ゴールドシップ)</strong>. Sebagai fans berat, saya telah merubah segala rutinitas hidup saya agar terhubung dengan Golshi—mulai dari semangat pantang menyerah, aksi tidak terduga, hingga kecintaan pada piala pacuan G1!
                </p>

                <!-- STATS GRID -->
                <div class="grid grid-cols-3 gap-4 pt-2">
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm text-center">
                        <div class="font-bangers text-3xl text-red-600">6</div>
                        <div class="text-[11px] text-slate-500 font-bold font-outfit uppercase tracking-wider">G1 Victories</div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm text-center">
                        <div class="font-bangers text-3xl text-amber-500">¥1.39B</div>
                        <div class="text-[11px] text-slate-500 font-bold font-outfit uppercase tracking-wider">Total Earnings</div>
                    </div>
                    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm text-center">
                        <div class="font-bangers text-3xl text-red-600">¥12.1B</div>
                        <div class="text-[11px] text-slate-500 font-bold font-outfit uppercase tracking-wider">Gate Loss</div>
                    </div>
                </div>

                <!-- CTA BUTTONS -->
                <div class="flex flex-wrap items-center gap-3 pt-4">
                    <button onclick="pledgeLoyalty()" class="btn-red px-6 py-3.5 rounded-xl font-outfit font-bold text-sm shadow-md flex items-center gap-2">
                        <span>🔥</span>
                        <span>Dukung Gold Ship</span>
                    </button>

                    <button onclick="open12BModal()" class="btn-gold-outline px-6 py-3.5 rounded-xl font-outfit font-bold text-sm shadow-sm flex items-center gap-2">
                        <span>💸</span>
                        <span>Tragedi 12.1 Miliar Yen</span>
                    </button>
                </div>

            </div>

            <!-- RIGHT COLUMN: WEB/PINTEREST IMAGE DISPLAY -->
            <div class="lg:col-span-5">
                <div class="bg-white p-4 rounded-3xl border border-slate-200 shadow-lg relative">
                    
                    <!-- TOP ACCENT BADGE -->
                    <div class="absolute -top-3 right-6 bg-amber-500 text-slate-950 font-bold text-xs px-3 py-1 rounded-full shadow-sm">
                        👑 Legend of Turf
                    </div>

                    <!-- MAIN IMAGE FROM WEB/WIKIMEDIA -->
                    <div class="rounded-2xl overflow-hidden border border-slate-100 bg-slate-100 aspect-[4/3] sm:aspect-square relative">
                        <img 
                            src="{{ asset('images/horse.webp') }}" 
                            alt="Gold Ship Racehorse" 
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        >
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-slate-950/80 via-slate-950/40 to-transparent p-4 text-white">
                            <h3 class="font-bangers text-2xl text-amber-300">GOLD SHIP (ゴールドシップ)</h3>
                            <p class="text-xs text-slate-200 font-outfit">Sumber Gambar: netkeiba</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3-COLUMN FEATURE GRID SECTION -->
<section id="features" class="py-12 sm:py-16 bg-white border-t border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- SECTION TITLE -->
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
            <span class="text-xs font-bold font-outfit text-red-600 uppercase tracking-widest bg-red-50 px-3 py-1 rounded-full border border-red-200">
                3 Pilar Sanctum Gold Ship
            </span>
            <h2 class="font-bangers text-3xl sm:text-4xl text-slate-900 mt-2 tracking-wide">
                Gold Ship Siapa Si?
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 font-outfit mt-1">
                Dari rekor kejuaraan pacuan kuda hingga aksi wajah konyol di depan kamera!
            </p>
        </div>

        <!-- 3-COLUMN GRID CONTAINER (RESPONSIF: 1 KOLOM MOBILE, 3 KOLOM DESKTOP) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- KOLOM 1: PRESTASI & REKOR PACUAN -->
            <div class="clean-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden">
                <div>
                    <!-- GAMBAR UTAMA DITAMPILKAN DI ATAS TEKS PILAR -->
                    <div class="w-full h-44 sm:h-48 rounded-xl overflow-hidden border border-slate-200 shadow-sm bg-slate-100 mb-4 relative flex items-center justify-center">
                        <img src="{{ asset('images/run.jpg') }}" alt="Gambar Prestasi Gold Ship" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden w-full h-full flex flex-col items-center justify-center bg-amber-50 text-amber-800 p-4 text-center">
                            <span class="font-bold text-xs font-outfit">📸 Gambar Pilar 1</span>
                            <span class="text-[10px] text-slate-400 font-mono mt-1">Ganti: images/card_image1.jpg</span>
                        </div>
                    </div>

                    <span class="text-[11px] font-bold font-mono text-amber-600 uppercase tracking-wider">Pilar 01 • Statistik</span>
                    <h3 class="font-bangers text-2xl text-slate-900 tracking-wide mt-0.5">PRESTASI & REKOR G1</h3>
                    
                    <p class="text-xs text-slate-600 font-outfit leading-relaxed mt-2">
                        Gold Ship adalah kuda pacu kelas atas Jepang dengan rekor impresif <strong class="text-slate-900">6 Kemenangan G1</strong> sepanjang karirnya (2011–2015).
                    </p>
                    
                    <ul class="space-y-2 text-xs font-outfit text-slate-700 pt-3 mt-3 border-t border-slate-100">
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Satsuki Sho & Kikuka Sho (2012)
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Arima Kinen (2012)
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Takarazuka Kinen (2013, 2014)
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Tenno Sho Spring (2015)
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                    <span class="text-slate-500">Total Hadiah:</span>
                    <span class="font-bold font-mono text-red-600 bg-red-50 px-2.5 py-1 rounded-lg border border-red-200">¥1.39 Miliar</span>
                </div>
            </div>

            <!-- KOLOM 2: KEDAI YAKISOBA & RITUAL UNIK -->
            <div class="clean-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden">
                <div>
                    <!-- GAMBAR UTAMA DITAMPILKAN DI ATAS TEKS PILAR -->
                    <div class="w-full h-44 sm:h-48 rounded-xl overflow-hidden border border-slate-200 shadow-sm bg-slate-100 mb-4 relative flex items-center justify-center">
                        <img src="{{ asset('images/') }}" alt="Gambar Yakisoba Gold Ship" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden w-full h-full flex flex-col items-center justify-center bg-red-50 text-red-800 p-4 text-center">
                            <span class="font-bold text-xs font-outfit">📸 Gambar Pilar 2</span>
                            <span class="text-[10px] text-slate-400 font-mono mt-1">Masih Mencari...</span>
                        </div>
                    </div>

                    <span class="text-[11px] font-bold font-mono text-red-600 uppercase tracking-wider">Pilar 02 • Karakter</span>
                    <h3 class="font-bangers text-2xl text-slate-900 tracking-wide mt-0.5">YAKISOBA & RITUAL UNIK</h3>

                    <p class="text-xs text-slate-600 font-outfit leading-relaxed mt-2">
                        Di dunia Umamusume & benak para fans, Golshi identik dengan jualan <strong class="text-slate-900">Yakisoba</strong> dan kepribadian супер jenaka!
                    </p>

                    <ul class="space-y-2 text-xs font-outfit text-slate-700 pt-3 mt-3 border-t border-slate-100">
                        <li class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">•</span> Jualan Yakisoba di setiap event pacuan
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">•</span> Jago menyelesaikan Rubik's cube instan
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">•</span> Karakter Umamusume terfavorit & lucu
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <button onclick="insertCoin()" class="w-full btn-gold-outline py-2 rounded-xl font-outfit font-bold text-xs flex items-center justify-center gap-2">
                        <span>🪙</span> Minta Porsi Yakisoba
                    </button>
                </div>
            </div>

            <!-- KOLOM 3: FAKTA UNIK POSE & MUKA ANEH (CAROUSEL GAMBAR DI ATAS TEKS PILAR) -->
            <div class="clean-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden">
                <div>
                    <!-- CAROUSEL GAMBAR DITAMPILKAN DI ATAS TEKS PILAR -->
                    <div class="w-full h-44 sm:h-48 rounded-xl overflow-hidden border border-slate-200 shadow-sm bg-slate-50 relative group mb-4">
                        <!-- SLIDES CONTAINER -->
                        <div id="golshi-carousel" class="w-full h-full relative">
                            <!-- SLIDE 1 -->
                            <div class="golshi-slide absolute inset-0 transition-opacity duration-500 opacity-100 flex items-center justify-center bg-amber-50">
                                <img src="{{ asset('images/Gship.jpg') }}" alt="Pose Muka Aneh 1" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div class="hidden text-center p-3">
                                    <span class="text-amber-700 font-bold text-xs block font-outfit">📸 Carousel Slide 1: Pose Melet</span>
                                    <span class="text-[10px] text-slate-400 font-mono block mt-0.5">images/golshi_pose1.jpg</span>
                                </div>
                            </div>

                            <!-- SLIDE 2 -->
                            <div class="golshi-slide absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none flex items-center justify-center bg-red-50">
                                <img src="{{ asset('images/carous1.jpg') }}" alt="Pose Muka Aneh 2" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div class="hidden text-center p-3">
                                    <span class="text-red-700 font-bold text-xs block font-outfit">📸 Carousel Slide 2: Melirik Konyol</span>
                                    <span class="text-[10px] text-slate-400 font-mono block mt-0.5">images/golshi_pose2.jpg</span>
                                </div>
                            </div>

                            <!-- SLIDE 3 -->
                            <div class="golshi-slide absolute inset-0 transition-opacity duration-500 opacity-0 pointer-events-none flex items-center justify-center bg-amber-50">
                                <img src="{{ asset('images/carous2.jpg') }}" alt="Pose Muka Aneh 3" class="w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div class="hidden text-center p-3">
                                    <span class="text-amber-700 font-bold text-xs block font-outfit">📸 Carousel Slide 3: Stand 2 Kaki</span>
                                    <span class="text-[10px] text-slate-400 font-mono block mt-0.5">images/golshi_pose3.jpg</span>
                                </div>
                            </div>
                        </div>

                        <!-- CONTROLS: PREV / NEXT BUTTONS -->
                        <button onclick="changeGolshiSlide(-1)" class="absolute left-2 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-slate-900/60 hover:bg-slate-900 text-white text-xs font-bold flex items-center justify-center transition-colors shadow z-10">
                            ❮
                        </button>
                        <button onclick="changeGolshiSlide(1)" class="absolute right-2 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-slate-900/60 hover:bg-slate-900 text-white text-xs font-bold flex items-center justify-center transition-colors shadow z-10">
                            ❯
                        </button>

                        <!-- INDICATORS (DOTS) -->
                        <div class="absolute bottom-2 inset-x-0 flex justify-center gap-1.5 z-10">
                            <button onclick="setGolshiSlide(0)" class="golshi-dot w-4 h-2 rounded-full bg-amber-500 transition-all"></button>
                            <button onclick="setGolshiSlide(1)" class="golshi-dot w-2 h-2 rounded-full bg-white/70 hover:bg-white transition-all"></button>
                            <button onclick="setGolshiSlide(2)" class="golshi-dot w-2 h-2 rounded-full bg-white/70 hover:bg-white transition-all"></button>
                        </div>
                    </div>

                    <span class="text-[11px] font-bold font-mono text-amber-600 uppercase tracking-wider">Pilar 03 • Ekspresi</span>
                    <h3 class="font-bangers text-2xl text-slate-900 tracking-wide mt-0.5">POSE & MUKA ANEH</h3>

                    <p class="text-xs text-slate-600 font-outfit leading-relaxed mt-2">
                        Berbeda dari kuda pacu biasa yang serius, Gold Ship terkenal sering <strong class="text-slate-900">membuat muka konyol</strong> saat dipotret!
                    </p>

                    <ul class="space-y-2 text-xs font-outfit text-slate-700 pt-3 mt-3 border-t border-slate-100">
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Melet/menjulurkan lidah ke fotografer
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Ekpresi mata melirik konyol usai menang
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-amber-500 font-bold">•</span> Fotogenik dengan ekspresi paling ajaib
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- MODAL: 12 BILLION YEN INCIDENT -->
<div id="modal-12b" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white border-2 border-red-500 rounded-3xl max-w-md w-full p-6 relative shadow-2xl transform scale-95 transition-transform duration-300">
        
        <button onclick="close12BModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 p-1.5 rounded-lg bg-slate-100 text-xs font-bold">
            ✕
        </button>

        <div class="flex items-center gap-3 mb-4">
            <span class="text-3xl">💸</span>
            <div>
                <h3 class="font-bangers text-2xl text-red-600">TRAGEDI 12.1 MILIAR YEN</h3>
                <p class="text-xs text-slate-500 font-mono">Takarazuka Kinen 2015 • Gate #15</p>
            </div>
        </div>

        <div class="space-y-3 text-xs text-slate-600 font-outfit leading-relaxed border-t border-slate-100 pt-4">
            <p>
                Pada pacuan <strong class="text-slate-900">Takarazuka Kinen 2015</strong>, Gold Ship diunggulkan menjadi juara. Bettor dari seluruh Jepang memasang taruhan sebesar <strong class="text-red-600">12.1 Miliar Yen</strong> untuknya.
            </p>
            <div class="bg-red-50 p-3 rounded-xl border border-red-200 text-red-700 italic font-mono">
                "Saat gerbang pembuka (starting gate #15) terbuka, Gold Ship mendadak berdiri 2 kaki belakang (*rearing up*) dan tertinggal jauh..."
            </div>
            <p>
                Taruhan tersebut hangus dalam sekejap, namun peristiwa ini menjadi bukti kepribadiannya yang paling unik dan tak terlupakan dalam sejarah pacuan kuda Jepang!
            </p>
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
            <button onclick="close12BModal()" class="btn-red px-4 py-2 rounded-xl text-xs font-bold font-outfit">
                Tutup Cerita
            </button>
        </div>
    </div>
</div>

<!-- JAVASCRIPT FOR HERO -->
<script>
    function pledgeLoyalty() {
        insertCoin();
        alert("🐎 Terima kasih! Dukunganmu untuk Gold Ship telah terdaftar!");
    }

    function open12BModal() {
        const modal = document.getElementById('modal-12b');
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.querySelector('div').classList.remove('scale-95');
        }, 10);
    }

    function close12BModal() {
        const modal = document.getElementById('modal-12b');
        modal.classList.add('opacity-0');
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    /* GOLSHI CAROUSEL SLIDER LOGIC */
    let currentGolshiSlide = 0;

    function updateGolshiCarousel() {
        const slides = document.querySelectorAll('.golshi-slide');
        const dots = document.querySelectorAll('.golshi-dot');
        if (!slides.length) return;

        slides.forEach((slide, index) => {
            if (index === currentGolshiSlide) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        dots.forEach((dot, index) => {
            if (index === currentGolshiSlide) {
                dot.classList.remove('bg-white/70', 'w-2');
                dot.classList.add('bg-amber-500', 'w-4');
            } else {
                dot.classList.remove('bg-amber-500', 'w-4');
                dot.classList.add('bg-white/70', 'w-2');
            }
        });
    }

    function changeGolshiSlide(direction) {
        const slides = document.querySelectorAll('.golshi-slide');
        if (!slides.length) return;
        currentGolshiSlide = (currentGolshiSlide + direction + slides.length) % slides.length;
        updateGolshiCarousel();
    }

    function setGolshiSlide(index) {
        currentGolshiSlide = index;
        updateGolshiCarousel();
    }
</script>
@endsection
