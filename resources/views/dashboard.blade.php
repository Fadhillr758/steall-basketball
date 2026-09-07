<x-app-layout>

    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dashboard-reveal {
            opacity: 0;
        }

        .dashboard-reveal.show {
            animation: fadeUp 0.6s ease forwards;
        }

        @media (prefers-reduced-motion: reduce) {
            .dashboard-reveal {
                opacity: 1;
            }

            .dashboard-reveal.show {
                animation: none;
            }
        }
    </style>


    {{-- ================================================= --}}
    {{-- HERO / WELCOME --}}
    {{-- ================================================= --}}

    <section class="relative bg-[#0A0A0A] text-white overflow-hidden">

        {{-- Background Decoration --}}
        <div class="absolute -right-20 -bottom-32 font-display font-extrabold text-[14rem] text-white/[0.03] leading-none select-none">
            STEALL
        </div>

        {{-- Basketball --}}
        <div class="absolute right-[-100px] top-1/2 -translate-y-1/2 hidden lg:block opacity-90 pointer-events-none">

            <svg width="430" height="430" viewBox="0 0 200 200" fill="none">

                <circle cx="100" cy="100" r="95" fill="#B91C1C"/>

                <path
                    d="M100 5 V195 M5 100 H195"
                    stroke="#0A0A0A"
                    stroke-width="3"
                />

                <path
                    d="M20 30 Q100 100 20 170"
                    stroke="#0A0A0A"
                    stroke-width="3"
                    fill="none"
                />

                <path
                    d="M180 30 Q100 100 180 170"
                    stroke="#0A0A0A"
                    stroke-width="3"
                    fill="none"
                />

                <circle
                    cx="100"
                    cy="100"
                    r="95"
                    stroke="#0A0A0A"
                    stroke-width="3"
                    fill="none"
                />

            </svg>

        </div>


        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-20 lg:py-28 relative">

            <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.3em] mb-6">
                MEMBER DASHBOARD — STEALL BASKETBALL
            </p>


            <h1 class="font-display font-extrabold leading-[0.92] tracking-tight max-w-4xl">

                <span class="block text-4xl md:text-5xl text-white/60 mb-3">
                    Welcome,
                </span>

                <span class="block text-6xl md:text-7xl lg:text-[7rem] uppercase">
                    {{ auth()->user()->name }}
                </span>

            </h1>


            <p class="text-white/60 text-base md:text-lg leading-relaxed max-w-xl mt-8">

                @if (!$application)
                    Akun kamu sudah berhasil dibuat. Sekarang lengkapi
                    pendaftaran untuk menjadi bagian dari STEALL Basketball
                    SMK Telkom Makassar.
                @elseif ($application->status === 'pending')
                    Pendaftaran kamu sudah berhasil dikirim dan saat ini
                    sedang menunggu proses verifikasi dari admin STEALL.
                @elseif ($application->status === 'accepted')
                    Selamat! Kamu telah diterima sebagai bagian dari
                    STEALL Basketball SMK Telkom Makassar.
                @elseif ($application->status === 'rejected')
                    Pendaftaran kamu belum diterima. Hubungi pengurus
                    STEALL untuk mendapatkan informasi lebih lanjut.
                @endif

            </p>

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- REGISTRATION STATUS --}}
    {{-- ================================================= --}}

    <section class="dashboard-reveal bg-[#F3F4F6] border-b border-[#1F2937]/10" data-dashboard-reveal>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-16">


            {{-- ================================================= --}}
            {{-- BELUM MENDAFTAR --}}
            {{-- ================================================= --}}

            @if (!$application)

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <div>

                        <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-4">
                            YOUR MEMBERSHIP
                        </p>

                        <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight text-[#0A0A0A]">
                            Satu langkah lagi
                            untuk bergabung.
                        </h2>

                        <p class="text-[#1F2937]/70 leading-relaxed mt-6 max-w-lg">
                            Memiliki akun belum berarti kamu sudah menjadi anggota
                            resmi STEALL. Lengkapi formulir pendaftaran terlebih
                            dahulu agar data kamu dapat diproses oleh pengurus.
                        </p>


                        <a
                            href="{{ route('application') }}"
                            class="inline-flex items-center gap-3 mt-8 bg-[#B91C1C] text-white px-7 py-4 text-sm font-semibold tracking-wide hover:bg-[#7F1D1D] transition-colors"
                        >
                            DAFTAR MENJADI ANGGOTA

                            <span class="text-lg">
                                →
                            </span>
                        </a>

                    </div>


                    {{-- Progress --}}
                    <div class="border border-[#1F2937]/10 bg-white">


                        {{-- Step 01 --}}
                        <div class="flex gap-6 p-7 border-b border-[#1F2937]/10">

                            <div class="font-display text-3xl font-bold text-[#B91C1C]">
                                01
                            </div>

                            <div>

                                <div class="flex items-center gap-3 mb-2">

                                    <h3 class="font-display font-semibold text-lg">
                                        Buat Akun
                                    </h3>

                                    <span class="text-[10px] font-bold tracking-widest bg-[#0A0A0A] text-white px-2 py-1">
                                        SELESAI
                                    </span>

                                </div>

                                <p class="text-sm text-[#1F2937]/60 leading-relaxed">
                                    Akun STEALL kamu sudah berhasil dibuat.
                                </p>

                            </div>

                        </div>


                        {{-- Step 02 --}}
                        <div class="flex gap-6 p-7 border-b border-[#1F2937]/10 bg-[#B91C1C]/[0.03]">

                            <div class="font-display text-3xl font-bold text-[#B91C1C]">
                                02
                            </div>

                            <div>

                                <div class="flex items-center gap-3 mb-2">

                                    <h3 class="font-display font-semibold text-lg">
                                        Pendaftaran Anggota
                                    </h3>

                                    <span class="text-[10px] font-bold tracking-widest text-[#B91C1C] border border-[#B91C1C]/30 px-2 py-1">
                                        SEKARANG
                                    </span>

                                </div>

                                <p class="text-sm text-[#1F2937]/60 leading-relaxed">
                                    Lengkapi data diri dan informasi yang diperlukan
                                    untuk bergabung dengan STEALL.
                                </p>

                            </div>

                        </div>


                        {{-- Step 03 --}}
                        <div class="flex gap-6 p-7">

                            <div class="font-display text-3xl font-bold text-[#1F2937]/20">
                                03
                            </div>

                            <div>

                                <h3 class="font-display font-semibold text-lg text-[#1F2937]/50 mb-2">
                                    Verifikasi
                                </h3>

                                <p class="text-sm text-[#1F2937]/40 leading-relaxed">
                                    Setelah pendaftaran dikirim, data kamu akan
                                    menunggu proses verifikasi.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


            {{-- ================================================= --}}
            {{-- STATUS PENDING --}}
            {{-- ================================================= --}}

            @elseif ($application->status === 'pending')

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <div>

                        <p class="text-yellow-600 text-xs font-semibold tracking-[0.25em] mb-4">
                            APPLICATION STATUS
                        </p>

                        <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight text-[#0A0A0A]">
                            Pendaftaran sedang
                            ditinjau.
                        </h2>

                        <p class="text-[#1F2937]/70 leading-relaxed mt-6 max-w-lg">
                            Data pendaftaran kamu sudah berhasil dikirim.
                            Saat ini admin STEALL sedang melakukan proses
                            verifikasi terhadap data kamu.
                        </p>


                        <div class="inline-flex items-center gap-3 mt-8 border border-yellow-500/40 bg-yellow-50 text-yellow-700 px-6 py-4 text-sm font-bold tracking-wide">

                            <span class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></span>

                            MENUNGGU VERIFIKASI

                        </div>

                    </div>


                    {{-- Progress --}}
                    <div class="border border-[#1F2937]/10 bg-white">


                        {{-- Step 01 --}}
                        <div class="flex gap-6 p-7 border-b border-[#1F2937]/10">

                            <div class="font-display text-3xl font-bold text-[#B91C1C]">
                                01
                            </div>

                            <div>

                                <div class="flex items-center gap-3 mb-2">

                                    <h3 class="font-display font-semibold text-lg">
                                        Buat Akun
                                    </h3>

                                    <span class="text-[10px] font-bold tracking-widest bg-[#0A0A0A] text-white px-2 py-1">
                                        SELESAI
                                    </span>

                                </div>

                                <p class="text-sm text-[#1F2937]/60">
                                    Akun berhasil dibuat.
                                </p>

                            </div>

                        </div>


                        {{-- Step 02 --}}
                        <div class="flex gap-6 p-7 border-b border-[#1F2937]/10">

                            <div class="font-display text-3xl font-bold text-[#B91C1C]">
                                02
                            </div>

                            <div>

                                <div class="flex items-center gap-3 mb-2">

                                    <h3 class="font-display font-semibold text-lg">
                                        Pendaftaran Anggota
                                    </h3>

                                    <span class="text-[10px] font-bold tracking-widest bg-[#0A0A0A] text-white px-2 py-1">
                                        SELESAI
                                    </span>

                                </div>

                                <p class="text-sm text-[#1F2937]/60">
                                    Formulir pendaftaran berhasil dikirim.
                                </p>

                            </div>

                        </div>


                        {{-- Step 03 --}}
                        <div class="flex gap-6 p-7 bg-yellow-50">

                            <div class="font-display text-3xl font-bold text-yellow-600">
                                03
                            </div>

                            <div>

                                <div class="flex items-center gap-3 mb-2">

                                    <h3 class="font-display font-semibold text-lg">
                                        Verifikasi
                                    </h3>

                                    <span class="text-[10px] font-bold tracking-widest text-yellow-700 border border-yellow-500/40 px-2 py-1">
                                        MENUNGGU
                                    </span>

                                </div>

                                <p class="text-sm text-[#1F2937]/60">
                                    Admin sedang meninjau pendaftaran kamu.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


            {{-- ================================================= --}}
            {{-- STATUS ACCEPTED --}}
            {{-- ================================================= --}}

            @elseif ($application->status === 'accepted')

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <div>

                        <p class="text-green-600 text-xs font-semibold tracking-[0.25em] mb-4">
                            APPLICATION APPROVED
                        </p>

                        <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight text-[#0A0A0A]">
                            Selamat, kamu
                            resmi diterima!
                        </h2>

                        <p class="text-[#1F2937]/70 leading-relaxed mt-6 max-w-lg">
                            Pendaftaran kamu telah disetujui oleh admin.
                            Kamu sekarang resmi menjadi bagian dari
                            STEALL Basketball SMK Telkom Makassar.
                        </p>

                        <div class="inline-flex items-center gap-3 mt-8 border border-green-500/40 bg-green-50 text-green-700 px-6 py-4 text-sm font-bold tracking-wide">

                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                            PENDAFTARAN DITERIMA

                        </div>

                    </div>


                    {{-- Status Card --}}
                    <div class="border border-green-500/20 bg-white p-8 md:p-10">

                        <p class="text-green-600 text-xs font-semibold tracking-[0.25em] mb-6">
                            MEMBER STATUS
                        </p>

                        <div class="font-display text-5xl md:text-6xl font-bold text-[#0A0A0A] mb-5">
                            OFFICIAL
                        </div>

                        <p class="text-[#1F2937]/60 leading-relaxed">
                            Kamu telah mendapatkan status sebagai anggota
                            STEALL Basketball.
                        </p>

                        <div class="mt-8 pt-6 border-t border-[#1F2937]/10">

                            <p class="text-xs text-[#1F2937]/40 tracking-widest mb-2">
                                STATUS
                            </p>

                            <p class="font-semibold text-green-600">
                                ACTIVE MEMBER
                            </p>

                        </div>

                    </div>

                </div>


            {{-- ================================================= --}}
            {{-- STATUS REJECTED --}}
            {{-- ================================================= --}}

            @elseif ($application->status === 'rejected')

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <div>

                        <p class="text-red-600 text-xs font-semibold tracking-[0.25em] mb-4">
                            APPLICATION STATUS
                        </p>

                        <h2 class="font-display font-bold text-4xl md:text-5xl leading-tight text-[#0A0A0A]">
                            Pendaftaran belum
                            diterima.
                        </h2>

                        <p class="text-[#1F2937]/70 leading-relaxed mt-6 max-w-lg">
                            Terima kasih sudah mendaftar untuk menjadi bagian
                            dari STEALL Basketball. Saat ini pendaftaran kamu
                            belum dapat disetujui.
                        </p>

                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-3 mt-8 border border-[#0A0A0A] text-[#0A0A0A] px-7 py-4 text-sm font-semibold tracking-wide hover:bg-[#0A0A0A] hover:text-white transition-colors"
                        >
                            HUBUNGI PENGURUS

                            <span class="text-lg">
                                →
                            </span>
                        </a>

                    </div>


                    {{-- Status Card --}}
                    <div class="border border-red-500/20 bg-white p-8 md:p-10">

                        <p class="text-red-600 text-xs font-semibold tracking-[0.25em] mb-6">
                            MEMBER STATUS
                        </p>

                        <div class="font-display text-5xl md:text-6xl font-bold text-[#0A0A0A] mb-5">
                            REVIEW
                        </div>

                        <p class="text-[#1F2937]/60 leading-relaxed">
                            Hubungi pengurus STEALL jika kamu membutuhkan
                            informasi lebih lanjut mengenai hasil pendaftaran.
                        </p>

                        <div class="mt-8 pt-6 border-t border-[#1F2937]/10">

                            <p class="text-xs text-[#1F2937]/40 tracking-widest mb-2">
                                STATUS
                            </p>

                            <p class="font-semibold text-red-600">
                                NOT ACCEPTED
                            </p>

                        </div>

                    </div>

                </div>

            @endif

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- MEMBER ACCESS --}}
    {{-- ================================================= --}}

    <section class="dashboard-reveal px-6 lg:px-16 py-20" data-dashboard-reveal>

        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10">

                <div>

                    <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-4">
                        MEMBER ACCESS
                    </p>

                    <h2 class="font-display font-bold text-4xl md:text-5xl">
                        Jelajahi STEALL.
                    </h2>

                </div>

                <p class="text-sm text-[#1F2937]/50 max-w-sm md:text-right">
                    Akses informasi dan aktivitas STEALL melalui halaman di bawah.
                </p>

            </div>


            <div class="grid md:grid-cols-2 border-t border-l border-[#1F2937]/10">


                {{-- Roster --}}
                <a
                    href="{{ route('roster') }}"
                    class="group border-r border-b border-[#1F2937]/10 p-8 md:p-10 hover:bg-[#0A0A0A] hover:text-white transition-all duration-300"
                >

                    <div class="flex justify-between items-start mb-16">

                        <span class="font-display text-4xl font-bold text-[#B91C1C]">
                            01
                        </span>

                        <span class="text-xl group-hover:translate-x-1 transition-transform">
                            →
                        </span>

                    </div>

                    <h3 class="font-display font-bold text-2xl mb-3">
                        Roster
                    </h3>

                    <p class="text-sm text-[#1F2937]/60 group-hover:text-white/60 leading-relaxed max-w-xs">
                        Lihat daftar pemain dan anggota yang tergabung dalam STEALL.
                    </p>

                </a>


                {{-- Schedule --}}
                <a
                    href="{{ route('schedule') }}"
                    class="group border-r border-b border-[#1F2937]/10 p-8 md:p-10 hover:bg-[#B91C1C] hover:text-white transition-all duration-300"
                >

                    <div class="flex justify-between items-start mb-16">

                        <span class="font-display text-4xl font-bold text-[#B91C1C] group-hover:text-white">
                            02
                        </span>

                        <span class="text-xl group-hover:translate-x-1 transition-transform">
                            →
                        </span>

                    </div>

                    <h3 class="font-display font-bold text-2xl mb-3">
                        Jadwal Latihan
                    </h3>

                    <p class="text-sm text-[#1F2937]/60 group-hover:text-white/70 leading-relaxed max-w-xs">
                        Akses jadwal latihan dan informasi kegiatan tim.
                    </p>

                </a>


                {{-- Gallery --}}
                <a
                    href="{{ route('gallery') }}"
                    class="group border-r border-b border-[#1F2937]/10 p-8 md:p-10 hover:bg-[#F3F4F6] transition-all duration-300"
                >

                    <div class="flex justify-between items-start mb-16">

                        <span class="font-display text-4xl font-bold text-[#B91C1C]">
                            03
                        </span>

                        <span class="text-xl group-hover:translate-x-1 transition-transform">
                            →
                        </span>

                    </div>

                    <h3 class="font-display font-bold text-2xl mb-3">
                        Galeri
                    </h3>

                    <p class="text-sm text-[#1F2937]/60 leading-relaxed max-w-xs">
                        Lihat dokumentasi latihan, pertandingan, dan kegiatan STEALL.
                    </p>

                </a>


                {{-- Application --}}
                @if (!$application)

                    <a
                        href="{{ route('application') }}"
                        class="group border-r border-b border-[#1F2937]/10 p-8 md:p-10 bg-[#F3F4F6] hover:bg-[#7F1D1D] hover:text-white transition-all duration-300"
                    >

                        <div class="flex justify-between items-start mb-16">

                            <span class="font-display text-4xl font-bold text-[#B91C1C] group-hover:text-white">
                                04
                            </span>

                            <span class="text-xl group-hover:translate-x-1 transition-transform">
                                →
                            </span>

                        </div>

                        <h3 class="font-display font-bold text-2xl mb-3">
                            Pendaftaran
                        </h3>

                        <p class="text-sm text-[#1F2937]/60 group-hover:text-white/70 leading-relaxed max-w-xs">
                            Lengkapi pendaftaran untuk menjadi anggota STEALL Basketball.
                        </p>

                    </a>

                @else

                    <div class="border-r border-b border-[#1F2937]/10 p-8 md:p-10 bg-[#F3F4F6]">

                        <div class="flex justify-between items-start mb-16">

                            <span class="font-display text-4xl font-bold text-[#B91C1C]">
                                04
                            </span>

                            @if ($application->status === 'pending')
                                <span class="text-xs font-bold text-yellow-600">
                                    PENDING
                                </span>
                            @elseif ($application->status === 'accepted')
                                <span class="text-xs font-bold text-green-600">
                                    ACCEPTED
                                </span>
                            @elseif ($application->status === 'rejected')
                                <span class="text-xs font-bold text-red-600">
                                    REJECTED
                                </span>
                            @endif

                        </div>

                        <h3 class="font-display font-bold text-2xl mb-3">
                            Status Pendaftaran
                        </h3>

                        <p class="text-sm text-[#1F2937]/60 leading-relaxed max-w-xs">

                            @if ($application->status === 'pending')
                                Pendaftaran kamu sedang menunggu proses verifikasi admin.
                            @elseif ($application->status === 'accepted')
                                Selamat, kamu telah resmi diterima sebagai anggota STEALL.
                            @elseif ($application->status === 'rejected')
                                Pendaftaran kamu belum dapat disetujui.
                            @endif

                        </p>

                    </div>

                @endif

            </div>

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- PROFILE --}}
    {{-- ================================================= --}}

    <section class="dashboard-reveal bg-[#0A0A0A] text-white" data-dashboard-reveal>

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-16">

            <div class="grid lg:grid-cols-2 gap-12 items-start">

                <div>

                    <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-4">
                        YOUR PROFILE
                    </p>

                    <h2 class="font-display font-bold text-4xl">
                        Akun kamu.
                    </h2>

                    <p class="text-white/50 leading-relaxed mt-5 max-w-md">
                        Pastikan informasi akun kamu selalu sesuai dan terbaru.
                    </p>

                </div>


                <div class="border-t border-white/10">

                    {{-- Name --}}
                    <div class="flex justify-between gap-6 py-5 border-b border-white/10">

                        <span class="text-xs tracking-widest text-white/40">
                            NAMA
                        </span>

                        <span class="text-sm font-medium text-right">
                            {{ auth()->user()->name }}
                        </span>

                    </div>


                    {{-- Email --}}
                    <div class="flex justify-between gap-6 py-5 border-b border-white/10">

                        <span class="text-xs tracking-widest text-white/40">
                            EMAIL
                        </span>

                        <span class="text-sm font-medium text-right break-all">
                            {{ auth()->user()->email }}
                        </span>

                    </div>


                    {{-- Edit --}}
                    <div class="pt-6">

                        <a
                            href="{{ route('profile.edit') }}"
                            class="inline-flex items-center gap-3 text-sm font-semibold text-[#B91C1C] hover:text-white transition-colors"
                        >
                            EDIT PROFIL
                            <span>→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- ================================================= --}}
    {{-- ANIMATION SCRIPT --}}
    {{-- ================================================= --}}

    <script>

        const dashboardRevealElements =
            document.querySelectorAll('[data-dashboard-reveal]');

        const dashboardObserver =
            new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('show');

                        dashboardObserver.unobserve(entry.target);

                    }

                });

            }, {
                threshold: 0.1
            });


        dashboardRevealElements.forEach(element => {

            dashboardObserver.observe(element);

        });

    </script>

</x-app-layout>