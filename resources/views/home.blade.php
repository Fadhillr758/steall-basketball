<x-app-layout>

    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes revealLine {
            from {
                transform: scaleX(0);
                transform-origin: left;
            }
            to {
                transform: scaleX(1);
                transform-origin: left;
            }
        }

        .reveal {
            opacity: 0;
        }

        .reveal.show {
            animation: fadeUp 0.7s cubic-bezier(.2,.8,.2,1) forwards;
        }

        .hero-line {
            animation: revealLine 1s cubic-bezier(.2,.8,.2,1) forwards;
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal,
            .reveal.show {
                opacity: 1;
                animation: none;
                transform: none;
            }

            .hero-line {
                animation: none;
            }
        }
    </style>


    {{-- HERO --}}
    <section class="relative min-h-[760px] bg-[#080808] text-white overflow-hidden">

        {{-- Grid background --}}
        <div
            class="absolute inset-0 opacity-[0.05]"
            style="
                background-image:
                linear-gradient(rgba(255,255,255,.7) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.7) 1px, transparent 1px);
                background-size: 72px 72px;
            ">
        </div>

        {{-- Maroon accent --}}
        <div class="absolute top-0 right-0 w-[45%] h-full bg-[#7F1D1D]/20 skew-x-[-12deg] translate-x-1/3"></div>

        {{-- Large STEALL watermark --}}
        <div class="absolute right-[-80px] bottom-[-50px select-none pointer-events-none opacity-[0.05]">
            <span class="font-display font-black text-[18rem] leading-none tracking-tighter">
                STEALL
            </span>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-16 pt-24 pb-24 min-h-[760px] flex items-center">

            <div class="grid lg:grid-cols-12 gap-12 w-full items-center">

                {{-- LEFT CONTENT --}}
                <div class="lg:col-span-7">

                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-10 h-[2px] bg-[#B91C1C]"></div>

                        <p class="text-[#B91C1C] text-xs md:text-sm font-semibold tracking-[0.25em]">
                            SMK TELKOM MAKASSAR
                        </p>
                    </div>

                    <p class="text-white/40 text-sm font-medium tracking-[0.3em] mb-5">
                        BASKETBALL EXTRACURRICULAR
                    </p>

                    <h1 class="font-display font-black leading-[0.88] tracking-[-0.05em]">

                        <span class="block text-4xl md:text-5xl lg:text-6xl text-white/60 font-semibold mb-4">
                            Dibangun dari
                        </span>

                        <span class="block text-7xl md:text-[8rem] lg:text-[10rem] xl:text-[11rem] text-white">
                            STEALL
                        </span>

                    </h1>

                    <div class="hero-line w-20 h-1 bg-[#B91C1C] mt-8 mb-8"></div>

                    <p class="text-white/60 text-base md:text-lg leading-relaxed max-w-xl">
                        Ekstrakurikuler basket SMK Telkom Makassar yang menjadi ruang
                        bagi siswa untuk berkembang melalui latihan, kerja sama tim,
                        disiplin, dan kompetisi.
                    </p>

                    <div class="flex flex-wrap gap-4 mt-10">

                        <a
                            href="{{ route('about') }}"
                            class="group bg-[#B91C1C] px-7 py-4 text-sm font-semibold tracking-wide hover:bg-[#991B1B] transition-colors"
                        >
                            Tentang STEALL
                            <span class="inline-block ml-2 transition-transform group-hover:translate-x-1">
                                →
                            </span>
                        </a>

                        <a
                            href="{{ route('contact') }}"
                            class="border border-white/20 px-7 py-4 text-sm font-semibold tracking-wide hover:border-white hover:bg-white hover:text-black transition-all"
                        >
                            Hubungi Kami
                        </a>

                    </div>

                </div>


                {{-- RIGHT BRAND VISUAL --}}
                <div class="lg:col-span-5 relative hidden lg:flex justify-end">

                    <div class="relative w-[430px] h-[430px]">

                        {{-- Circle --}}
                        <div class="absolute inset-0 rounded-full border border-white/10"></div>

                        <div class="absolute inset-[35px] rounded-full border border-[#B91C1C]/40"></div>

                        {{-- Logo area --}}
                        <div class="absolute inset-0 flex items-center justify-center">

                            <div class="w-[300px] aspect-square flex items-center justify-center">

                                {{-- Ganti path sesuai lokasi logo --}}
                                <img
                                    src="{{ asset('images/steall-logo.png') }}"
                                    alt="STEALL Basketball"
                                    class="w-full h-full object-contain"
                                >

                            </div>

                        </div>

                        {{-- Small labels --}}
                        <div class="absolute -left-10 top-16 border border-white/10 bg-[#0A0A0A] px-4 py-3">
                            <p class="text-[10px] tracking-[0.25em] text-white/40">
                                ESTABLISHED
                            </p>
                            <p class="text-sm font-semibold mt-1">
                                STEALL
                            </p>
                        </div>

                        <div class="absolute -right-8 bottom-16 border border-white/10 bg-[#0A0A0A] px-4 py-3">
                            <p class="text-[10px] tracking-[0.25em] text-white/40">
                                REPRESENTING
                            </p>
                            <p class="text-sm font-semibold mt-1">
                                SMK TELKOM
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Bottom label --}}
        <div class="absolute bottom-0 left-0 w-full border-t border-white/10">

            <div class="max-w-7xl mx-auto px-6 lg:px-16 py-5 flex justify-between items-center">

                <span class="text-xs tracking-[0.2em] text-white/30">
                    DISCIPLINE • TEAMWORK • COMPETITION
                </span>

                <span class="text-xs text-white/30">
                    ↓ SCROLL TO EXPLORE
                </span>

            </div>

        </div>

    </section>



    {{-- TEAM HIGHLIGHTS --}}
    <section class="reveal bg-[#0A0A0A] border-b border-white/10" data-reveal>

        <div class="max-w-7xl mx-auto grid md:grid-cols-3">

            <div class="group p-8 lg:p-10 border-b md:border-b-0 md:border-r border-white/10 hover:bg-white/[0.02] transition-colors">

                <span class="text-[#B91C1C] text-xs font-bold tracking-[0.25em]">
                    01 / LATIHAN
                </span>

                <h3 class="text-white text-2xl font-display font-bold mt-6 mb-3">
                    Latihan Rutin
                </h3>

                <p class="text-white/50 text-sm leading-relaxed max-w-sm">
                    Setiap Selasa dan Jumat sore, pemain berlatih bersama untuk
                    mengembangkan teknik, fisik, dan kerja sama tim.
                </p>

            </div>


            <div class="group p-8 lg:p-10 border-b md:border-b-0 md:border-r border-white/10 hover:bg-white/[0.02] transition-colors">

                <span class="text-[#B91C1C] text-xs font-bold tracking-[0.25em]">
                    02 / KOMPETISI
                </span>

                <h3 class="text-white text-2xl font-display font-bold mt-6 mb-3">
                    Bertanding Bersama
                </h3>

                <p class="text-white/50 text-sm leading-relaxed max-w-sm">
                    Membawa semangat dan kemampuan terbaik untuk mewakili
                    SMK Telkom Makassar dalam berbagai pertandingan.
                </p>

            </div>


            <div class="group p-8 lg:p-10 hover:bg-white/[0.02] transition-colors">

                <span class="text-[#B91C1C] text-xs font-bold tracking-[0.25em]">
                    03 / ANGGOTA
                </span>

                <h3 class="text-white text-2xl font-display font-bold mt-6 mb-3">
                    Satu Tim
                </h3>

                <p class="text-white/50 text-sm leading-relaxed max-w-sm">
                    Terbuka bagi siswa yang ingin belajar, berkembang, dan menjadi
                    bagian dari perjalanan STEALL.
                </p>

            </div>

        </div>

    </section>



    {{-- ABOUT SECTION --}}
    <section class="reveal bg-white" data-reveal>

        <div class="grid lg:grid-cols-2 min-h-[600px]">

            {{-- Visual --}}
            <div class="relative bg-[#151515] overflow-hidden">

                <div class="absolute inset-0 flex items-center justify-center">

                    <div class="text-center">

                        <p class="text-[#B91C1C] text-xs font-bold tracking-[0.3em] mb-5">
                            STEALL BASKETBALL
                        </p>

                        <span class="font-display font-black text-7xl md:text-8xl text-white/10">
                            ONE TEAM
                        </span>

                    </div>

                </div>

                <div class="absolute bottom-0 left-0 p-8 lg:p-12">

                    <div class="w-12 h-[2px] bg-[#B91C1C] mb-5"></div>

                    <p class="text-white/60 text-sm max-w-sm leading-relaxed">
                        Lebih dari sekadar latihan dan pertandingan. STEALL adalah
                        tempat untuk tumbuh bersama sebagai satu tim.
                    </p>

                </div>

            </div>


            {{-- Content --}}
            <div class="flex items-center px-6 md:px-12 lg:px-20 py-20">

                <div class="max-w-xl">

                    <p class="text-[#B91C1C] text-xs font-bold tracking-[0.25em] mb-6">
                        TENTANG STEALL
                    </p>

                    <h2 class="font-display font-black text-4xl md:text-5xl leading-tight tracking-tight text-[#0A0A0A] mb-7">
                        Tempat Kami Belajar Menjadi Lebih Baik.
                    </h2>

                    <p class="text-[#1F2937]/70 leading-relaxed mb-5">
                        STEALL merupakan ekstrakurikuler basket SMK Telkom Makassar
                        yang menjadi wadah bagi siswa untuk mengembangkan kemampuan
                        bermain basket dalam lingkungan latihan yang terarah.
                    </p>

                    <p class="text-[#1F2937]/70 leading-relaxed mb-10">
                        Melalui latihan yang konsisten dan semangat kebersamaan,
                        setiap anggota didorong untuk berkembang sebagai pemain
                        sekaligus sebagai bagian dari sebuah tim.
                    </p>

                    <a
                        href="{{ route('about') }}"
                        class="inline-flex items-center gap-3 text-[#7F1D1D] text-sm font-bold group"
                    >

                        <span class="border-b-2 border-[#7F1D1D] pb-1">
                            Kenali STEALL Lebih Dekat
                        </span>

                        <span class="transition-transform group-hover:translate-x-2">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- VALUES --}}
    <section class="reveal max-w-7xl mx-auto px-6 lg:px-16 py-24" data-reveal>

        <div class="grid lg:grid-cols-12 gap-12 mb-16">

            <div class="lg:col-span-4">

                <p class="text-[#B91C1C] text-xs font-bold tracking-[0.25em] mb-5">
                    NILAI TIM
                </p>

                <h2 class="font-display font-black text-4xl leading-tight">
                    Apa yang Kami Bawa ke Lapangan.
                </h2>

            </div>

            <div class="lg:col-span-8 flex items-end">

                <p class="text-[#1F2937]/60 leading-relaxed max-w-xl">
                    Kemampuan bermain basket berkembang melalui latihan. Namun,
                    karakter sebuah tim dibangun dari nilai yang dijaga bersama
                    setiap hari.
                </p>

            </div>

        </div>


        <div class="grid md:grid-cols-3 border-t border-[#1F2937]/15">

            <div class="py-10 md:pr-10 border-b md:border-b-0 md:border-r border-[#1F2937]/15">

                <span class="text-[#B91C1C] font-display font-black text-5xl">
                    01
                </span>

                <h3 class="font-display font-bold text-xl mt-6 mb-3">
                    Disiplin
                </h3>

                <p class="text-[#1F2937]/65 text-sm leading-relaxed">
                    Konsisten dalam latihan, menghargai waktu, dan menjalankan
                    tanggung jawab sebagai bagian dari tim.
                </p>

            </div>


            <div class="py-10 md:px-10 border-b md:border-b-0 md:border-r border-[#1F2937]/15">

                <span class="text-[#B91C1C] font-display font-black text-5xl">
                    02
                </span>

                <h3 class="font-display font-bold text-xl mt-6 mb-3">
                    Kerja Sama
                </h3>

                <p class="text-[#1F2937]/65 text-sm leading-relaxed">
                    Tidak ada kemenangan yang dibangun oleh satu pemain. Kami
                    belajar saling percaya dan bermain sebagai satu kesatuan.
                </p>

            </div>


            <div class="py-10 md:pl-10">

                <span class="text-[#B91C1C] font-display font-black text-5xl">
                    03
                </span>

                <h3 class="font-display font-bold text-xl mt-6 mb-3">
                    Kompetitif
                </h3>

                <p class="text-[#1F2937]/65 text-sm leading-relaxed">
                    Berani menghadapi tantangan dan terus berkembang melalui
                    latihan maupun pertandingan.
                </p>

            </div>

        </div>

    </section>



    {{-- MEMBER ACCESS --}}
    <section class="reveal bg-[#F3F4F6] border-y border-[#1F2937]/10" data-reveal>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-24">

            <div class="grid lg:grid-cols-12 gap-12 items-end">

                <div class="lg:col-span-7">

                    <p class="text-[#B91C1C] text-xs font-bold tracking-[0.25em] mb-6">
                        AREA ANGGOTA
                    </p>

                    <h2 class="font-display font-black text-4xl md:text-6xl tracking-tight leading-[0.95] text-[#0A0A0A]">
                        Semua Informasi Tim
                        <span class="text-[#B91C1C]">Dalam Satu Tempat.</span>
                    </h2>

                </div>

                <div class="lg:col-span-5">

                    <p class="text-[#1F2937]/65 leading-relaxed mb-8">
                        Anggota yang telah terdaftar dapat mengakses roster pemain,
                        jadwal latihan, galeri kegiatan, dan informasi keanggotaan
                        melalui akun STEALL.
                    </p>

                    @guest

                        <div class="flex flex-wrap gap-4">

                            <a
                                href="{{ route('login') }}"
                                class="bg-[#7F1D1D] text-white px-7 py-4 text-sm font-semibold hover:bg-[#5B1111] transition-colors"
                            >
                                Login Anggota
                            </a>

                            <a
                                href="{{ route('register') }}"
                                class="border border-[#0A0A0A] px-7 py-4 text-sm font-semibold hover:bg-[#0A0A0A] hover:text-white transition-colors"
                            >
                                Buat Akun
                            </a>

                        </div>

                    @else

                        <a
                            href="{{ route('dashboard') }}"
                            class="inline-flex bg-[#7F1D1D] text-white px-7 py-4 text-sm font-semibold hover:bg-[#5B1111] transition-colors"
                        >
                            Buka Dashboard →
                        </a>

                    @endguest

                </div>

            </div>

        </div>

    </section>



    {{-- FINAL CTA --}}
    <section class="reveal bg-[#0A0A0A] text-white relative overflow-hidden" data-reveal>

        <div class="absolute right-[-40px] top-[-80px] text-[20rem] font-black text-white/[0.02] select-none">
            S
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-16 py-24">

            <div class="max-w-3xl">

                <p class="text-[#B91C1C] text-xs font-bold tracking-[0.25em] mb-6">
                    JOIN THE TEAM
                </p>

                <h2 class="font-display font-black text-4xl md:text-6xl leading-[0.95] tracking-tight mb-7">
                    Siap Menjadi Bagian dari STEALL?
                </h2>

                <p class="text-white/55 text-lg leading-relaxed mb-10 max-w-xl">
                    Punya minat terhadap basket dan ingin berkembang bersama tim?
                    Kenali lebih jauh STEALL dan hubungi kami untuk informasi
                    keanggotaan.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-4 bg-[#B91C1C] px-8 py-4 text-sm font-semibold hover:bg-[#991B1B] transition-colors group"
                >

                    Hubungi Kami

                    <span class="transition-transform group-hover:translate-x-2">
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>



    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const revealEls = document.querySelectorAll('[data-reveal]');

            if (!('IntersectionObserver' in window)) {
                revealEls.forEach(el => el.classList.add('show'));
                return;
            }

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }

                });

            }, {
                threshold: 0.12
            });

            revealEls.forEach(el => observer.observe(el));

        });
    </script>

</x-app-layout>