<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register — STEALL Basketball</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=poppins:500,600,700,800|inter:400,500,600&display=swap"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-[#F3F4F6] text-[#0A0A0A]">

    <div class="min-h-screen grid lg:grid-cols-2">

        {{-- ================= LEFT SIDE ================= --}}
        <section class="relative hidden lg:flex bg-[#0A0A0A] text-white overflow-hidden">

            {{-- Background text --}}
            <div
                class="absolute -left-16 bottom-[-40px] font-display font-extrabold text-[13rem] leading-none text-white/[0.03] select-none"
            >
                STEALL
            </div>

            {{-- Basketball decoration --}}
            <div
                class="absolute right-[-100px] top-1/2 -translate-y-1/2 opacity-90"
            >
                <svg width="500" height="500" viewBox="0 0 200 200" fill="none">

                    <circle
                        cx="100"
                        cy="100"
                        r="95"
                        fill="#B91C1C"
                    />

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
                    />

                </svg>
            </div>


            <div class="relative z-10 w-full flex flex-col justify-between p-12 xl:p-16">

                {{-- Logo --}}
                <a
                    href="{{ route('home') }}"
                    class="flex items-center w-fit"
                >
                    <img
                        src="{{ asset('images/steall-logo.png') }}"
                        alt="STEALL Basketball"
                        class="h-16 w-auto"
                    >
                </a>


                {{-- Main content --}}
                <div class="max-w-xl">

                    <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.3em] mb-6">
                        SMK TELKOM MAKASSAR
                    </p>

                    <h1 class="font-display font-extrabold text-6xl xl:text-7xl leading-[0.9] tracking-tight">

                        JOIN

                        <span class="block text-[#B91C1C]">
                            THE TEAM.
                        </span>

                    </h1>

                    <p class="text-white/60 text-base leading-relaxed mt-8 max-w-md">

                        Buat akun untuk menjadi bagian dari STEALL dan dapatkan akses
                        ke informasi tim, roster pemain, jadwal latihan, galeri,
                        serta pendaftaran anggota.

                    </p>

                </div>


                {{-- Bottom --}}
                <div class="flex items-center gap-4 text-white/40 text-xs">

                    <span class="w-10 h-px bg-[#B91C1C]"></span>

                    BUILT BY DISCIPLINE.

                </div>

            </div>

        </section>


        {{-- ================= RIGHT SIDE ================= --}}
        <section class="bg-white flex items-center justify-center px-6 py-12 lg:px-16">

            <div class="w-full max-w-md">

                {{-- Mobile logo --}}
                <a
                    href="{{ route('home') }}"
                    class="flex lg:hidden mb-12"
                >
                    <img
                        src="{{ asset('images/steall-logo.png') }}"
                        alt="STEALL Basketball"
                        class="h-14 w-auto"
                    >
                </a>


                {{-- Heading --}}
                <div class="mb-10">

                    <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-4">
                        CREATE ACCOUNT
                    </p>

                    <h2 class="font-display font-bold text-4xl leading-tight">

                        Start your journey.

                    </h2>

                    <p class="text-[#1F2937]/60 text-sm leading-relaxed mt-3">

                        Daftar menggunakan data siswa SMK Telkom Makassar.

                    </p>

                </div>


                {{-- Register Form --}}
                <form
                    method="POST"
                    action="{{ route('register') }}"
                    class="space-y-6"
                >

                    @csrf


                    {{-- Name --}}
                    <div>

                        <label
                            for="name"
                            class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3"
                        >
                            NAMA LENGKAP
                        </label>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Masukkan nama lengkap"
                            class="
                                w-full
                                border-0
                                border-b
                                border-[#1F2937]/25
                                px-0
                                py-3
                                bg-transparent
                                text-[#0A0A0A]
                                placeholder:text-[#1F2937]/35
                                focus:ring-0
                                focus:border-[#B91C1C]
                                transition-colors
                            "
                        >

                        @error('name')
                            <p class="text-[#B91C1C] text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3"
                        >
                            EMAIL
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            placeholder="nama@email.com"
                            class="
                                w-full
                                border-0
                                border-b
                                border-[#1F2937]/25
                                px-0
                                py-3
                                bg-transparent
                                text-[#0A0A0A]
                                placeholder:text-[#1F2937]/35
                                focus:ring-0
                                focus:border-[#B91C1C]
                                transition-colors
                            "
                        >

                        @error('email')
                            <p class="text-[#B91C1C] text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Kelas --}}
                    <div>

                        <label
                            for="kelas"
                            class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3"
                        >
                            KELAS
                        </label>

                        <input
                            id="kelas"
                            type="text"
                            name="kelas"
                            value="{{ old('kelas') }}"
                            required
                            placeholder="Contoh: XI RPL 1"
                            class="
                                w-full
                                border-0
                                border-b
                                border-[#1F2937]/25
                                px-0
                                py-3
                                bg-transparent
                                text-[#0A0A0A]
                                placeholder:text-[#1F2937]/35
                                focus:ring-0
                                focus:border-[#B91C1C]
                                transition-colors
                            "
                        >

                        @error('kelas')
                            <p class="text-[#B91C1C] text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Password --}}
                    <div>

                        <label
                            for="password"
                            class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3"
                        >
                            PASSWORD
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Minimal 8 karakter"
                            class="
                                w-full
                                border-0
                                border-b
                                border-[#1F2937]/25
                                px-0
                                py-3
                                bg-transparent
                                text-[#0A0A0A]
                                placeholder:text-[#1F2937]/35
                                focus:ring-0
                                focus:border-[#B91C1C]
                                transition-colors
                            "
                        >

                        @error('password')
                            <p class="text-[#B91C1C] text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Confirm Password --}}
                    <div>

                        <label
                            for="password_confirmation"
                            class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3"
                        >
                            KONFIRMASI PASSWORD
                        </label>

                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Masukkan kembali password"
                            class="
                                w-full
                                border-0
                                border-b
                                border-[#1F2937]/25
                                px-0
                                py-3
                                bg-transparent
                                text-[#0A0A0A]
                                placeholder:text-[#1F2937]/35
                                focus:ring-0
                                focus:border-[#B91C1C]
                                transition-colors
                            "
                        >

                    </div>


                    {{-- Submit --}}
                    <div class="pt-4">

                        <button
                            type="submit"
                            class="
                                w-full
                                bg-[#B91C1C]
                                text-white
                                py-4
                                text-sm
                                font-semibold
                                tracking-wide
                                hover:bg-[#7F1D1D]
                                transition-colors
                            "
                        >

                            CREATE ACCOUNT →

                        </button>

                    </div>

                </form>


                {{-- Login --}}
                <div class="mt-8 text-center">

                    <p class="text-sm text-[#1F2937]/60">

                        Sudah memiliki akun?

                        <a
                            href="{{ route('login') }}"
                            class="font-semibold text-[#B91C1C] hover:text-[#7F1D1D] transition-colors"
                        >
                            Login
                        </a>

                    </p>

                </div>


                {{-- Back home --}}
                <div class="mt-10 text-center">

                    <a
                        href="{{ route('home') }}"
                        class="text-xs font-medium tracking-wide text-[#1F2937]/40 hover:text-[#B91C1C] transition-colors"
                    >

                        ← KEMBALI KE WEBSITE

                    </a>

                </div>

            </div>

        </section>

    </div>

</body>

</html>