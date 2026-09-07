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

        .reveal {
            opacity: 0;
        }

        .reveal.show {
            animation: fadeUp 0.7s ease forwards;
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal {
                opacity: 1;
            }

            .reveal.show {
                animation: none;
            }
        }
    </style>


    {{-- ================= HERO ================= --}}
    <section class="relative bg-[#0A0A0A] text-white overflow-hidden">

        {{-- Background text --}}
        <div class="absolute right-[-30px] bottom-[-70px] text-[10rem] md:text-[16rem] font-display font-extrabold text-white/[0.03] leading-none select-none">
            TALK
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-24 lg:py-32 relative">

            <p class="text-[#B91C1C] text-xs md:text-sm font-semibold tracking-[0.3em] mb-6">
                CONTACT STEALL
            </p>

            <div class="max-w-5xl">

                <h1 class="font-display font-extrabold leading-[0.9] tracking-tight">

                    <span class="block text-5xl md:text-7xl lg:text-8xl">
                        LET'S
                    </span>

                    <span class="block text-[#B91C1C] text-6xl md:text-8xl lg:text-[9rem]">
                        TALK.
                    </span>

                </h1>

                <div class="grid md:grid-cols-2 gap-10 mt-10">

                    <p class="text-white/70 text-base md:text-lg leading-relaxed max-w-md">
                        Punya pertanyaan tentang STEALL, latihan, kegiatan, atau ingin
                        mengetahui lebih banyak tentang tim kami? Jangan ragu untuk
                        menghubungi kami.
                    </p>

                    <p class="text-white/50 text-sm md:text-base leading-relaxed border-l border-white/20 pl-6">
                        Kami terbuka untuk siswa SMK Telkom Makassar yang ingin
                        mengenal lebih jauh tentang ekstrakurikuler basket dan menjadi
                        bagian dari perjalanan STEALL.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= CONTACT INFO ================= --}}
    <section class="reveal bg-white" data-reveal>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-20 lg:py-24">

            <div class="grid lg:grid-cols-12 gap-12">

                {{-- Left --}}
                <div class="lg:col-span-4">

                    <p class="text-[#B91C1C] text-sm font-semibold tracking-[0.25em] mb-4">
                        01 — CONTACT INFO
                    </p>

                    <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight">
                        Find us.
                    </h2>

                    <p class="text-[#1F2937]/60 text-sm leading-relaxed mt-6 max-w-sm">
                        Kamu bisa menghubungi STEALL melalui beberapa platform berikut
                        untuk mendapatkan informasi lebih lanjut.
                    </p>

                </div>


                {{-- Right --}}
                <div class="lg:col-span-8">

                    <div class="border-t border-[#1F2937]/15">

                        {{-- Instagram --}}
                        <div class="grid md:grid-cols-3 gap-4 py-7 border-b border-[#1F2937]/15">

                            <p class="text-[#B91C1C] text-xs font-semibold tracking-widest">
                                INSTAGRAM
                            </p>

                            <p class="md:col-span-2 font-display font-semibold text-xl">
                                @steallbasketball
                            </p>

                        </div>


                        {{-- Email --}}
                        <div class="grid md:grid-cols-3 gap-4 py-7 border-b border-[#1F2937]/15">

                            <p class="text-[#B91C1C] text-xs font-semibold tracking-widest">
                                EMAIL
                            </p>

                            <p class="md:col-span-2 font-display font-semibold text-xl break-all">
                                steall@smktelkom.sch.id
                            </p>

                        </div>


                        {{-- WhatsApp --}}
                        <div class="grid md:grid-cols-3 gap-4 py-7 border-b border-[#1F2937]/15">

                            <p class="text-[#B91C1C] text-xs font-semibold tracking-widest">
                                WHATSAPP
                            </p>

                            <p class="md:col-span-2 font-display font-semibold text-xl">
                                +62 812 3456 7890
                            </p>

                        </div>


                        {{-- Location --}}
                        <div class="grid md:grid-cols-3 gap-4 py-7 border-b border-[#1F2937]/15">

                            <p class="text-[#B91C1C] text-xs font-semibold tracking-widest">
                                LOCATION
                            </p>

                            <p class="md:col-span-2 font-display font-semibold text-xl">
                                SMK Telkom Makassar
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= CONTACT FORM ================= --}}
    <section class="reveal bg-[#F3F4F6] border-y border-[#1F2937]/10" data-reveal>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-20 lg:py-28">

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20">

                {{-- Title --}}
                <div class="lg:col-span-4">

                    <p class="text-[#B91C1C] text-sm font-semibold tracking-[0.25em] mb-4">
                        02 — SEND A MESSAGE
                    </p>

                    <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight">
                        Let's start a conversation.
                    </h2>

                    <p class="text-[#1F2937]/60 text-sm leading-relaxed mt-6 max-w-sm">
                        Kirimkan pertanyaan atau pesan kamu kepada kami. Pesan akan
                        diterima dan dapat dilihat oleh pengurus STEALL.
                    </p>

                </div>


                {{-- Form --}}
                <div class="lg:col-span-8">

                    <form action="#" method="POST" class="space-y-8">

                        @csrf

                        {{-- Name --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                NAMA
                            </label>

                            <input
                                type="text"
                                name="name"
                                placeholder="Masukkan nama kamu"
                                class="
                                    w-full
                                    bg-transparent
                                    border-0
                                    border-b
                                    border-[#1F2937]/30
                                    px-0
                                    py-4
                                    text-[#0A0A0A]
                                    placeholder:text-[#1F2937]/40
                                    focus:ring-0
                                    focus:border-[#B91C1C]
                                    transition-colors
                                "
                            >

                        </div>


                        {{-- Email --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                EMAIL
                            </label>

                            <input
                                type="email"
                                name="email"
                                placeholder="email@example.com"
                                class="
                                    w-full
                                    bg-transparent
                                    border-0
                                    border-b
                                    border-[#1F2937]/30
                                    px-0
                                    py-4
                                    text-[#0A0A0A]
                                    placeholder:text-[#1F2937]/40
                                    focus:ring-0
                                    focus:border-[#B91C1C]
                                    transition-colors
                                "
                            >

                        </div>


                        {{-- Subject --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                SUBJECT
                            </label>

                            <input
                                type="text"
                                name="subject"
                                placeholder="Tentang apa pesan kamu?"
                                class="
                                    w-full
                                    bg-transparent
                                    border-0
                                    border-b
                                    border-[#1F2937]/30
                                    px-0
                                    py-4
                                    text-[#0A0A0A]
                                    placeholder:text-[#1F2937]/40
                                    focus:ring-0
                                    focus:border-[#B91C1C]
                                    transition-colors
                                "
                            >

                        </div>


                        {{-- Message --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                PESAN
                            </label>

                            <textarea
                                name="message"
                                rows="5"
                                placeholder="Tulis pesan kamu di sini..."
                                class="
                                    w-full
                                    bg-transparent
                                    border-0
                                    border-b
                                    border-[#1F2937]/30
                                    px-0
                                    py-4
                                    resize-none
                                    text-[#0A0A0A]
                                    placeholder:text-[#1F2937]/40
                                    focus:ring-0
                                    focus:border-[#B91C1C]
                                    transition-colors
                                "
                            ></textarea>

                        </div>


                        {{-- Submit --}}
                        <div class="pt-4">

                            <button
                                type="submit"
                                class="
                                    inline-flex
                                    items-center
                                    gap-3
                                    bg-[#B91C1C]
                                    text-white
                                    px-8
                                    py-4
                                    text-sm
                                    font-semibold
                                    tracking-wide
                                    hover:bg-[#7F1D1D]
                                    transition-colors
                                "
                            >
                                KIRIM PESAN

                                <span class="text-lg">
                                    →
                                </span>

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= MEMBER CTA ================= --}}
    <section class="reveal bg-[#0A0A0A] text-white relative overflow-hidden" data-reveal>

        <div class="absolute right-[-50px] top-[-50px] text-[14rem] font-display font-extrabold text-white/[0.03] select-none">
            JOIN
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-20 lg:py-28 relative">

            @guest

                <div class="max-w-3xl">

                    <p class="text-[#B91C1C] text-sm font-semibold tracking-[0.25em] mb-6">
                        WANT TO JOIN?
                    </p>

                    <h2 class="font-display font-bold text-4xl md:text-6xl leading-[0.95]">
                        JOIN THE<br>
                        STEALL FAMILY.
                    </h2>

                    <p class="text-white/60 leading-relaxed mt-8 max-w-xl">
                        Buat akun terlebih dahulu untuk mendapatkan akses ke informasi
                        anggota, roster pemain, jadwal latihan, galeri, dan pendaftaran
                        anggota STEALL.
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">

                        <a
                            href="{{ route('register') }}"
                            class="bg-[#B91C1C] text-white px-8 py-4 text-sm font-semibold hover:bg-[#7F1D1D] transition-colors"
                        >
                            BUAT AKUN →
                        </a>

                        <a
                            href="{{ route('login') }}"
                            class="border border-white/20 text-white px-8 py-4 text-sm font-semibold hover:bg-white hover:text-[#0A0A0A] transition-colors"
                        >
                            LOGIN
                        </a>

                    </div>

                </div>

            @else

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">

                    <div class="max-w-2xl">

                        <p class="text-[#B91C1C] text-sm font-semibold tracking-[0.25em] mb-6">
                            YOU'RE LOGGED IN
                        </p>

                        <h2 class="font-display font-bold text-4xl md:text-6xl leading-[0.95]">
                            READY TO<br>
                            JOIN THE TEAM?
                        </h2>

                        <p class="text-white/60 leading-relaxed mt-7">
                            Kamu sudah memiliki akun. Sekarang kamu dapat melanjutkan
                            proses pendaftaran untuk menjadi anggota STEALL.
                        </p>

                    </div>


                    <a
                        href="{{ route('application') }}"
                        class="
                            bg-[#B91C1C]
                            text-white
                            px-8
                            py-5
                            text-sm
                            font-semibold
                            tracking-wide
                            hover:bg-[#7F1D1D]
                            transition-colors
                            w-fit
                        "
                    >
                        DAFTAR SEKARANG →
                    </a>

                </div>

            @endguest

        </div>

    </section>


    {{-- ================= REVEAL SCRIPT ================= --}}
    <script>
        const revealEls = document.querySelectorAll('[data-reveal]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {

                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }

            });
        }, {
            threshold: 0.1
        });

        revealEls.forEach(el => observer.observe(el));
    </script>

</x-app-layout>