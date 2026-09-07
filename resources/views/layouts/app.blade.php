<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        {{ config('app.name', 'STEALL Basketball') }}
    </title>


    {{-- Fonts --}}
    <link
        rel="preconnect"
        href="https://fonts.bunny.net"
    >

    <link
        href="https://fonts.bunny.net/css?family=poppins:500,600,700,800|inter:400,500,600&display=swap"
        rel="stylesheet"
    />


    {{-- Vite --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


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


<body class="antialiased bg-white text-[#0A0A0A]">

    <div class="min-h-screen flex flex-col">

        {{-- =========================
            NAVIGATION
        ========================== --}}
        @include('layouts.navigation')


        {{-- =========================
            PAGE HEADER
        ========================== --}}
        @isset($header)

            <header class="bg-[#F3F4F6] border-b border-[#1F2937]/10">

                <div class="max-w-7xl mx-auto py-6 px-6 lg:px-8">

                    {{ $header }}

                </div>

            </header>

        @endisset


        {{-- =========================
            PAGE CONTENT
        ========================== --}}
        <main class="flex-1">

            {{ $slot }}

        </main>


        {{-- =========================
            FOOTER
        ========================== --}}
        <footer class="bg-[#0A0A0A] text-[#F3F4F6] py-14 px-6 lg:px-8">

            <div
                class="
                    max-w-7xl
                    mx-auto
                    grid
                    md:grid-cols-3
                    gap-10
                    border-b
                    border-white/10
                    pb-10
                "
            >


                {{-- STEALL --}}
                <div>

                    <div class="flex items-center gap-3 mb-4">

                        <img
                            src="{{ asset('images/steall-logo.png') }}"
                            alt="STEALL Basketball"
                            class="h-10 w-auto"
                        >

                        <div>

                            <h3
                                class="
                                    font-display
                                    font-bold
                                    text-lg
                                    text-white
                                "
                            >
                                STEALL
                            </h3>

                            <p
                                class="
                                    text-[10px]
                                    tracking-[0.2em]
                                    text-white/40
                                    uppercase
                                "
                            >
                                Basketball Team
                            </p>

                        </div>

                    </div>


                    <p
                        class="
                            text-sm
                            text-[#F3F4F6]/60
                            leading-relaxed
                            max-w-xs
                        "
                    >
                        Ekstrakurikuler Basket SMK Telkom Makassar.
                        Tempat siswa berkembang, berlatih, dan bertanding
                        bersama sebagai satu tim.
                    </p>

                </div>


                {{-- Navigation --}}
                <div>

                    <h4
                        class="
                            text-xs
                            tracking-widest
                            uppercase
                            text-[#F3F4F6]/50
                            mb-4
                        "
                    >
                        Navigasi
                    </h4>


                    <div
                        class="
                            flex
                            flex-col
                            gap-3
                            text-sm
                            text-[#F3F4F6]/70
                        "
                    >

                        <a
                            href="{{ route('home') }}"
                            class="
                                hover:text-white
                                transition-colors
                                w-fit
                            "
                        >
                            Home
                        </a>


                        <a
                            href="{{ route('about') }}"
                            class="
                                hover:text-white
                                transition-colors
                                w-fit
                            "
                        >
                            About Us
                        </a>


                        <a
                            href="{{ route('contact') }}"
                            class="
                                hover:text-white
                                transition-colors
                                w-fit
                            "
                        >
                            Contact
                        </a>


                        @auth

                            <a
                                href="{{ route('dashboard') }}"
                                class="
                                    hover:text-white
                                    transition-colors
                                    w-fit
                                "
                            >
                                Dashboard
                            </a>

                        @endauth

                    </div>

                </div>


                {{-- Contact --}}
                <div>

                    <h4
                        class="
                            text-xs
                            tracking-widest
                            uppercase
                            text-[#F3F4F6]/50
                            mb-4
                        "
                    >
                        Kontak
                    </h4>


                    <div
                        class="
                            flex
                            flex-col
                            gap-3
                            text-sm
                            text-[#F3F4F6]/70
                        "
                    >

                        <p>
                            SMK Telkom Makassar
                        </p>


                        <p>
                            Makassar, Sulawesi Selatan
                        </p>


                        <a
                            href="mailto:steall@smktelkom-mks.sch.id"
                            class="
                                hover:text-white
                                transition-colors
                                w-fit
                            "
                        >
                            steall@smktelkom-mks.sch.id
                        </a>

                    </div>

                </div>

            </div>


            {{-- Bottom Footer --}}
            <div
                class="
                    max-w-7xl
                    mx-auto
                    pt-6
                    flex
                    flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-3
                "
            >

                <p
                    class="
                        text-xs
                        text-[#F3F4F6]/40
                    "
                >
                    © {{ date('Y') }}
                    STEALL Basketball — SMK Telkom Makassar.
                </p>


                <p
                    class="
                        text-xs
                        text-[#F3F4F6]/30
                    "
                >
                    Built for STEALL Basketball
                </p>

            </div>

        </footer>

    </div>

</body>

</html>