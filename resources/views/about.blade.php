@extends('layouts.layout')

@section('title', 'About Gold Ship (ゴールドシップ) | Biografi & Jejak Sejarah')

@section('content')
    <!-- ABOUT HERO & PROFILE SUMMARY SECTION -->
    <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto">

            <!-- HEADER TITLE -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span
                    class="text-xs font-bold font-outfit text-red-600 uppercase tracking-widest bg-red-50 px-3.5 py-1 rounded-full border border-red-200">
                    Profil & Biografi Lengkap
                </span>
                <h1 class="font-bangers text-4xl sm:text-5xl lg:text-6xl text-slate-900 mt-3 tracking-wide">
                    BIOGRAFI & JEJAK SEJARAH <span class="text-red-600">GOLD SHIP</span> 🐎✨
                </h1>
                <p class="text-xs sm:text-base text-slate-600 font-outfit mt-2 leading-relaxed">
                    Menelusuri perjalanan hidup sang legenda pacuan kuda Jepang—dari kelahiran di Hokkaido, kejayaan 6 gelar
                    G1, hingga tingkah uniknya yang memikat hati jutaan penggemar! (Data sesuai Wikipedia Indonesia).
                </p>
            </div>

            <!-- PROFILE BIOGRAPHY CARD GRID (WITH TOP SEAMLESS IMAGE SLOTS) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- KARTU 1: NAMA RESMI -->
                <div
                    class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:border-red-300 transition-colors">
                    <div>
                        <div
                            class="w-full h-36 bg-slate-100 relative border-b border-slate-100 flex items-center justify-center">
                            <img src="{{ asset('images/about1.jpg') }}" alt="Gambar Nama Resmi"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                            <div
                                class="hidden w-full h-full flex flex-col items-center justify-center bg-red-50 text-red-800 p-2 text-center">
                                <span class="font-bold text-xs font-outfit">📸 Gambar Profil 1</span>
                                <span class="text-[10px] text-slate-400 font-mono mt-0.5">images/about1.jpg</span>
                            </div>
                        </div>
                        <div class="p-4 sm:p-5">
                            <span
                                class="text-[11px] font-bold font-mono text-red-600 uppercase tracking-wider block mb-1">Nama
                                Resmi</span>
                            <h3 class="font-bangers text-xl text-slate-900">GOLD SHIP</h3>
                            <p class="text-xs text-slate-500 font-outfit mt-1">ゴールドシップ (Jantan • Thoroughbred)</p>
                        </div>
                    </div>
                </div>

                <!-- KARTU 2: KELAHIRAN & ASAL -->
                <div
                    class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:border-amber-300 transition-colors">
                    <div>
                        <div
                            class="w-full h-36 bg-slate-100 relative border-b border-slate-100 flex items-center justify-center">
                            <img src="{{ asset('images/about2.jpg') }}" alt="Gambar Kelahiran Gold Ship"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                            <div
                                class="hidden w-full h-full flex flex-col items-center justify-center bg-amber-50 text-amber-800 p-2 text-center">
                                <span class="font-bold text-xs font-outfit">📸 Gambar Profil 2</span>
                                <span class="text-[10px] text-slate-400 font-mono mt-0.5">images/about2.jpg</span>
                            </div>
                        </div>
                        <div class="p-4 sm:p-5">
                            <span
                                class="text-[11px] font-bold font-mono text-amber-600 uppercase tracking-wider block mb-1">Kelahiran
                                & Asal</span>
                            <h3 class="font-bangers text-xl text-slate-900">6 MARET 2009</h3>
                            <p class="text-xs text-slate-500 font-outfit mt-1">Deguchi Makijo, Biratori, Hokkaido</p>
                        </div>
                    </div>
                </div>

                <!-- KARTU 3: SILSILAH DARAH -->
                <div
                    class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:border-red-300 transition-colors">
                    <div>
                        <div
                            class="w-full h-36 bg-slate-100 relative border-b border-slate-100 flex items-center justify-center">
                            <img src="{{ asset('images/about3.jpg') }}" alt="Gambar Silsilah Darah"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                            <div
                                class="hidden w-full h-full flex flex-col items-center justify-center bg-red-50 text-red-800 p-2 text-center">
                                <span class="font-bold text-xs font-outfit">📸 Gambar Profil 3</span>
                                <span class="text-[10px] text-slate-400 font-mono mt-0.5">images/about3.jpg</span>
                            </div>
                        </div>
                        <div class="p-4 sm:p-5">
                            <span
                                class="text-[11px] font-bold font-mono text-red-600 uppercase tracking-wider block mb-1">Silsilah
                                Darah</span>
                            <h3 class="font-bangers text-xl text-slate-900">STAY GOLD x POINT FLAG</h3>
                            <p class="text-xs text-slate-500 font-outfit mt-1">Cucu Legenda Mejiro McQueen</p>
                        </div>
                    </div>
                </div>

                <!-- KARTU 4: TOTAL KARIR & PRESTASI -->
                <div
                    class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:border-amber-300 transition-colors">
                    <div>
                        <div
                            class="w-full h-36 bg-slate-100 relative border-b border-slate-100 flex items-center justify-center">
                            <img src="{{ asset('images/about4.jpg') }}" alt="Gambar Total Karir"
                                class="w-full h-full object-cover"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                            <div
                                class="hidden w-full h-full flex flex-col items-center justify-center bg-amber-50 text-amber-800 p-2 text-center">
                                <span class="font-bold text-xs font-outfit">📸 Gambar Profil 4</span>
                                <span class="text-[10px] text-slate-400 font-mono mt-0.5">images/about4.jpg</span>
                            </div>
                        </div>
                        <div class="p-4 sm:p-5">
                            <span
                                class="text-[11px] font-bold font-mono text-amber-600 uppercase tracking-wider block mb-1">Total
                                Karir</span>
                            <h3 class="font-bangers text-xl text-slate-900">28 START (13 WIN)</h3>
                            <p class="text-xs text-slate-500 font-outfit mt-1">6x G1 Champion • Hadiah ¥1.39B</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- TIMELINE SEJARAH BERGAYA PETA LINTASAN (MAP PATH / ZIGZAG TIMELINE) -->
    <section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-[#F8FAFC] relative overflow-hidden">

        <div class="max-w-5xl mx-auto relative">

            <!-- SECTION TITLE -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span
                    class="text-xs font-bold font-outfit text-amber-600 uppercase tracking-widest bg-amber-50 px-3.5 py-1 rounded-full border border-amber-200">
                    Peta Perjalanan Karir & Highlight Video
                </span>
                <h2 class="font-bangers text-3xl sm:text-4xl text-slate-900 mt-3 tracking-wide">
                    LINTASAN SEJARAH SANG LEGENDA
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 font-outfit mt-1">
                    Ikuti momen-momen bersejarah Gold Ship dari waktu ke waktu!
                </p>
            </div>

            <!-- CONNECTING DASHED RED PATH LINE WITH START & END MARKER CIRCLES -->
            <div
                class="hidden md:flex flex-col items-center absolute left-1/2 top-44 bottom-16 -translate-x-1/2 pointer-events-none z-0">
                <!-- LINGKARAN PENANDA AWAL (START MARKER CIRCLE) -->
                <div
                    class="w-5 h-5 rounded-full bg-red-600 border-4 border-white shadow-md z-10 flex-shrink-0 animate-pulse">
                </div>

                <!-- GARIS MERAH PUTUS-PUTUS (DASHED RED LINE) -->
                <div class="w-0.5 flex-grow border-l-2 border-dashed border-red-500 my-1"></div>

                <!-- LINGKARAN PENANDA AKHIR (END MARKER CIRCLE) -->
                <div class="w-5 h-5 rounded-full bg-amber-500 border-4 border-white shadow-md z-10 flex-shrink-0"></div>
            </div>

            <!-- TIMELINE MAP CONTAINER (ZIGZAG ITEM LIST) -->
            <div class="space-y-16 sm:space-y-24 relative z-10">

                <!-- MOMEN 1: 6 MARET 2009 (KAMPUNG HALAMAN & KELAHIRAN - FOTO) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- GAMBAR SEJARAH 1 (KIRI) -->
                    <div class="order-1">
                        <div class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white">
                            <div
                                class="w-full h-full rounded-xl overflow-hidden bg-slate-100 relative flex items-center justify-center border border-slate-100">
                                <img src="{{ asset('images/history1.jpg') }}" alt="Kelahiran Gold Ship"
                                    class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div
                                    class="hidden w-full h-full flex flex-col items-center justify-center bg-amber-50 text-amber-800 p-6 text-center">
                                    <span class="font-bold text-sm font-outfit">📸 Foto Sejarah 1</span>
                                    <span class="text-xs text-slate-400 font-mono mt-1">images/history1.jpg</span>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <span class="font-bangers text-lg text-slate-800 tracking-wide">1. KELAHIRAN DI
                                    HOKKAIDO</span>
                            </div>
                        </div>
                    </div>

                    <!-- TEKS SEJARAH 1 (KANAN) -->
                    <div class="order-2 space-y-3 md:pl-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-red-600 text-white text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ 6 MARET 2009</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            LAHIRNYA SANG TROUBLEMAKER EMAS
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Gold Ship lahir di Peternakan Deguchi (Deguchi Makijo), Biratori, Hokkaido. Ia mewarisi bulu
                            abu-abu khas trah ibunya, <strong class="text-slate-900">Point Flag</strong>, serta garis
                            keturunan pacuan kuda legendaris dari sang ayah, <strong class="text-slate-900">Stay
                                Gold</strong> (cucu Mejiro McQueen). Sejak kecil, ia sudah menunjukkan sifat penuh energi
                            dan kejutan. Gold Ship awalnya memiliki kulit berwarna coklat, semenjak tumbuh dewasa kulitnya
                            berubah menjadi putih keabu-abu mengikuti ibunya.
                        </p>
                    </div>
                </div>

                <!-- MOMEN 2: TAHUN 2012 (DEBUT & TRIPLE CROWN - LINK VIDEO YOUTUBE 2) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- TEKS SEJARAH 2 (KIRI PADA DESKTOP) -->
                    <div class="order-2 md:order-1 space-y-3 md:pr-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-amber-500 text-slate-950 text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ TAHUN 2012</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            DEBUT IMPRESIF & GELEGAR ARIMA KINEN
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Tahun 2012 menjadi ajang pembuktian kehebatan Gold Ship. Ia menjuarai pacuan <strong
                                class="text-slate-900">Satsuki Sho</strong> dengan manuver berani menerobos jalur dalam yang
                            berlumpur. Di tahun yang sama, ia menjuarai <strong class="text-slate-900">Kikuka Sho</strong>
                            dan menutup musim dengan kemenangan spektakuler di <strong class="text-slate-900">Arima Kinen
                                2012</strong> setelah menyalip dari posisi paling belakang!
                        </p>
                        <button onclick="openYoutubeModal('stxE99MCzJo&t=135s', 'G1 Arima Kinen 2012 Highlights')"
                            class="btn-red px-4 py-2 rounded-xl text-xs font-bold font-outfit flex items-center gap-2 shadow-sm">
                            <span>▶️</span> Tonton Video Highlight 2012
                        </button>
                    </div>

                    <!-- KARTU VIDEO YOUTUBE 2 (KANAN PADA DESKTOP) -->
                    <div class="order-1 md:order-2">
                        <div onclick="openYoutubeModal('stxE99MCzJo&t=135s', 'G1 Arima Kinen 2012 Highlights')"
                            class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white cursor-pointer group hover:border-red-400 transition-all">
                            <div
                                class="w-full h-56 sm:h-64 rounded-xl overflow-hidden bg-slate-900 relative flex items-center justify-center border border-slate-100">
                                <img src="https://img.youtube.com/vi/stxE99MCzJo/hqdefault.jpg" alt="Video Highlight 2012"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">

                                <div
                                    class="absolute inset-0 bg-slate-950/30 flex items-center justify-center group-hover:bg-slate-950/20 transition-colors">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-600 text-white flex items-center justify-center text-xl shadow-lg group-hover:scale-110 transition-transform">
                                        ▶
                                    </div>
                                </div>
                                <span
                                    class="absolute bottom-3 right-3 bg-slate-950/80 text-white text-[10px] font-mono px-2 py-0.5 rounded">YouTube
                                    Video</span>
                            </div>
                            <div class="mt-3 text-center flex items-center justify-center gap-2">
                                <span
                                    class="font-bangers text-lg text-slate-800 tracking-wide group-hover:text-red-600 transition-colors">2.
                                    HIGHLIGHT ARIMA KINEN 2012</span>
                                <span class="text-xs text-red-600">▶</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MOMEN 3: TAHUN 2013-2014 (DOMINASI TAKARAZUKA KINEN - LINK VIDEO YOUTUBE 3) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- KARTU VIDEO YOUTUBE 3 (KIRI) -->
                    <div class="order-1">
                        <div onclick="openYoutubeModal('ypSSvvm91dw&t=116s', 'Takarazuka Kinen 2013 & 2014 Back-to-Back Champion')"
                            class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white cursor-pointer group hover:border-amber-400 transition-all">
                            <div
                                class="w-full h-56 sm:h-64 rounded-xl overflow-hidden bg-slate-900 relative flex items-center justify-center border border-slate-100">
                                <img src="https://img.youtube.com/vi/ypSSvvm91dw/hqdefault.jpg"
                                    alt="Video Takarazuka Kinen 2x"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">

                                <div
                                    class="absolute inset-0 bg-slate-950/30 flex items-center justify-center group-hover:bg-slate-950/20 transition-colors">
                                    <div
                                        class="w-14 h-14 rounded-full bg-amber-500 text-slate-950 flex items-center justify-center text-xl shadow-lg group-hover:scale-110 transition-transform">
                                        ▶
                                    </div>
                                </div>
                                <span
                                    class="absolute bottom-3 right-3 bg-slate-950/80 text-white text-[10px] font-mono px-2 py-0.5 rounded">YouTube
                                    Video</span>
                            </div>
                            <div class="mt-3 text-center flex items-center justify-center gap-2">
                                <span
                                    class="font-bangers text-lg text-slate-800 tracking-wide group-hover:text-amber-600 transition-colors">3.
                                    VIDEO: TAKARAZUKA KINEN 2013</span>
                                <span class="text-xs text-amber-600">▶</span>
                            </div>
                        </div>
                    </div>

                    <!-- TEKS SEJARAH 3 (KANAN) -->
                    <div class="order-2 space-y-3 md:pl-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-red-600 text-white text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ TAHUN 2013 - 2014</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            DOMINASI TAKARAZUKA KINEN BERSEJARAH
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Gold Ship mengukir sejarah sebagai kuda pacu pertama yang berhasil menjuarai pacuan bergengsi
                            <strong class="text-slate-900">Takarazuka Kinen dua kali berturut-turut</strong> (2013 dan
                            2014). Di lintasan ini, staminanya yang luar biasa dan kecepatan sprint jarak jauhnya tidak
                            tertandingi oleh rival mana pun.
                        </p>
                        <button
                            onclick="openYoutubeModal('ypSSvvm91dw&t=116s   ', 'Takarazuka Kinen 2013 & 2014 Back-to-Back Champion')"
                            class="btn-gold-outline px-4 py-2 rounded-xl text-xs font-bold font-outfit flex items-center gap-2 shadow-sm">
                            <span>▶️</span> Tonton Video Takarazuka Kinen 2013
                        </button>
                    </div>
                </div>

                <!-- MOMEN 4: TAHUN 2015 (TRAGEDI 12.1B YEN GATE - LINK VIDEO YOUTUBE 4) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- TEKS SEJARAH 4 (KIRI PADA DESKTOP) -->
                    <div class="order-2 md:order-1 space-y-3 md:pr-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-amber-500 text-slate-950 text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ TAHUN 2015</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            TRAGEDI 12.1B YEN
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Setelah memenangkan Tenno Sho (Spring) 2015, aksi tak terduga paling ikonik terjadi di
                            Takarazuka Kinen 2015. Saat gerbang pembuka (gate #15) terbuka, Gold Ship mendadak berdiri 2
                            kaki (*rearing up*) dan meraung, menghanguskan taruhan senilai ¥12.1 Miliar Yen (~$100+ Juta
                            USD) milik para bettor!
                        </p>
                        <button onclick="openYoutubeModal('UkZpXwwC860', 'Gold Ship Gate Incident Highlights')"
                            class="btn-red px-4 py-2 rounded-xl text-xs font-bold font-outfit flex items-center gap-2 shadow-sm">
                            <span>▶️</span> Tonton Video Gate Incident 12.1B
                        </button>
                    </div>

                    <!-- KARTU VIDEO YOUTUBE 4 (KANAN PADA DESKTOP) -->
                    <div class="order-1 md:order-2">
                        <div onclick="openYoutubeModal('UkZpXwwC860', 'Gold Ship Gate Incident Highlights')"
                            class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white cursor-pointer group hover:border-red-400 transition-all">
                            <div
                                class="w-full h-56 sm:h-64 rounded-xl overflow-hidden bg-slate-900 relative flex items-center justify-center border border-slate-100">
                                <img src="https://img.youtube.com/vi/P26Opa7F5g0/hqdefault.jpg" alt="Video Gate Incident"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">

                                <div
                                    class="absolute inset-0 bg-slate-950/30 flex items-center justify-center group-hover:bg-slate-950/20 transition-colors">
                                    <div
                                        class="w-14 h-14 rounded-full bg-red-600 text-white flex items-center justify-center text-xl shadow-lg group-hover:scale-110 transition-transform">
                                        ▶
                                    </div>
                                </div>
                                <span
                                    class="absolute bottom-3 right-3 bg-slate-950/80 text-white text-[10px] font-mono px-2 py-0.5 rounded">YouTube
                                    Video</span>
                            </div>
                            <div class="mt-3 text-center flex items-center justify-center gap-2">
                                <span
                                    class="font-bangers text-lg text-slate-800 tracking-wide group-hover:text-red-600 transition-colors">4.
                                    VIDEO: GATE INCIDENT 12.1B YEN</span>
                                <span class="text-xs text-red-600">▶</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MOMEN 5: DESEMBER 2015 (UPACARA PENSIUN SANG LEGENDA - HANYA GAMBAR) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- GAMBAR SEJARAH 5 (KIRI PADA DESKTOP) -->
                    <div class="order-1">
                        <div class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white">
                            <div
                                class="w-full h-56 sm:h-64 rounded-xl overflow-hidden bg-slate-100 relative flex items-center justify-center border border-slate-100">
                                <img src="{{ asset('images/history2.jpg') }}" alt="Upacara Pensiun Gold Ship"
                                    class="w-full h-full object-cover"
                                    onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div
                                    class="hidden w-full h-full flex flex-col items-center justify-center bg-amber-50 text-amber-800 p-6 text-center">
                                    <span class="font-bold text-sm font-outfit">📸 Foto Sejarah 5</span>
                                    <span class="text-xs text-slate-400 font-mono mt-1">images/about_history5.jpg</span>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <span class="font-bangers text-lg text-slate-800 tracking-wide">5. UPACARA PENSIUN (DEC 2015)</span>
                            </div>
                        </div>
                    </div>

                    <!-- TEKS SEJARAH 5 (KANAN PADA DESKTOP) -->
                    <div class="order-2 space-y-3 md:pl-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-red-600 text-white text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ 27 DESEMBER 2015</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            UPACARA PENSIUN SANG LEGENDA
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Pada 27 Desember 2015 usai berlaga di pacuan Arima Kinen, Gold Ship secara resmi mengakhiri
                            karir pacuannya melalui <strong class="text-slate-900">Upacara Pensiun (*Retirement
                                Ceremony*)</strong> di Nakayama Racecourse. Upacara tersebut dihadiri lebih dari 40.000
                            penggemar setia yang membawa bendera dan syal merah-emas untuk melepas sang pahlawan pacuan.
                        </p>
                    </div>
                </div>

                <!-- MOMEN 6: TAHUN 2016 - SEKARANG (KEHIDUPAN SETELAH BALAPAN - LINK VIDEO YOUTUBE 6) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- TEKS SEJARAH 6 (KIRI PADA DESKTOP) -->
                    <div class="order-2 md:order-1 space-y-3 md:pr-6 text-left">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-amber-500 text-slate-950 text-xs font-bold font-mono shadow-sm">
                            <span>🗓️ TAHUN 2016 - SEKARANG</span>
                        </div>
                        <h3 class="font-bangers text-2xl sm:text-3xl text-slate-900 tracking-wide">
                            KEHIDUPAN SETELAH BALAPAN & IKON UMAMUSUME
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 font-outfit leading-relaxed">
                            Setelah pensiun dari dunia pacuan, Gold Ship tinggal sebagai pejantan (Stallion) di <strong
                                class="text-slate-900">Big Red Farm</strong>, Hokkaido. Ia terus memikat hati publik dan
                            dikunjungi ribuan penggemar setiap tahun. Popularitasnya semakin meroket saat ia diadaptasi
                            menjadi salah satu karakter paling lucu dan populer di serial franchise <strong
                                class="text-slate-900">Umamusume Pretty Derby</strong>!
                        </p>
                        <button
                            onclick="openYoutubeModal('lLsQmXzD_M0', 'Gold Ship Life After Racing & Umamusume Highlights')"
                            class="btn-amber px-4 py-2 rounded-xl text-xs font-bold font-outfit flex items-center gap-2 shadow-sm bg-amber-500 hover:bg-amber-600 text-slate-950">
                            <span>▶️</span> Tonton Video Kehidupan Setelah Balapan
                        </button>
                    </div>

                    <!-- KARTU VIDEO YOUTUBE 6 (KANAN PADA DESKTOP) -->
                    <div class="order-1 md:order-2">
                        <div onclick="openYoutubeModal('lLsQmXzD_M0', 'Gold Ship Life After Racing & Umamusume Highlights')"
                            class="clean-card rounded-2xl p-3 shadow-md border border-slate-200 bg-white cursor-pointer group hover:border-amber-400 transition-all">
                            <div
                                class="w-full h-56 sm:h-64 rounded-xl overflow-hidden bg-slate-900 relative flex items-center justify-center border border-slate-100">
                                <img src="https://img.youtube.com/vi/lLsQmXzD_M0/hqdefault.jpg"
                                    alt="Video Kehidupan Setelah Balapan"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">

                                <div
                                    class="absolute inset-0 bg-slate-950/30 flex items-center justify-center group-hover:bg-slate-950/20 transition-colors">
                                    <div
                                        class="w-14 h-14 rounded-full bg-amber-500 text-slate-950 flex items-center justify-center text-xl shadow-lg group-hover:scale-110 transition-transform">
                                        ▶
                                    </div>
                                </div>
                                <span
                                    class="absolute bottom-3 right-3 bg-slate-950/80 text-white text-[10px] font-mono px-2 py-0.5 rounded">YouTube
                                    Video</span>
                            </div>
                            <div class="mt-3 text-center flex items-center justify-center gap-2">
                                <span
                                    class="font-bangers text-lg text-slate-800 tracking-wide group-hover:text-amber-600 transition-colors">6.
                                    VIDEO: KEHIDUPAN SETELAH BALAPAN</span>
                                <span class="text-xs text-amber-600">▶</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <!-- MODAL PEMUTAR VIDEO YOUTUBE EMBEDDED DENGAN EXTRACTOR ROBUST -->
    <div id="youtube-modal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md hidden opacity-0 transition-opacity duration-300">
        <div
            class="bg-white border-2 border-red-500 rounded-3xl max-w-3xl w-full p-4 sm:p-6 relative shadow-2xl transform scale-95 transition-transform duration-300">

            <!-- CLOSE BUTTON -->
            <button onclick="closeYoutubeModal()"
                class="absolute -top-3 -right-3 sm:top-4 sm:right-4 text-white sm:text-slate-500 hover:text-red-600 p-2 rounded-full bg-red-600 sm:bg-slate-100 shadow-md font-bold text-sm z-20">
                ✕
            </button>

            <!-- MODAL HEADER TITLE -->
            <div class="flex items-center gap-3 mb-4 pr-8">
                <span class="text-2xl text-red-600">▶️</span>
                <div>
                    <h3 id="youtube-modal-title" class="font-bangers text-xl sm:text-2xl text-slate-900 tracking-wide">VIDEO
                        HIGHLIGHT GOLD SHIP</h3>
                    <p class="text-[11px] text-slate-400 font-mono">YouTube Embedded Player • Gold Ship Official Highlight
                    </p>
                </div>
            </div>

            <!-- YOUTUBE IFRAME CONTAINER (ASPECT 16:9) -->
            <div
                class="w-full aspect-video rounded-2xl overflow-hidden bg-slate-900 border border-slate-200 relative shadow-inner">
                <iframe id="youtube-iframe" class="w-full h-full border-0" src="" title="YouTube Video Player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

            <div
                class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500 font-outfit">
                <span>Jika video tidak dapat diputar di website, kamu bisa membukanya langsung di YouTube:</span>
                <div class="flex items-center gap-2">
                    <a id="youtube-direct-btn" href="#" target="_blank" rel="noopener noreferrer"
                        class="btn-gold-outline px-3.5 py-1.5 rounded-xl font-bold text-xs flex items-center gap-1">
                        <span>↗</span> Buka di YouTube
                    </a>
                    <button onclick="closeYoutubeModal()" class="btn-red px-4 py-1.5 rounded-xl font-bold text-xs">
                        Tutup Player
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT FOR YOUTUBE MODAL PLAYER WITH ROBUST PARSER -->
    <script>
        /**
         * Ekstrak video ID YouTube (11 karakter) dari URL atau ID langsung.
         */
        function extractYoutubeId(input) {
            if (!input) return '';
            input = input.trim();
            const regExp = /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|shorts\/)([^#\&\?]*).*/;
            const match = input.match(regExp);
            if (match && match[2] && match[2].length >= 11) {
                return match[2].substring(0, 11);
            }
            // Jika input sudah berupa ID murni (11 karakter), ambil sebelum & atau ?
            const cleanId = input.split(/[&?]/)[0];
            if (cleanId.length === 11) {
                return cleanId;
            }
            return input.replace(/[^a-zA-Z0-9_-]/g, '').substring(0, 11);
        }

        /**
         * Ekstrak nilai start time (dalam detik) dari parameter &t= atau ?t=
         * Mendukung format: 135, 135s, 2m15s, 1h2m15s
         */
        function extractYoutubeStartTime(input) {
            if (!input) return null;
            // Cari parameter t= di dalam string (setelah & atau ?)
            const tMatch = input.match(/[?&]t=([^&]+)/);
            if (!tMatch) return null;
            const raw = tMatch[1];
            // Jika sudah angka murni (detik)
            if (/^\d+$/.test(raw)) {
                return parseInt(raw, 10);
            }
            // Parsing format seperti 2m15s, 1h30m, 45s
            let seconds = 0;
            const hours = raw.match(/(\d+)h/);
            const minutes = raw.match(/(\d+)m/);
            const secs = raw.match(/(\d+)s/);
            if (hours) seconds += parseInt(hours[1], 10) * 3600;
            if (minutes) seconds += parseInt(minutes[1], 10) * 60;
            if (secs) seconds += parseInt(secs[1], 10);
            return seconds > 0 ? seconds : null;
        }

        function openYoutubeModal(urlOrId, title) {
            const videoId = extractYoutubeId(urlOrId);
            const startTime = extractYoutubeStartTime(urlOrId);
            const modal = document.getElementById('youtube-modal');
            const iframe = document.getElementById('youtube-iframe');
            const titleEl = document.getElementById('youtube-modal-title');
            const directBtn = document.getElementById('youtube-direct-btn');

            titleEl.innerText = title;

            // Susun embed URL beserta timestamp jika ada
            let embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            if (startTime !== null) {
                embedUrl += `&start=${startTime}`;
            }
            iframe.src = embedUrl;

            // Tautan "Buka di YouTube" dengan timestamp asli agar posisi sama
            if (directBtn) {
                let watchUrl = `https://www.youtube.com/watch?v=${videoId}`;
                if (startTime !== null) {
                    watchUrl += `&t=${startTime}s`;
                }
                directBtn.href = watchUrl;
            }

            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.querySelector('div').classList.remove('scale-95');
            }, 10);
        }

        function closeYoutubeModal() {
            const modal = document.getElementById('youtube-modal');
            const iframe = document.getElementById('youtube-iframe');

            modal.classList.add('opacity-0');
            modal.querySelector('div').classList.add('scale-95');

            setTimeout(() => {
                iframe.src = ""; // Stop video playback when closing!
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
@endsection